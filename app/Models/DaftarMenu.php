<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarMenu extends Model
{
    use HasFactory;
    protected $table = 'daftar_menu';

    public function user() {
        return $this->belongsTo(User::class);
    }
}
