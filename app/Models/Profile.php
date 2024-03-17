<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user(){
        //primera forma de consulta
        // $user=User::find($this->user_id);   
        // return $user;
        //lo mismo con eloquent

        return $this->belongsTo(User::class);    //retorna a q usuario pertenece

    }



}
