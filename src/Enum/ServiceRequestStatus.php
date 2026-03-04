<?php

declare(strict_types=1);

namespace App\Enum;

enum ServiceRequestStatus: string
{
    case Draft = 'draft';
    case Open = 'open';
    case Closed = 'closed';
    case Awarded = 'awarded';

    public function label(): string
    {
        return match ($this) {
            self::Draft => 'Brouillon',
            self::Open => 'Ouvert',
            self::Closed => 'Clôturé',
            self::Awarded => 'Attribué',
        };
    }

    public function cssClass(): string
    {
        return match ($this) {
            self::Draft => 'badge bg-secondary',
            self::Open => 'badge bg-success',
            self::Closed => 'badge bg-danger',
            self::Awarded => 'badge bg-primary',
        };
    }
}
