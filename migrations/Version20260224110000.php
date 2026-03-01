<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260224110000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add UUID and QR code path to orders for ticket QR codes';
    }

    public function up(Schema $schema): void
    {
        // 1) Add columns (uuid initially nullable so we can backfill values)
        $this->addSql("ALTER TABLE `order` ADD uuid VARCHAR(36) DEFAULT NULL, ADD qr_code_path VARCHAR(255) DEFAULT NULL");

        // 2) Backfill existing rows with unique UUIDs (MySQL UUID() function)
        $this->addSql("UPDATE `order` SET uuid = UUID() WHERE uuid IS NULL OR uuid = ''");

        // 3) Make uuid NOT NULL
        $this->addSql("ALTER TABLE `order` MODIFY uuid VARCHAR(36) NOT NULL");

        // 4) Add unique index
        $this->addSql("CREATE UNIQUE INDEX UNIQ_F5299398D17F50A6 ON `order` (uuid)");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DROP INDEX UNIQ_F5299398D17F50A6 ON `order`");
        $this->addSql("ALTER TABLE `order` DROP uuid, DROP qr_code_path");
    }
}

