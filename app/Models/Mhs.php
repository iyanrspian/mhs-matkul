<?php

namespace App\Models;

use App\Models\Matkul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mhs extends Model
{
    use HasFactory;

    protected $table = 'mhs';
    protected $fillable = ['id', 'npm', 'nama', 'jurusan', 'alamat', 'matkul_id'];

    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }
}
