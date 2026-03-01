<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260208200000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add summary column to event table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE event ADD COLUMN summary VARCHAR(140) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE event DROP COLUMN summary');
    }
}
