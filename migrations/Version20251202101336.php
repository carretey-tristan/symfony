<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251202101336 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (no INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, cp INT NOT NULL, type_client VARCHAR(255) NOT NULL, PRIMARY KEY(no)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devis (no INT AUTO_INCREMENT NOT NULL, client_no INT NOT NULL, date DATE NOT NULL, INDEX IDX_8B27C52BC178266E (client_no), PRIMARY KEY(no)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tailler (id INT AUTO_INCREMENT NOT NULL, haie_code VARCHAR(255) NOT NULL, devis_no INT NOT NULL, hauteur NUMERIC(5, 2) NOT NULL, longueur NUMERIC(5, 2) NOT NULL, INDEX IDX_447D1788B7F6B776 (haie_code), INDEX IDX_447D1788994DB595 (devis_no), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52BC178266E FOREIGN KEY (client_no) REFERENCES client (no)');
        $this->addSql('ALTER TABLE tailler ADD CONSTRAINT FK_447D1788B7F6B776 FOREIGN KEY (haie_code) REFERENCES haie (code)');
        $this->addSql('ALTER TABLE tailler ADD CONSTRAINT FK_447D1788994DB595 FOREIGN KEY (devis_no) REFERENCES devis (no)');
        $this->addSql('ALTER TABLE haie ADD CONSTRAINT FK_1F24E4DEBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_1F24E4DEBCF5E72D ON haie (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52BC178266E');
        $this->addSql('ALTER TABLE tailler DROP FOREIGN KEY FK_447D1788B7F6B776');
        $this->addSql('ALTER TABLE tailler DROP FOREIGN KEY FK_447D1788994DB595');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE devis');
        $this->addSql('DROP TABLE tailler');
        $this->addSql('ALTER TABLE haie DROP FOREIGN KEY FK_1F24E4DEBCF5E72D');
        $this->addSql('DROP INDEX IDX_1F24E4DEBCF5E72D ON haie');
    }
}
