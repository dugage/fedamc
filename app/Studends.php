<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studends extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'studends';

    protected $fillable = [
        'name', 'email', 'birdDate','lastname', 'phone','address','cp','city','club','activity','license','startLicense','endLicense','rate','idUser','idTeacher',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token','rol',
    ];

    function user(){
        return $this->belongsTo(User::class, 'idUser');
    }

    function teacher(){
        return $this->belongsTo(Teachers::class, 'idTeacher');
    }
}