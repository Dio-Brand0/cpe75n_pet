<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;

class Topics extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    public function comments()
    {
    	return $this->hasMany('Comments');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
