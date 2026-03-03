<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260209120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Order entity and Event sold/gross';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE event ADD sold INT DEFAULT 0 NOT NULL, ADD gross NUMERIC(12, 2) DEFAULT \'0.00\' NOT NULL');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, event_id INT NOT NULL, ticket_id INT NOT NULL, quantity INT NOT NULL, total_price NUMERIC(12, 2) NOT NULL, status VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_F5299398A76ED395 (user_id), INDEX IDX_F529939871F7E88B (event_id), INDEX IDX_F5299398700047D2 (ticket_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F529939871F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398700047D2 FOREIGN KEY (ticket_id) REFERENCES ticket (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398A76ED395');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F529939871F7E88B');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398700047D2');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('ALTER TABLE event DROP sold, DROP gross');
    }
}
