<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210610180710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D392FCEA00');
        $this->addSql('DROP INDEX IDX_161498D392FCEA00 ON card');
        $this->addSql('ALTER TABLE card DROP ordr_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card ADD ordr_id INT NOT NULL');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D392FCEA00 FOREIGN KEY (ordr_id) REFERENCES `order` (id)');
        $this->addSql('CREATE INDEX IDX_161498D392FCEA00 ON card (ordr_id)');
    }
}
