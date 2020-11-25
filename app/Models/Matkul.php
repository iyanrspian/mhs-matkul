<?php

namespace App\Models;

use App\Models\Mhs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matkul';
    protected $fillable = ['id', 'nama_mk', 'dosen_mk'];
    
    public function mhs()
    {
        return $this->hasMany(Mhs::class);
    }
}
