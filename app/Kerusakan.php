<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;
use App\User;
class Kerusakan extends Model
{
    //
    protected $table='kerusakan';
    protected $fillable = [
        'nama_kerusakan',
        'status_perbaikan',
        
        
     ];
     public function barang(){
        return $this->belongsTo(App\Barang::class,'barang_id');
     }

     public function users(){
        return $this->belongsTo(App\User::class,'user_id');
     }





}
