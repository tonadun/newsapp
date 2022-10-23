<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use App\Services\NewsFormattingService;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        

        return [
                'id' => NewsFormattingService::format_id($this),
                'text' => NewsFormattingService::format_text($this),
                'title' => NewsFormattingService::format_title($this),
                'image_url' => NewsFormattingService::format_image_url($this),
                'title_link' => NewsFormattingService::format_title_link($this),
                'written_by' => NewsFormattingService::format_written_by($this),
                'profile_image' => NewsFormattingService::format_profile_image($this),
                'date' => NewsFormattingService::format_date($this)
        ];
        
        
    }
}
