<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'author_id', 'publisher_id',
    ];

    public function Publisher() {
        return $this->belongsTo("App\Publisher");
    }

    public function Author() {
        return $this->belongsTo("App\Author");
    }
}
