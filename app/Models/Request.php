<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Request extends Model
    {

        use HasFactory;

        public $timestamps = false;

        protected $fillable = [
          'ID','RequestOwnerID', 'RequestSubject', 'RequestDescription', 'RequestStatus', 'RequestRangeCost', 'RequestDate', 'AppoinmentDate'
        ];
    }
