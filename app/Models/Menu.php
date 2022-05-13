<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    #one To many
    public function contents() {
        return $this->hasMany(Content::class);
    }

    public function parent() {
        return $this->belongsTo(Menu::class,'parent_id');
    }

    public function children() {
        return $this->hasMany(Menu::class,'parent_id');
    }
}
