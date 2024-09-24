<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'sender_id', 'department_id', 'text', 'attachments'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class,'sender_id', 'id');
    }

    public function getAttachmentsAttribute($val)
    {
        return json_encode($val);
    }

    public function setAttachmentsAttribute($val){
        return json_encode($val);
    }
}
