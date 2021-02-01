<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Character
 * @package App\Models
 * @property $episode_id
 * @property $name
 * @property $birthday
 * @property $occupations
 * @property $img
 * @property $nickname
 * @property $portrayed
 */

class Character extends Model
{
    use HasFactory,CrudTrait;
    protected $table = 'characters';
    protected $fillable = ['episode_id', 'name',
        'birthday', 'occupations','img',
        'nickname','portrayed'];

    public function episodes(): BelongsToMany
    {
        return $this->belongsToMany(Episode::class,'episodes_characters', 'character_id', 'episode_id');
    }

    public function quetes(): HasMany
    {
        return $this->hasMany(Quote::class);
    }
}
