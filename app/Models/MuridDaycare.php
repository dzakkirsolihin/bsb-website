<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MuridDaycare extends Model
{
    use SoftDeletes;

    protected $fillable = ['no_induk', 'nama_siswa', 'jk', 'no_telp_orang_tua', 'alamat', 'kelas_id'];

    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas')->withDefault();
    }

    protected $table = 'murid_daycare';
}
