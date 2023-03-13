<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidemenu extends Model
{
    use HasFactory;

    public function children()
{
    return $this->hasMany(Sidemenu::class, 'parent_id');
}

public function parent()
{
    return $this->belongsTo(Sidemenu::class, 'parent_id');
}

}
