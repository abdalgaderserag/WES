<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'leader_id',
    ];

    public function leader()
    {
        return $this->hasOne(User::class,'id','leader_id');
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
