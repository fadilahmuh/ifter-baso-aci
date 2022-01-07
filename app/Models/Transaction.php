<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];

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
