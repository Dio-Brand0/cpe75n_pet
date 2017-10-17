<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Topics;
use App\Models\User;

class Comments extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message'
    ];

    public function topic()
    {
    	return $this->belongsTo('Topics');
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }
}
