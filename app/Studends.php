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
    protected $fillable = [
        'name', 'email', 'password','lastname', 'profilePicture', 'phone','address','cp','city','club','activity','license','startLicense','endLicense','rate','idTeacher',
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