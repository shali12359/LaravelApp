<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name 
    public $table = 'posts';
    public $primaryKey = 'id';
    public $timeStamps = true;

    // Relationship 
    public function user() {
        return $this->belongsTo('App\User');
    }
}
