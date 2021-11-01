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

        $bSearch = false;
        $searchData = array();
//        $sqlSearch = "users.id = ".Auth::id();


        $sqlSearch = "1=1 ";
        $Search = request('Search');
        $SearchTagName = request('SearchTagName');
        $SearchDropDown = request('SearchDropDown');

        if ($Search){

            $sqlSearch .= $SearchTagName ? " and tag.Name LIKE '%".$SearchTagName."%'" : "";

            $sqlSearch .= $SearchDropDown ? " and tag.Name LIKE '%".$SearchDropDown."%'" : "";

            $bSearch = true;

        }


        $searchData['SearchTagName'] = $SearchTagName ? $SearchTagName : "";
        $searchData['SearchDropDown'] = $SearchDropDown ? $SearchDropDown : "";

        $set_page_num = request('set_page_num');
        $page_num = isset($_COOKIE['page_num']) ? $_COOKIE['page_num'] : "30";
        if ($set_page_num){
            setcookie('page_num', $set_page_num, time() + (14+24*60*60), '/');
            $page_num = $set_page_num;
        }

        $sort = request('sort');
        $sort_name = isset($_COOKIE['sort_name']) ? $_COOKIE['sort_name'] : "";
        $sort_ascdesc = isset($_COOKIE['sort_ascdesc']) ? $_COOKIE['sort_ascdesc'] : "";

        if ($sort){
            if ($sort_name == $sort){
                if ($sort_ascdesc == "desc"){
                    $sort_ascdesc = "asc";
                }else{
                    $sort_ascdesc = "desc";
                }
            }else{
                $sort_ascdesc = "asc";
            }
            setcookie('sort_ascdesc', $sort_ascdesc, time() + (14*24*60*60), '/');
            setcookie('sort_name', $sort, time() + (14*24*60*60), '/');
            $sort_name = $sort;
        }

        $sort_ascdesc_img = "<img src='/image/icons/Arrowup.gif'>";
        if ($sort_ascdesc == "desc"){
            $sort_ascdesc_img = "<img src='/image/icons/Arrowup.gif'>";

        }

        switch($sort_name){
            case 'tag_name': $sqlOrderBy = "TagName ".$sort_ascdesc; break;
            case 'date': $sqlOrderBy = "tag.Date ".$sort_ascdesc; break;
            default: $sqlOrderBy = "tag.Date ".$sort_ascdesc;
        }

        $tagsList = DB::table("tag")
            ->select("tag.*", "tag.Name as TagName")
            ->orderByRaw($sqlOrderBy)
            ->whereRaw($sqlSearch)
            ->paginate($page_num != "All" ? $page_num : "9999999999");

        $tagsListAll = DB::table("tag")
            ->select("tag.*", "tag.Name as TagName")
            ->orderByRaw($sqlOrderBy)
            ->paginate($page_num != "All" ? $page_num : "9999999999");

        return view('tagged.tags',[
            'tagList' => $tagsList,
            'tagsListAll' => $tagsListAll,
            'sort_name' => $sort_name,
            'sort_ascdesc' => $sort_ascdesc,
            'sort_ascdesc-img' => $sort_ascdesc_img,
            'page_num' => $page_num,
            'bSearch' => $bSearch,
            'searchData' => $searchData,
            'sqlSearch' => $sqlSearch
//            'sqlSearchDropDown' => $sqlSearchDropDown
        ]);

    }


}
