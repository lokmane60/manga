<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class manga extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'link', 'name','user_id'];
    public function chapters(): HasMany 
    {
        return $this->hasMany(Chapter::class);
    }
}
