<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Contrôle de saisie au niveau base de données:
 * - CHECK sur les champs enum (name, status, payment_status)
 * - CHECK sur les valeurs numériques >= 0
 * Requiert MySQL 8.0.16+ pour les CHECK constraints.
 */
final class Version20260209210000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Contrôle saisie DB: CHECK constraints on sponsorship_package and sponsor';
    }

    public function up(Schema $schema): void
    {
        // SponsorshipPackage: name doit être Gold, Silver ou Platinum
        $this->addSql('ALTER TABLE sponsorship_package ADD CONSTRAINT chk_sponsorship_package_name CHECK (name IN (\'Gold\', \'Silver\', \'Platinum\'))');
        $this->addSql('ALTER TABLE sponsorship_package ADD CONSTRAINT chk_sponsorship_package_price CHECK (price >= 0)');
        $this->addSql('ALTER TABLE sponsorship_package ADD CONSTRAINT chk_sponsorship_package_tables CHECK (number_of_tables >= 0)');
        $this->addSql('ALTER TABLE sponsorship_package ADD CONSTRAINT chk_sponsorship_package_seats CHECK (seats_per_table >= 0)');

        // Sponsor: status et payment_status enum
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT chk_sponsor_status CHECK (status IN (\'active\', \'inactive\', \'pending_approval\', \'rejected\'))');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT chk_sponsor_payment_status CHECK (payment_status IN (\'pending\', \'paid\', \'partially_paid\'))');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT chk_sponsor_amount_paid CHECK (amount_paid IS NULL OR amount_paid >= 0)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sponsorship_package DROP CHECK chk_sponsorship_package_name');
        $this->addSql('ALTER TABLE sponsorship_package DROP CHECK chk_sponsorship_package_price');
        $this->addSql('ALTER TABLE sponsorship_package DROP CHECK chk_sponsorship_package_tables');
        $this->addSql('ALTER TABLE sponsorship_package DROP CHECK chk_sponsorship_package_seats');

        $this->addSql('ALTER TABLE sponsor DROP CHECK chk_sponsor_status');
        $this->addSql('ALTER TABLE sponsor DROP CHECK chk_sponsor_payment_status');
        $this->addSql('ALTER TABLE sponsor DROP CHECK chk_sponsor_amount_paid');
    }
}
