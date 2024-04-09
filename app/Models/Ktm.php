<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktm extends Model
{
    use HasFactory;

    protected $table = 'ktm';
    protected $primaryKey = 'id_mahasiswa';

    public function mahasiswa(){
        return $this->belongsto(Mahasiswa::class);
    }
}
