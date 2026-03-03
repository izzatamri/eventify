<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260209200000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add accepted_by and refused_by to sponsor (track who accepted/refused the request)';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sponsor ADD accepted_by_id INT DEFAULT NULL, ADD refused_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_SPONSOR_ACCEPTED_BY FOREIGN KEY (accepted_by_id) REFERENCES `user` (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE sponsor ADD CONSTRAINT FK_SPONSOR_REFUSED_BY FOREIGN KEY (refused_by_id) REFERENCES `user` (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_SPONSOR_ACCEPTED_BY ON sponsor (accepted_by_id)');
        $this->addSql('CREATE INDEX IDX_SPONSOR_REFUSED_BY ON sponsor (refused_by_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_SPONSOR_ACCEPTED_BY');
        $this->addSql('ALTER TABLE sponsor DROP FOREIGN KEY FK_SPONSOR_REFUSED_BY');
        $this->addSql('DROP INDEX IDX_SPONSOR_ACCEPTED_BY ON sponsor');
        $this->addSql('DROP INDEX IDX_SPONSOR_REFUSED_BY ON sponsor');
        $this->addSql('ALTER TABLE sponsor DROP accepted_by_id, DROP refused_by_id');
    }
}
