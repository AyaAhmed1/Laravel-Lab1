<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.

     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
            return [
                'title'=>$this->title,
                'description'=>$this->description,
                'creared_at'=>$this->created_at
               // ,'user'=> $this->user
                //new User(User::find($this->user_id)),
                // return new UserResource(User::find(1));
                //blf 3la object object
              //  'my_new_title'=>$this->title,
                //'user'=>new usr($this ->user)
                        ];
    }
}
