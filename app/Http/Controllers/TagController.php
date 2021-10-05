<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Carbon\Traits\Date;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use DB;
use function Doctrine\Common\Cache\Psr6\get;



class TagController extends Controller {

    public function tag()
    {
        $arrDataRecords = DB::table('tag')->get();

        return view('tagged.tags', ['tags' => $arrDataRecords]);

    }

    public function tagged_request()
    {
        $tag_id = request('tag_id');

        $arrTagged = DB::table('requests')->where('TagID', '=', $tag_id)->get();

        "<pre>";
        print_r($arrTagged); exit();
        "</pre>";

        return view('tagged.tagged_request', ['tagged_request' => $arrTagged]);
    }

}
