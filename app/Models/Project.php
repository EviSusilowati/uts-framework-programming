<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'table_projects';
    public $timestamps = true;



    protected $fillable = [
        'nomor',
        'tanggal',
        'created_at',
        'pengirim',
      
    ];
}