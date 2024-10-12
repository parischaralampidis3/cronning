<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cron;


class UserInput extends Model
{
    use HasFactory;
    protected $fillable = [
        'cron_id',
        'input_key',
        'input_value'
    ];

    public function cron(){
        return $this->belongsTo(Cron::class,'cron_id');
    }
}

