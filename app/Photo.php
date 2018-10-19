<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;
class Photo extends Model
{
    //
    protected $table="photos";
    protected $fillable = [
        'src'
        
     ];
     public function barang(){
         return $this->belongsTo(Barang::class,'photo_id');
     }
}
