<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KihonJouhouItem extends Model
{
    use HasFactory;
    // Override $table property...
    protected $table = "dbo.M_CDM006";
}
