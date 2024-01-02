<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240102174940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE roster_member (member_id INT NOT NULL, guild_id INT NOT NULL, character_key_href VARCHAR(255) NOT NULL, character_name VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, server VARCHAR(255) NOT NULL, character_id INT NOT NULL, character_realm_key_href VARCHAR(255) NOT NULL, character_realm_id INT NOT NULL, character_realm_slug VARCHAR(255) NOT NULL, character_level INT NOT NULL, character_playable_class_key_href VARCHAR(255) NOT NULL, character_playable_class_id INT NOT NULL, class VARCHAR(255) NOT NULL, character_playable_race_key_href VARCHAR(255) NOT NULL, character_playable_race_id INT NOT NULL, race VARCHAR(255) NOT NULL, guild_rank INT NOT NULL, rank_title VARCHAR(255) NOT NULL, last_online INT NOT NULL, last_http_code INT NOT NULL, active INT NOT NULL, account_id INT NOT NULL, PRIMARY KEY(member_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roster_members (member_id INT NOT NULL, region VARCHAR(4) NOT NULL, guild_id INT NOT NULL, character_name VARCHAR(75) NOT NULL, PRIMARY KEY(member_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roster_talentbuild (id INT AUTO_INCREMENT NOT NULL, member_id INT NOT NULL, type VARCHAR(10) NOT NULL, build INT NOT NULL, tree INT NOT NULL, selected INT NOT NULL, spec LONGTEXT NOT NULL, talent_loadout_code VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE roster_member');
        $this->addSql('DROP TABLE roster_members');
        $this->addSql('DROP TABLE roster_talentbuild');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
