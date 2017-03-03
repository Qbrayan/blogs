<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'department','contact'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table = 'interns';
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
