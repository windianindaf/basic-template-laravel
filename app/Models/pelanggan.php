<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table = "pelanggan";
    protected $primaryKey = "id";
    protected $fillable = [
        'gol_id', 'pel_no', 'pel_nama', 'pel_alamat', 'pel_hp', 'pel_ktp',
        'pel_seri', 'pel_meteran', 'pel_aktif', 'user_id'];
    
}
