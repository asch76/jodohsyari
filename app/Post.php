<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const STATUS_DRAFT = 0;
    const STATUS_PUBLISHED = 1;
    const STATUS_ARCHIVED = 2;

    const TYPE_ARTIKEL = 'artikel';
    const TYPE_VIDEO = 'video';
    const TYPE_HALAMAN = 'halaman';

    protected $fillable = [
        'title', 'content', 'img', 'kategori',
        'video_url', 'type', 'status', 'view', 'slide'
    ];

    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        return '/post/'.$this->id.'-'.str_slug($this->title);
    }

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

    public function scopeArtikel($query)
    {
        return $query->where('type', self::TYPE_ARTIKEL);
    }

    public function scopeVideo($query)
    {
        return $query->where('type', self::TYPE_VIDEO);
    }

    public function scopeHalaman($query)
    {
        return $query->where('type', self::TYPE_HALAMAN);
    }

    public function scopeSlide($query)
    {
        return $query->where('slide', 1);
    }

    public function scopeFavorit($query)
    {
        return $query->orderBy('view', 'DESC');
    }

}
