<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Contrôle de saisie au niveau base de données uniquement (pas HTML/JS):
 * - service_provider: CHECK sur service_type, status, hourly_rate >= 0
 * - service_booking: CHECK sur status, agreed_price >= 0, quantity >= 1
 * Requiert MySQL 8.0.16+ pour les CHECK constraints.
 */
final class Version20260209230000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Contrôle saisie DB: CHECK constraints on service_provider and service_booking';
    }

    public function up(Schema $schema): void
    {
        // service_provider: type de service et statut enum, tarif >= 0
        $this->addSql('ALTER TABLE service_provider ADD CONSTRAINT chk_service_provider_service_type CHECK (service_type IN (\'Catering\', \'Security\', \'Photography\', \'Videography\', \'Decoration\', \'Entertainment\', \'Transportation\', \'Other\'))');
        $this->addSql('ALTER TABLE service_provider ADD CONSTRAINT chk_service_provider_status CHECK (status IN (\'active\', \'inactive\'))');
        $this->addSql('ALTER TABLE service_provider ADD CONSTRAINT chk_service_provider_hourly_rate CHECK (hourly_rate >= 0)');

        // service_booking: statut enum, prix et quantité >= 0, quantité >= 1
        $this->addSql('ALTER TABLE service_booking ADD CONSTRAINT chk_service_booking_status CHECK (status IN (\'pending\', \'confirmed\', \'cancelled\', \'completed\'))');
        $this->addSql('ALTER TABLE service_booking ADD CONSTRAINT chk_service_booking_agreed_price CHECK (agreed_price >= 0)');
        $this->addSql('ALTER TABLE service_booking ADD CONSTRAINT chk_service_booking_quantity CHECK (quantity >= 1)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE service_provider DROP CHECK chk_service_provider_service_type');
        $this->addSql('ALTER TABLE service_provider DROP CHECK chk_service_provider_status');
        $this->addSql('ALTER TABLE service_provider DROP CHECK chk_service_provider_hourly_rate');

        $this->addSql('ALTER TABLE service_booking DROP CHECK chk_service_booking_status');
        $this->addSql('ALTER TABLE service_booking DROP CHECK chk_service_booking_agreed_price');
        $this->addSql('ALTER TABLE service_booking DROP CHECK chk_service_booking_quantity');
    }
}
