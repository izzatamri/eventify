<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260208210000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'User: add firstName, lastName, isActive, createdAt, updatedAt; Organizer: add user_id';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `user` ADD first_name VARCHAR(100) DEFAULT \'\' NOT NULL, ADD last_name VARCHAR(100) DEFAULT \'\' NOT NULL, ADD is_active TINYINT(1) DEFAULT 1 NOT NULL, ADD created_at DATETIME DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL');
        $this->addSql('UPDATE `user` SET created_at = NOW(), updated_at = NOW() WHERE created_at IS NULL');
        $this->addSql('ALTER TABLE `user` CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE organizer ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE organizer ADD CONSTRAINT FK_2529C2D4A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_2529C2D4A76ED395 ON organizer (user_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE organizer DROP FOREIGN KEY FK_2529C2D4A76ED395');
        $this->addSql('DROP INDEX IDX_2529C2D4A76ED395 ON organizer');
        $this->addSql('ALTER TABLE organizer DROP user_id');
        $this->addSql('ALTER TABLE `user` DROP first_name, DROP last_name, DROP is_active, DROP created_at, DROP updated_at');
    }
}
