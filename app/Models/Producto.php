<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Producto extends Model
{
    use HasFactory;
    protected $table='producto'; //hacemos referencia a la tabla producto


    //relacion uno a muchos inversa
    public function user(){
     //   return $this->belongsTo(User::class);  // o  
        return $this->belongsTo('App\Models\User');
}

}
