<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260303230633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE provider_score_history (id INT AUTO_INCREMENT NOT NULL, score NUMERIC(5, 2) NOT NULL, badge VARCHAR(30) NOT NULL, recorded_at DATETIME NOT NULL, service_provider_id INT NOT NULL, INDEX IDX_F3B1ECE2C6C98E06 (service_provider_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE service_proposal (id INT AUTO_INCREMENT NOT NULL, price NUMERIC(10, 2) NOT NULL, description LONGTEXT NOT NULL, estimated_duration VARCHAR(100) NOT NULL, proposed_team_size INT NOT NULL, ai_match_score NUMERIC(5, 2) DEFAULT NULL, ai_match_explanation LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, service_request_id INT NOT NULL, service_provider_id INT NOT NULL, INDEX IDX_4693CF4FD42F8111 (service_request_id), INDEX IDX_4693CF4FC6C98E06 (service_provider_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE service_request (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, expected_date DATETIME NOT NULL, budget_min NUMERIC(10, 2) NOT NULL, budget_max NUMERIC(10, 2) NOT NULL, location VARCHAR(255) NOT NULL, status VARCHAR(20) DEFAULT \'draft\' NOT NULL, deadline DATETIME NOT NULL, service_type VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, event_id INT NOT NULL, INDEX IDX_F413DD0371F7E88B (event_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE provider_score_history ADD CONSTRAINT FK_F3B1ECE2C6C98E06 FOREIGN KEY (service_provider_id) REFERENCES service_provider (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_proposal ADD CONSTRAINT FK_4693CF4FD42F8111 FOREIGN KEY (service_request_id) REFERENCES service_request (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_proposal ADD CONSTRAINT FK_4693CF4FC6C98E06 FOREIGN KEY (service_provider_id) REFERENCES service_provider (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_request ADD CONSTRAINT FK_F413DD0371F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event CHANGE summary summary VARCHAR(140) DEFAULT NULL, CHANGE image image VARCHAR(500) DEFAULT NULL, CHANGE gross gross NUMERIC(12, 2) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE `order` CHANGE qr_code_path qr_code_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE organizer CHANGE phone phone VARCHAR(50) DEFAULT NULL, CHANGE website website VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE service_provider ADD siret VARCHAR(14) DEFAULT NULL, ADD verified TINYINT DEFAULT 0 NOT NULL, ADD legal_name VARCHAR(255) DEFAULT NULL, ADD score NUMERIC(5, 2) DEFAULT \'0.00\' NOT NULL, ADD badge VARCHAR(30) DEFAULT \'none\' NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6BB228A126E94372 ON service_provider (siret)');
        $this->addSql('ALTER TABLE sponsor CHANGE phone phone VARCHAR(50) DEFAULT NULL COMMENT \'Max 50 chars\', CHANGE website website VARCHAR(500) DEFAULT NULL, CHANGE logo_url logo_url VARCHAR(500) DEFAULT NULL, CHANGE contact_person_name contact_person_name VARCHAR(255) DEFAULT NULL, CHANGE contact_person_email contact_person_email VARCHAR(255) DEFAULT NULL, CHANGE payment_status payment_status VARCHAR(30) DEFAULT \'pending\' NOT NULL, CHANGE amount_paid amount_paid NUMERIC(10, 2) DEFAULT NULL, CHANGE payment_date payment_date DATETIME DEFAULT NULL, CHANGE status status VARCHAR(30) DEFAULT \'pending_approval\' NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE reset_token reset_token VARCHAR(100) DEFAULT NULL, CHANGE reset_token_expires_at reset_token_expires_at DATETIME DEFAULT NULL, CHANGE email_verification_code email_verification_code VARCHAR(6) DEFAULT NULL, CHANGE email_verification_code_expires_at email_verification_code_expires_at DATETIME DEFAULT NULL, CHANGE email_verified_at email_verified_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE venue CHANGE city city VARCHAR(255) DEFAULT NULL, CHANGE state state VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL, CHANGE postal_code postal_code VARCHAR(20) DEFAULT NULL, CHANGE latitude latitude NUMERIC(10, 7) DEFAULT NULL, CHANGE longitude longitude NUMERIC(10, 7) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE provider_score_history DROP FOREIGN KEY FK_F3B1ECE2C6C98E06');
        $this->addSql('ALTER TABLE service_proposal DROP FOREIGN KEY FK_4693CF4FD42F8111');
        $this->addSql('ALTER TABLE service_proposal DROP FOREIGN KEY FK_4693CF4FC6C98E06');
        $this->addSql('ALTER TABLE service_request DROP FOREIGN KEY FK_F413DD0371F7E88B');
        $this->addSql('DROP TABLE provider_score_history');
        $this->addSql('DROP TABLE service_proposal');
        $this->addSql('DROP TABLE service_request');
        $this->addSql('ALTER TABLE event CHANGE summary summary VARCHAR(140) DEFAULT \'NULL\', CHANGE image image VARCHAR(500) DEFAULT \'NULL\', CHANGE gross gross NUMERIC(12, 2) DEFAULT \'0.00\' NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `order` CHANGE qr_code_path qr_code_path VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE organizer CHANGE phone phone VARCHAR(50) DEFAULT \'NULL\', CHANGE website website VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('DROP INDEX UNIQ_6BB228A126E94372 ON service_provider');
        $this->addSql('ALTER TABLE service_provider DROP siret, DROP verified, DROP legal_name, DROP score, DROP badge');
        $this->addSql('ALTER TABLE sponsor CHANGE phone phone VARCHAR(50) DEFAULT \'NULL\' COMMENT \'Max 50 chars\', CHANGE website website VARCHAR(500) DEFAULT \'NULL\', CHANGE logo_url logo_url VARCHAR(500) DEFAULT \'NULL\', CHANGE contact_person_name contact_person_name VARCHAR(255) DEFAULT \'NULL\', CHANGE contact_person_email contact_person_email VARCHAR(255) DEFAULT \'NULL\', CHANGE payment_status payment_status VARCHAR(30) DEFAULT \'\'\'pending\'\'\' NOT NULL, CHANGE amount_paid amount_paid NUMERIC(10, 2) DEFAULT \'NULL\', CHANGE payment_date payment_date DATETIME DEFAULT \'NULL\', CHANGE status status VARCHAR(30) DEFAULT \'\'\'pending_approval\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE reset_token reset_token VARCHAR(100) DEFAULT \'NULL\', CHANGE reset_token_expires_at reset_token_expires_at DATETIME DEFAULT \'NULL\', CHANGE email_verification_code email_verification_code VARCHAR(6) DEFAULT \'NULL\', CHANGE email_verification_code_expires_at email_verification_code_expires_at DATETIME DEFAULT \'NULL\', CHANGE email_verified_at email_verified_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE venue CHANGE city city VARCHAR(255) DEFAULT \'NULL\', CHANGE state state VARCHAR(255) DEFAULT \'NULL\', CHANGE country country VARCHAR(255) DEFAULT \'NULL\', CHANGE postal_code postal_code VARCHAR(20) DEFAULT \'NULL\', CHANGE latitude latitude NUMERIC(10, 7) DEFAULT \'NULL\', CHANGE longitude longitude NUMERIC(10, 7) DEFAULT \'NULL\'');
    }
}
