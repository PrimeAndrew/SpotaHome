<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Verificacion_Propiedad extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_verificacion_propiedades','estado'
    ];

    protected $table = "verificacion_propiedad";
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id_verificacion_propiedad';


    public function propiedad(){

        return $this->belongsTo(Propiedad::class);

    }
    public function empleado(){

        return $this->belongsTo(Empleado::class);

    }
}
