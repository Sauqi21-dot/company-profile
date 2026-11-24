<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    protected $fillable = ['key', 'value'];

        public static function getVal(string $key, ?string $default = null): ?string
    {
    return static::where('key', $key)->value('value') ?? $default;
    }
}
