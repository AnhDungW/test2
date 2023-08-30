<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
    ];
    public function parent()
    {
        
        return $this->belongsTo(group::class,'parent_id');
    }

    public function children()
    {
        return $this->hasMany(group::class,'parent_id');
    }

    public function users()
    {
        return $this->hasMany(group::class,'parent_id');
    }
}
