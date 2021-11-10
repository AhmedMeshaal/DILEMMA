<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Carbon\Traits\Date;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Requests;
use App\Models\RequestDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\File;
use DB;
use function Doctrine\Common\Cache\Psr6\get;



class RequestsController extends Controller
    {

//        RETRIEVE ALL TABLE ROWS
        public function index()
        {
            $arrDataRecords = DB::table('requests')->join('tag', 'TagID', '=', 'tag.ID')->select('requests.*', 'tag.Name as TagName')->get();
            return view('requests.index', ['records' => $arrDataRecords]);
        }

//        RETRIEVE SINGLE ROW FROM A TABLE
        public function show(Request $request)
        {
            $request_id = request('request_id');

            $arrRecord = DB::table('requests')->leftJoin('tag', 'requests.TagID', '=', 'tag.ID')->select('requests.*', 'tag.Name as TagName')->where('requests.ID', '=', $request_id)->first();

//            print_r($arrRecord); exit();

            return view('requests.show', ['record' => $arrRecord]);
        }

//        VIEW CREATE FORM PAGE
        public function create()
        {
            $arrTags = DB::table('tag')->get();
            return view('requests.create', ['tags' => $arrTags]);
        }

//        STORE THE INSERTED DATA IN THE FORM
        public function store(Request $request)
        {
            $TagID = request('TagID');
            $Subject = request('RequestSubject');
            $Description = request('RequestDescription');
            $Status = request('RequestStatus');
            $Offer = request('OfferPrice');
            $Appointment = request('AppointmentDate');
            $WrittenDate = request('WrittenDate');
            $DocumentName = request('DocumentName');

            $arrInsert = array(
                'SubmittedBy' => Auth::id(),
                'TagID' => $TagID,
                'RequestSubject' => $Subject,
                'RequestDescription' => $Description,
                'RequestStatus' => $Status,
                'OfferPrice' => $Offer,
                'DateSubmitted' => Date("Y-m-d H:i:s", time()),
                'AppointmentDate' => $Appointment,
                'WrittenDate' => $WrittenDate,
                'DocumentName' => $DocumentName
                );

//            print_r($arrInsert); exit();

            $path = $request->file('FilePath')->store('FilePath');
            $arrInsert['FilePath'] = $path;

            DB::table("Requests")->insert($arrInsert);

//            TRY TO REDIRECT TO THE CREATED ID LATER
            return redirect('/requests');
        }

//        VIEW EDIT FORM WITH DISPLAYING THE RECORD DATA
        public function edit(Request $request)
        {
            $request_id =  request('request_id');


            $arrRequests = DB::table('requests')->find($request_id);
            $arrTags = DB::table('tag')->get();


            return view('requests.edit',[
                'request_id'=>$request_id,
                'tags' => $arrTags,
                'requests'=>$arrRequests,
            ]);

        }

//        UPDATE THE RECORD IN DATABASE
        public function update(Request $request)
        {

            $request_id =  request('request_id');

            $arrDataUpdate = array(

                'RequestSubject' => request('RequestSubject'),
                'RequestDescription' => request('RequestDescription'),
                'RequestStatus' => request('RequestStatus'),
                'OfferPrice' => request('OfferPrice'),
                'AppointmentDate' => request('AppointmentDate'),
                'WrittenDate' => request('WrittenDate'),
                'TagID' => request('TagID'),
                'DocumentName' => request('DocumentName'),
                'FilePath' => request('FilePath')
                );

            $path = $request->file('FilePath')->store('FilePath');
            $arrDataUpdate['FilePath'] = $path;

//            print_r($arrInsert); exit();

//            DB::table("Requests")->update($arrInsert);


            DB::table('requests')->where('requests.ID', $request_id)->update($arrDataUpdate);


            return redirect('/requests/show/'.$request_id)->with('status', 'Record updated!');
        }

        public function display_request_image()
        {

            $request_id = request('request_id');
            $arrRequestFile = DB::table("requests")
                ->where("ID","=",$request_id)
                ->get();


            $filename_path = storage_path()."/app/".$arrRequestFile[0]->FilePath;
            if (exif_imagetype($filename_path)){
                header('Content-Description: File Transfer');
                header('Content-Type: content-type: image/jpeg');
                //header('Content-Disposition: attachment; filename="'.$arrClaimDoc['Name'].".".$ext.'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filename_path));
            }
            readfile($filename_path);
            return NULL;
        }



}
