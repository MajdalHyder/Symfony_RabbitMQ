<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220103152259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE order_log (id SMALLINT AUTO_INCREMENT NOT NULL PRIMARY KEY, action VARCHAR(50) NOT NULL, message TEXT NOT NULL)');
        $this->addSql('CREATE TABLE `orders` (id SMALLINT AUTO_INCREMENT NOT NULL PRIMARY KEY, customer_name VARCHAR(50) NOT NULL, car_make VARCHAR(50) NOT NULL, car_model VARCHAR(50) NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE order_log');
        $this->addSql('DROP TABLE `orders`');
    }
}
