<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;
    protected $table = 'detail_users';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
