<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'teachers';

    protected $fillable = [
        'id','name', 'email','lastname', 'profilePicture', 'fNacimiento', 'phone','address','cp','city','activity','license','rate','idUser',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];


    public function user()
    {
      return $this->belongsTo(User::class,'idUser');
    }

    public function studends(){
        return $this->hasMany(Studends::class, 'idTeacher');
    }
}