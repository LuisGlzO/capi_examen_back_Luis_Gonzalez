<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_domicilio extends Model
{
    use HasFactory;
    protected $table = "user_domicilios";
    public $timestamps = false;

    public function usuariosCasa(){
        return $this->hasOne(User::class, 'id');
    }
}
