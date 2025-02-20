<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_proveedores'; 
    protected $fillable=['id_proveedores','nombre','rfc','created_at','updated_at'];
}
