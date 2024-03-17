<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    //funcion para relacion de uno a uno
    public function profile()
    {
        //primera forma de consulta
        // $profile=Profile::where('user_id',$this->id)->first();                   //en esa var va hacer uso del metodo profile //si user_id es igual a id y hace la busqueda
        // return $profile;
        //lo mismo con eloquent
        return $this->hasOne(Profile::class);
        //this hace referencia a la clase metodo hasOne de conexion de uno a uno del modelo profile 
        //retorna a que perfil pertenece
    }


    //funcion para relacion de uno a muchos
    public function mostrar_productos()
    {
        //return $this->hasMany(Producto::class);  // o  
        return $this->hasMany('App\Models\Producto');
    }


    //funcion para la relacion muchos a muchos
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
