<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'creator_id',
        'user_id',
        'title',
        'deadline',
        'submit_at',
        'description',
        'attachments',
        'status'
    ];

    public function creator()
    {
        return $this->hasOne(User::class,'id','creator_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
