<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{


    protected $fillable = [
        'name', 'author', 'category',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table = 'blogs';
    public function intern()
    {
        return $this->belongsTo(Intern::class);
    }
}