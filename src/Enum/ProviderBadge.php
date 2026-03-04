<?php

declare(strict_types=1);

namespace App\Enum;

enum ProviderBadge: string
{
    case None = 'none';
    case Rising = 'rising';
    case Certified = 'certified';
    case TopPerformer = 'top_performer';
    case PreferredPartner = 'preferred_partner';

    public function label(): string
    {
        return match ($this) {
            self::None => 'Aucun',
            self::Rising => 'En progression',
            self::Certified => 'Certifié',
            self::TopPerformer => 'Top Performer',
            self::PreferredPartner => 'Partenaire Privilégié',
        };
    }

    public function cssClass(): string
    {
        return match ($this) {
            self::None => 'bg-secondary',
            self::Rising => 'bg-success',
            self::Certified => 'bg-info',
            self::TopPerformer => 'bg-warning text-dark',
            self::PreferredPartner => 'bg-purple',
        };
    }
}
