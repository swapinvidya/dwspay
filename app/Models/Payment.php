<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\RecordsActivity;

class Payment extends Model
{
    use HasFactory;
    use RecordsActivity;
    protected $fillable = ['uuid'];
}
