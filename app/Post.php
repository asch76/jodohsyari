<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const STATUS_DRAFT = 0;
    const STATUS_PUBLISHED = 1;
    const STATUS_ARCHIVED = 2;

    const TYPE_POST = 0;
    const TYPE_PAGE = 1;

    protected $fillable = [
        'title', 'content', 'img', 'kategori',
        'video_url', 'type', 'status', 'view'
    ];

    public function scopeDraft($query)
    {
        return $query->where('status', self::STATUS_DRAFT);
    }

    public function scopePublished($query)
    {
        return $query->where('status', self::STATUS_PUBLISHED);
    }

    public function scopeArchived($query)
    {
        return $query->where('status', self::STATUS_ARCHIVED);
    }

    public function scopePost($query)
    {
        return $query->where('type', self::TYPE_POST);
    }

    public function scopePage($query)
    {
        return $query->where('type', self::TYPE_PAGE);
    }

    public function scopeFavorit($query)
    {
        return $query->orderBy('view', 'DESC');
    }

}
