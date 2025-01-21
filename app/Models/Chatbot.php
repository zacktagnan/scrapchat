<?php

namespace App\Models;

use Database\Factories\ChatbotFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chatbot extends Model
{
    /** @use HasFactory<ChatbotFactory> */
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'name',
        'system_prompt',
        'model',
        'temperature',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function knowledgeSources(): HasMany
    {
        return $this->hasMany(KnowledgeSource::class);
    }
}
