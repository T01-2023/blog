<?php

namespace App\Enums;

enum PostStatus: string
{
    case PUBLISHED = 'published';
    case DRAFT = 'draft';
    case ARCHIVED = 'archive';

    public function label(): string
    {
        return match ($this) {
            self::PUBLISHED => 'Publier',
            self::DRAFT => 'Brouillon',
            self::ARCHIVED => 'Archiver',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::PUBLISHED => 'Le post sera mis en ligne directement.',
            self::DRAFT => 'Post non publié et modifiable.',
            self::ARCHIVED => 'Le post sera archivé.',
        };
    }
}
