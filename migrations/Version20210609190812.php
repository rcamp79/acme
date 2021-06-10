<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210609190812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3A35F2858');
        $this->addSql('DROP INDEX IDX_161498D3A35F2858 ON card');
        $this->addSql('ALTER TABLE card DROP _order_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card ADD _order_id INT NOT NULL');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3A35F2858 FOREIGN KEY (_order_id) REFERENCES `order` (id)');
        $this->addSql('CREATE INDEX IDX_161498D3A35F2858 ON card (_order_id)');
    }
}
