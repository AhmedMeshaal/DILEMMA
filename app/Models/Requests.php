<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Requests extends Model
    {

        use HasFactory;

        public $timestamps = false;

        protected $fillable = [
          'ID','SubmittedBy', 'RequestSubject', 'RequestDescription', 'RequestStatus', 'OfferPrice', 'DateSubmitted', 'AppointmentDate', 'DocumentName', 'FilePath'
        ];
    }

//CREATE TABLE `dilemma`.`requestdocument` ( `ID` INT(12) NOT NULL AUTO_INCREMENT , `RequestID` INT(12) NULL , `DocumentName` VARCHAR(255) NULL , `SubmittedBy` INT(12) NULL , `DateSubmitted` DATETIME NULL , PRIMARäY KEY (`ID`)) ENGINE = MyISAM;
