<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    protected $fillable=[
        'title',
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
