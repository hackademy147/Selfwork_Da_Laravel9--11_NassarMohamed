<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;
    protected $fillable=[
           'username', 'titolo','partenza','arrivo','user_id',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
