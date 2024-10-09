<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Server;

class Cron extends Model
{

    use HasFactory;

    protected $table = 'cron';
    protected $fillable = ['title','script'];

    public function cron(){
        return $this->belongsTo(Server::class);
    }
}
