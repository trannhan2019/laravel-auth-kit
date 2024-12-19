<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Congty extends Model
{
    use HasFactory;

    protected $fillable = ['ten', 'ten_viet_tat', 'sdt', 'dia_chi', 'trang_thai'];
}
