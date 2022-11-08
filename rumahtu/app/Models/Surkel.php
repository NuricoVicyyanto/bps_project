<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surkel extends Model
{
    protected $fillable = ['index', 'date', 'kode_surat', 'alamat', 'tanggal', 'perihal'];
    use HasFactory;
}
