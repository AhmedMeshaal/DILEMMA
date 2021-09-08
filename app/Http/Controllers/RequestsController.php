<?php

namespace App\Http\Controllers;
use App\Models\Request;
//use Illuminate\Http\Request;


class RequestsController extends Controller
    {

        public function index(){

//            USED TO DEBUG THE RETRIEVED DATA
//            dd(Request::all());

            $requests = Request::all();
            return view('requests.index', ['requests' => $requests]);
        }

        public function create(){

            return view('requests.create');
        }

        public function store(){

            request()->validate([
                'ID' => 'ID',
                'RequestOwnerID' => 'RequestOwnerID',
                'RequestSubject' => 'RequestSubject',
                'RequestDescription' => 'RequestDescription',
                'RequestStatus' => 'RequestStatus',
                'RequestRangeCost' => 'RequestRangeCost',
                'RequestDate' => 'RequestDate',
                'AppoinmentDate' => 'AppoinmentDate',
            ]);

            Request::create([
                'ID' => request('ID'),
                'RequestOwnerID' => request('RequestOwnerID'),
                'RequestSubject' => request('RequestSubject'),
                'RequestDescription' => request('RequestDescription'),
                'RequestStatus' => request('RequestStatus'),
                'RequestRangeCost' => request('RequestRangeCost'),
                'RequestDate' => request('RequestDate'),
                'AppoinmentDate' => request('AppoinmentDate'),
            ]);

            return redirect('/requests');
        }

        public function edit(Request $request){

            return view('requests.edit', ['request' => $request]);
        }

        public function update(Request $request){

//            USED TO DEBUG UPDATED DATA
//            dd(request()->all());

            request()->validate([
                'ID' => 'ID',
                'RequestOwnerID' => 'RequestOwnerID',
                'RequestSubject' => 'RequestSubject',
                'RequestDescription' => 'RequestDescription',
                'RequestStatus' => 'RequestStatus',
                'RequestRangeCost' => 'RequestRangeCost',
                'RequestDate' => 'RequestDate',
                'AppoinmentDate' => 'AppoinmentDate',
            ]);

            $request->update([
                'ID' => request('ID'),
                'RequestOwnerID' => request('RequestOwnerID'),
                'RequestSubject' => request('RequestSubject'),
                'RequestDescription' => request('RequestDescription'),
                'RequestStatus' => request('RequestStatus'),
                'RequestRangeCost' => request('RequestRangeCost'),
                'RequestDate' => request('RequestDate'),
                'AppoinmentDate' => request('AppoinmentDate'),
            ]);


            return redirect('/requests');
        }

    }
