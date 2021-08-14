<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210512212148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD history_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE categorie ADD CONSTRAINT FK_497DD6341E058452 FOREIGN KEY (history_id) REFERENCES history (id)');
        $this->addSql('CREATE INDEX IDX_497DD6341E058452 ON categorie (history_id)');
        $this->addSql('ALTER TABLE history ADD date DATE DEFAULT NULL, ADD categorie_id INT NOT NULL, ADD history_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question CHANGE id_categorie id_categorie INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie DROP FOREIGN KEY FK_497DD6341E058452');
        $this->addSql('DROP INDEX IDX_497DD6341E058452 ON categorie');
        $this->addSql('ALTER TABLE categorie DROP history_id');
        $this->addSql('ALTER TABLE history DROP date, DROP categorie_id, DROP history_id');
        $this->addSql('ALTER TABLE question CHANGE categorie_id categorie_id INT DEFAULT NULL, CHANGE id_categorie id_categorie INT NOT NULL');
    }
}
