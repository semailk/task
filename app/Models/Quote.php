<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Quote
 * @package App\Models
 * @property $episode_id
 * @property $character_id
 * @property $quote
 */

class Quote extends Model
{
    use HasFactory,CrudTrait;

    protected $table = 'quotes';
    protected $fillable = ['episode_id', 'character_id','quote'];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
