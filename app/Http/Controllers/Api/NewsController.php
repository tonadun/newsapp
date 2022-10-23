<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\NewsResource;

class NewsController extends Controller
{
    public function index(){
        $json_file = Storage::disk('private')->get("2020-01-02.json");
        $original_data_set = json_decode($json_file, true);
        $filtered_data_Set = array_filter($original_data_set, function($object) {
            return isset($object['attachments']);
        });
        return NewsResource::collection($filtered_data_Set);
    }
}
