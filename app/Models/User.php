<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;

//use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Permission\Models\Role;


// spatie
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'roles_id',
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
    
     // Relación con la clase Rol y clave foránea
    public function rol()
    {
        return $this->belongsTo(Role::class);
    }

    public function tieneRol($rol)
    {
        return $this->rol && $this->rol->nombreRol === $rol;
    }


    protected function roles_id(): Attribute 
    {
        return new Attribute(
            get: fn($value) => ['auxiliar','colaborador','lider'][$value],
        );
    }
}
