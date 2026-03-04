<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260209180000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'SponsorshipPackage and Sponsor entities with event relationships';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE sponsorship_package (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, name VARCHAR(50) NOT NULL, description LONGTEXT DEFAULT NULL, price NUMERIC(10, 2) NOT NULL, number_of_tables INT NOT NULL, seats_per_table INT NOT NULL, benefits LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_SP_EVENT (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sponsorship_package ADD CONSTRAINT FK_SP_EVENT FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');

        $this->addSql('CREATE TABLE sponsor (id INT AUTO_INCREMENT NOT NULL, sponsorship_package_id INT NOT NULL, event_id INT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(50) DEFAULT NULL, website VARCHAR(500) DEFAULT NULL, logo_url VARCHAR(500) DEFAULT NULL, description LONGTEXT DEFAULT NULL, contact_person_name VARCHAR(255) DEFAULT NULL, contact_person_email VARCHAR(255) DEFAULT NULL, payment_status VARCHAR(30) NOT NULL, amount_paid NUMERIC(10, 2) DEFAULT NULL, payment_date DATETIME DEFAULT NULL, status VARCHAR(30) NOT NULL, notes LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_SPONSOR_EMAIL (email), INDEX IDX_SPONSOR_PACKAGE (sponsorship_package_id), INDEX IDX_SPONSOR_EVENT (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_SPONSOR_PACKAGE FOREIGN KEY (sponsorship_package_id) REFERENCES sponsorship_package (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_SPONSOR_EVENT FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_SPONSOR_PACKAGE');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_SPONSOR_EVENT');
        $this->addSql('DROP TABLE sponsor');
        $this->addSql('ALTER TABLE sponsorship_package DROP FOREIGN KEY FK_SP_EVENT');
        $this->addSql('DROP TABLE sponsorship_package');
    }
}
