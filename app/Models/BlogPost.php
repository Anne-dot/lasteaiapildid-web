<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'category_id',
        'author',
        'published_at',
        'meta_title',
        'meta_description',
        'reading_time',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function scopeDraft($query)
    {
        return $query->whereNull('published_at');
    }

    public function isPublished(): bool
    {
        return $this->published_at !== null && $this->published_at <= now();
    }

    public function isDraft(): bool
    {
        return $this->published_at === null;
    }

    public function isScheduled(): bool
    {
        return $this->published_at !== null && $this->published_at > now();
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            // Auto-generate slug from title if not set
            if (empty($post->slug) && !empty($post->title)) {
                $post->slug = Str::slug($post->title);
            }

            // Auto-calculate reading time from content
            if (!empty($post->content)) {
                $wordCount = str_word_count(strip_tags($post->content));
                $post->reading_time = max(1, ceil($wordCount / 200)); // 200 words per minute
            }
        });
    }
}
