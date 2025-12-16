<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251209083028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tailler ADD CONSTRAINT FK_447D1788994DB595 FOREIGN KEY (devis_no) REFERENCES devis (no)');
        $this->addSql('CREATE INDEX IDX_447D1788994DB595 ON tailler (devis_no)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tailler DROP FOREIGN KEY FK_447D1788994DB595');
        $this->addSql('DROP INDEX IDX_447D1788994DB595 ON tailler');
    }
}
