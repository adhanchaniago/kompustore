<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function masters()
    {
        return $this->hasMany(Master::class, 'kategori_id', 'id');
    }
}
