<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Has;

class Guru extends Model
{
    use SoftDeletes;

    protected $fillable = ['nip', 'nama_guru', 'jk', 'telp', 'alamat'];

    protected $table = 'guru';
}
