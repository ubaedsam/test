<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkups extends Model
{
    use HasFactory;

    protected $table = "checkup";

    public function anaks()
    {
        $this->hasMany(Anaks::class);
    }
}
