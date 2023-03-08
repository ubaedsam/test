<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anaks extends Model
{
    use HasFactory;

    protected $table = "anak";

    public function checkup()
    {
        return $this->belongsTo(Checkups::class);
    }
}
