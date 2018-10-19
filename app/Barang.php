<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;
class Barang extends Model
{
    //
    protected $table = 'users';
    protected $fillable = [
       'nama_barang',
       'kategori',
       'jumlah',
       'keterangan',
       'photo_id'
       
    ];
    public function photo(){
        return $this->hasMany(Photo::class,'photo_id');
    }
    public function kerusakan(){
        return $this->hasMany(Kerusakan::class);
    }
}
