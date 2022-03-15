<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $fillable = ['id_menu', 'harga', 'jumlah'];
    protected $visible = ['id_menu', 'harga', 'jumlah'];
    public function menu()
    {
        return $this->belongsTo('App\models\menu', 'id_menu');
    }

}
