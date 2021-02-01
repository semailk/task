<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Episode extends Model
{
    use HasFactory, CrudTrait;

    protected $table = 'episodes';
    protected $fillable = ['title', 'air_date'];

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class,'episodes_characters',
            'episode_id', 'character_id');
    }
}
