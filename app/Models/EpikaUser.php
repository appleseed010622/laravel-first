<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpikaUser extends Model
{
    protected $fillable = [
        'contract_date',
        'birth',
        'construction',
        'payment',
    ];
}   
