<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class equips extends Model
{
    public $timestamps = false; 
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = [''];

   
    public function local(){
        return $this->hasMany (partits::class, 'equip1_id');
    } 

    public function visitante(){
        return $this->hasMany (partits::class, 'equip2_id');
    } 

    public function partits (){
        return $this->hasMany (partits::class, 'equip1_id')
                    ->orWhere ('equip2_id', $this->id);
    }

}
