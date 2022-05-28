<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220527063133 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cartas_por_mano (id INT AUTO_INCREMENT NOT NULL, date_created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, jugador_id INT NOT NULL, palo VARCHAR(20) NOT NULL, numero INT NOT NULL, mano_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mano (id INT AUTO_INCREMENT NOT NULL, date_created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, jugador_id INT DEFAULT NULL, puntos INT NOT NULL, game_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game ADD date_created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE jugadores ADD last_session VARCHAR(255) NOT NULL, ADD last_connection DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cartas_por_mano');
        $this->addSql('DROP TABLE mano');
        $this->addSql('ALTER TABLE game DROP date_created');
        $this->addSql('ALTER TABLE jugadores DROP last_session, DROP last_connection');
    }
}
