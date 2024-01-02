<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240102175623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE players (id INT AUTO_INCREMENT NOT NULL, member_id INT NOT NULL, region VARCHAR(5) NOT NULL, character_name VARCHAR(50) NOT NULL, character_relam_name VARCHAR(50) NOT NULL, character_realm_id INT DEFAULT NULL, character_realm_name VARCHAR(50) DEFAULT NULL, character_realm_slug VARCHAR(50) DEFAULT NULL, assets_0_key VARCHAR(20) DEFAULT NULL, assets_1_key VARCHAR(20) DEFAULT NULL, assets_2_key VARCHAR(20) DEFAULT NULL, assets_3_key VARCHAR(20) DEFAULT NULL, assets_1_value VARCHAR(200) DEFAULT NULL, assets_0_value VARCHAR(200) DEFAULT NULL, assets_2_value VARCHAR(200) DEFAULT NULL, assets_3_value VARCHAR(200) DEFAULT NULL, name VARCHAR(50) DEFAULT NULL, name_search VARCHAR(50) DEFAULT NULL, gender_type VARCHAR(20) DEFAULT NULL, gender_name VARCHAR(20) DEFAULT NULL, faction_type VARCHAR(15) DEFAULT NULL, faction_name VARCHAR(15) DEFAULT NULL, race_name VARCHAR(50) DEFAULT NULL, race_id INT DEFAULT NULL, character_class_name VARCHAR(20) DEFAULT NULL, character_class_id INT NOT NULL, active_spec_name VARCHAR(60) DEFAULT NULL, realm_name VARCHAR(30) DEFAULT NULL, realm_id INT DEFAULT NULL, realm_slug VARCHAR(40) DEFAULT NULL, level INT DEFAULT NULL, experience INT DEFAULT NULL, achievement_points INT DEFAULT NULL, last_login_timestamp INT DEFAULT NULL, average_item_level INT DEFAULT NULL, equipped_item_level INT DEFAULT NULL, active_title_name VARCHAR(60) DEFAULT NULL, active_title_id INT DEFAULT NULL, active_title_display_string VARCHAR(60) DEFAULT NULL, last_update INT DEFAULT NULL, cron_update INT DEFAULT NULL, active_spec_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE players');
    }
}
