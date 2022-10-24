<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{



    public function index(){
        //Special Note: This is where the task is getting into some doubtable situation
        /* In here there are two ways to handle this situation
        *   1. We can assume that the file just given as example and we do not 
        *      need to think about pagination at all because if we get this object from huge set of data 
        *      we have the ability to call specific pages for small set of data to receive
        *   2. We can think about this is non-controllable huge json file and we have to
        *      do some specific arrangements for getting paginated sets of data 
        *      and when the scrolling event occur we can get the next set of data
        *    
        *   Assumption:: Due to its small set of data in the file I have assumed
        *   that this JSON file should not be break in to small peices using
        *   json-api or any other perticular library
        *   So I was went with Number 2. If there is a need of doing 1st way, I can do that as well. 
        *   
        */
        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $original_data_set = json_decode($json_file, true);
        $filtered_data_Set = array_filter($original_data_set, function($object) {
            return isset($object['attachments']);
        });
        return NewsResource::collection($filtered_data_Set);
    }
}
