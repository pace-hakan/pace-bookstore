<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'description'];

    public function getCreatedAtAttribute($date) {
        return \Carbon\Carbon::createFromTimestamp(strtotime($date))->format('d-m-Y H:i:s');
    }

    public function getUpdatedAtAttribute($date) {
        return \Carbon\Carbon::createFromTimestamp(strtotime($date))->format('d-m-Y H:i:s');
    }

}
