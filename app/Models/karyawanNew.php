<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawanNew extends Model
{
    use HasFactory;

    protected $table = 'karyawan'; // Specify the correct table name

    protected $fillable = ['kodepegawai', 'namalengkap', 'divisi', 'departemen'];
}
