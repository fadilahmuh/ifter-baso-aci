<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'tanggal',
        'keterangan',
        'nominal',
        'is_pemasukan',
        'users_id'
    ];

    public function users(){
    	return $this->belongsTo(User::class);
    }
}
