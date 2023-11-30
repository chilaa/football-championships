<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231130145030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team_championship (team_id INT NOT NULL, championship_id INT NOT NULL, INDEX IDX_E32BD3A8296CD8AE (team_id), INDEX IDX_E32BD3A894DDBCE9 (championship_id), PRIMARY KEY(team_id, championship_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE team_championship ADD CONSTRAINT FK_E32BD3A8296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_championship ADD CONSTRAINT FK_E32BD3A894DDBCE9 FOREIGN KEY (championship_id) REFERENCES championship (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE team_championship DROP FOREIGN KEY FK_E32BD3A8296CD8AE');
        $this->addSql('ALTER TABLE team_championship DROP FOREIGN KEY FK_E32BD3A894DDBCE9');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE team_championship');
    }
}
