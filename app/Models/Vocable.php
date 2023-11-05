<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(mixed $get)
 *
 * @property string $foreign_term
 * @property string $native_term
 */
class Vocable extends Model
{
    use HasFactory;

    protected $fillable = [
        'foreign_term',
        'native_term',
        'hits',
    ];

    public function levelUp(): void
    {
        $this->increment('level');
        $this->save();
    }

    public function resetLevel(): void
    {
        $this->update([
            'level' => 0,
        ]);
    }
}
