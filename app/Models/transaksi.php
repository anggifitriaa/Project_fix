<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id_pembeli', 'menu_id', 'total'];
    protected $visible = ['id_pembeli', 'menu_id', 'total'];

    public function menu()
    {
        return $this->belongsTo('App\models\menu', 'menu_id');
    }
    public function pembeli()
    {
        return $this->belongsTo('App\models\pembeli', 'id_pembeli');
    }
}
