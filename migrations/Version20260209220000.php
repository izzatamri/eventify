<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260209220000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add service_provider and service_booking tables';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE service_provider (
            id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            phone VARCHAR(50) NOT NULL,
            service_type VARCHAR(50) NOT NULL,
            hourly_rate NUMERIC(10, 2) NOT NULL,
            status VARCHAR(20) NOT NULL DEFAULT \'active\',
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            UNIQUE INDEX UNIQ_service_provider_email (email),
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql('CREATE TABLE service_booking (
            id INT AUTO_INCREMENT NOT NULL,
            service_provider_id INT NOT NULL,
            event_id INT NOT NULL,
            scheduled_date DATE NOT NULL,
            start_time TIME NOT NULL,
            end_time TIME NOT NULL,
            quantity INT NOT NULL,
            agreed_price NUMERIC(10, 2) NOT NULL,
            status VARCHAR(20) NOT NULL DEFAULT \'pending\',
            notes LONGTEXT DEFAULT NULL,
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            INDEX IDX_service_booking_provider (service_provider_id),
            INDEX IDX_service_booking_event (event_id),
            PRIMARY KEY(id),
            CONSTRAINT FK_service_booking_provider FOREIGN KEY (service_provider_id) REFERENCES service_provider (id) ON DELETE CASCADE,
            CONSTRAINT FK_service_booking_event FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE service_booking');
        $this->addSql('DROP TABLE service_provider');
    }
}
