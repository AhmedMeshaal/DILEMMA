<?php

namespace App\Http\Controllers;
use App\Models\Request;
use DB;


class RequestsController extends Controller
    {

//        RETRIEVE ALL TABLE ROWS
        public function index()
        {
            $arrDataRecords = DB::table('requests')->get();
            return view('requests.index', ['records' => $arrDataRecords]);
        }

//        RETRIEVE SINGLE ROW FROM A TABLE
        public function show(Request $request)
        {
            $request_id = request('request_id');

            $singleRecord = DB::table('requests')->find($request_id);
//            print_r($singleRecord);

            return view('requests.show', ['arrRecordData' => $singleRecord]);
        }

//        VIEW CREATE FORM PAGE
        public function create()
        {
            return view('requests.create');
        }

//        STORE THE INSERTED DATA IN THE FORM
        public function store()
        {

            DB::table('requests')->insert([
                'RequestOwnerID' => request('RequestOwnerID'),
                'RequestSubject' => request('RequestSubject'),
                'RequestDescription' => request('RequestDescription'),
                'RequestStatus' => request('RequestStatus'),
                'RequestRangeCost' => request('RequestRangeCost'),
                'RequestDate' => request('RequestDate'),
                'AppoinmentDate' => request('AppoinmentDate')
                ]);

//            TRY TO REDIRECT TO THE CREATED ID LATER
            return redirect('/requests');
        }

//        VIEW EDIT FORM WITH DISPLAYING THE RECORD DATA
        public function edit(Request $request)
        {
            $request_id =  request('request_id');
            return view('requests.edit',[
                'request_id'=>$request_id,
                'request'=>$request,
            ]);
        }

//        UPDATE THE RECORD IN DATABASE
        public function update(Request $request)
        {

            $request_id =  request('request_id');

            $arrDataUpdate = array(
                'RequestOwnerID' => request('RequestOwnerID'),
                'RequestSubject' => request('RequestSubject'),
                'RequestDescription' => request('RequestDescription'),
                'RequestStatus' => request('RequestStatus'),
                'RequestRangeCost' => request('RequestRangeCost'),
                'RequestDate' => request('RequestDate'),
                'AppoinmentDate' => request('AppoinmentDate'),
            );

            DB::table('requests')->where('requests.ID', $request_id)->update($arrDataUpdate);

            return redirect('/requests/show/'.$request_id)->with('status', 'Record updated!');

        }

}
