<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use carbon;

class Post extends Model
{
    use Sluggable;

    protected $fillable=[
        'title','description','user_id'
    ];

    public function user() {
        return $this ->belongsTo(User::class);
    }
    public function getHumanReadableAttribute(){
        return   carbon\Carbon::parse($this->created_at)->format('d-m-Y');
    }
    public function getHumanReadableDataAttribute(){
      return  carbon\Carbon::parse($this->created_at)->format('l jS \\of F Y h:i:s A');
    }
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
