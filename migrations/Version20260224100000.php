<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260224100000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add reset_token and reset_token_expires_at to user for password reset';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `user` ADD reset_token VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE `user` ADD reset_token_expires_at DATETIME DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649B4B0C2B2 ON `user` (reset_token)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP INDEX UNIQ_8D93D649B4B0C2B2 ON `user`');
        $this->addSql('ALTER TABLE `user` DROP reset_token, DROP reset_token_expires_at');
    }
}
