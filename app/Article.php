<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'created_at',
        'user_id'
    ];

    protected $dates = ['created_at']; 

    public function scopePublished($query){
        $query->where('created_at', '<=', Carbon::now());
    }

    public function setPublishedAtAttribute($date){
        $query->where('created_at', '<=', Carbon::now());
    }

    public function scopeUnPublished($query){
        $query->where('created_at', '>', Carbon::now());
    }

    public function getCreatedAtAttribute($date){
        return new Carbon($date);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function getTagListAttribute(){
        return $this->tags->pluck('id')->all();
    }
}
