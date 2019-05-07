<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      // return parent::toArray($request);
      // From all the data requested via index method to show all the articles, we only want the id, title and body fields
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    public function with($request)
    {
        return [
              'version' => '1.0.0',
              'author_url' => url('https://github.com/PapitomasterDeveloper')
        ];
    }
}
