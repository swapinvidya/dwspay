<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'subject_type',
        'name',
        'user_id',
        "to_name",
        "body"
    ];

    public function getEmail(){
        return $this->belongsTo(email::class,'subject_id');
    }
   
}
