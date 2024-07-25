<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;
    protected $fillable=[
           'username', 'titolo','partenza','arrivo','user_id','category_id'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Category(){
        return $this->belongsTo(User::class);
    }
    public function companies(){
        return $this->belongsToMany(Company::class);
    }
}
