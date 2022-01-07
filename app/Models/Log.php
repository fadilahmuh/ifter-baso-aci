<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'keterangan',
        'type',
        'transactions_id',
        'users_id'
    ];

    public function users(){
    	return $this->belongsTo(User::class);
    }

    public function transactions(){
    	return $this->belongsTo(Transaction::class)->withTrashed();
    }
}
