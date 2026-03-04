<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260224180000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add email verification code and email_verified_at to user table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `user` ADD email_verification_code VARCHAR(6) DEFAULT NULL, ADD email_verification_code_expires_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD email_verified_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('UPDATE `user` SET email_verified_at = created_at WHERE email_verified_at IS NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `user` DROP email_verification_code, DROP email_verification_code_expires_at, DROP email_verified_at');
    }
}
