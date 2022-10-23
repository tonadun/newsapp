<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;

class NewsFormattingService{

    public static function format_id($jsonObject){
        $value = $jsonObject['client_msg_id'];
        if(isset($value)){
            return $value;
        }else{
            return null;
        }
    }

    public static function format_title($jsonObject){
        $value = (isset($jsonObject['attachments']) && isset($jsonObject['attachments'][0]["title"]))? $jsonObject['attachments'][0]["title"] : null;
        if(isset($value)){
            return $value;
        }else{
            return null;
        }
    }

    public static function format_text($jsonObject){
        $value = (isset($jsonObject['attachments']) && isset($jsonObject['attachments'][0]["text"]))? $jsonObject['attachments'][0]["text"] : null;
        if(isset($value)){
            return $value;
        }else{
            return null;
        }
    }

    public static function format_image_url($jsonObject){
        $value = (isset($jsonObject['attachments']) && isset($jsonObject['attachments'][0]["image_url"]))? $jsonObject['attachments'][0]["image_url"] : null;
        if(isset($value)){
            return $value;
        }else{
            return null;
        }
    }

    public static function format_title_link($jsonObject){
        $value = (isset($jsonObject['attachments']) && isset($jsonObject['attachments'][0]["title_link"]))? $jsonObject['attachments'][0]["title_link"] : null;
        if(isset($value)){
            return $value;
        }else{
            return null;
        }
    }

    public static function format_written_by($jsonObject){
        $value = (isset($jsonObject['user_profile']) && isset($jsonObject['user_profile']["display_name"]))? $jsonObject['user_profile']["display_name"] : null;
        if(isset($value)){
            return $value;
        }else{
            return null;
        }
    }

    public static function format_profile_image($jsonObject){
        $value = (isset($jsonObject['user_profile']) && isset($jsonObject['user_profile']["image_72"]))? $jsonObject['user_profile']["image_72"] : Storage::url("images/user_default.png");
        if(isset($value)){
            return $value;
        }else{
            return Storage::url("images/user_default.png");
        }
    }

    public static function format_date($jsonObject){
        $value = $jsonObject['ts'];
        if(isset($value)){
            return gmdate("M d, h:iA", $value);
        }else{
            return null;
        }
    }

}