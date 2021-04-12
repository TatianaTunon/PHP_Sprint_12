<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partits extends Model
{
    public $timestamps = false; 
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = [''];

}
