<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $fillable = ['id_menu','gambar_menu', 'nama_menu', 'harga','deskripsi'];
    protected $visible = ['id_menu', 'gambar_menu', 'nama_menu', 'harga','deskripsi'];

    public function pembeli()
    {
        return $this->belongsTo('App\models\pembeli','id_menu');
    }
    public function image()
    {
        if ($this->gambar_menu && file_exists(public_path('images/menus/' . $this->gambar_menu))) {
            return asset('images/menus/' . $this->gambar_menu);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar_menu && file_exists(public_path('images/menus/' . $this->gambar_menu))) {
            return unlink(public_path('images' . $this->gambar_menu));
        }
    }
    public function transaksi()
    {
        return $this->belongsTo('App\models\transaksi','menu_id');
    }

}
