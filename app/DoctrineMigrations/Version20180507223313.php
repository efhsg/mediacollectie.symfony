<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180507223313 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bestandstypes (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(12) NOT NULL, UNIQUE INDEX UNIQ_AA6C6D45FC4DB938 (naam), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE schijven (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(64) NOT NULL, capaciteit INT DEFAULT NULL, beschikbaar INT DEFAULT NULL, scandatum DATE DEFAULT NULL, UNIQUE INDEX UNIQ_3B415751FC4DB938 (naam), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bestanden (id INT AUTO_INCREMENT NOT NULL, bestandstype VARCHAR(12) DEFAULT NULL, map INT DEFAULT NULL, schijf VARCHAR(64) DEFAULT NULL, naam VARCHAR(200) NOT NULL, grootte INT DEFAULT NULL, INDEX IDX_C351F8BE694B6A3B (bestandstype), INDEX IDX_C351F8BE93ADAABB (map), INDEX IDX_C351F8BE60B1BB52 (schijf), UNIQUE INDEX bestanden_idx (naam, schijf, map, bestandstype), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ondertitels (id INT AUTO_INCREMENT NOT NULL, bestand INT DEFAULT NULL, taal VARCHAR(2) NOT NULL, soort VARCHAR(3) DEFAULT NULL, INDEX IDX_2B6238627BE7F3F0 (bestand), UNIQUE INDEX ondertitels_idx (bestand, taal, soort), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mappen (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(400) NOT NULL, UNIQUE INDEX UNIQ_2CB4F8ABFC4DB938 (naam), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bestanden ADD CONSTRAINT FK_C351F8BE694B6A3B FOREIGN KEY (bestandstype) REFERENCES bestandstypes (naam)');
        $this->addSql('ALTER TABLE bestanden ADD CONSTRAINT FK_C351F8BE93ADAABB FOREIGN KEY (map) REFERENCES mappen (id)');
        $this->addSql('ALTER TABLE bestanden ADD CONSTRAINT FK_C351F8BE60B1BB52 FOREIGN KEY (schijf) REFERENCES schijven (naam)');
        $this->addSql('ALTER TABLE ondertitels ADD CONSTRAINT FK_2B6238627BE7F3F0 FOREIGN KEY (bestand) REFERENCES bestanden (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bestanden DROP FOREIGN KEY FK_C351F8BE694B6A3B');
        $this->addSql('ALTER TABLE bestanden DROP FOREIGN KEY FK_C351F8BE60B1BB52');
        $this->addSql('ALTER TABLE ondertitels DROP FOREIGN KEY FK_2B6238627BE7F3F0');
        $this->addSql('ALTER TABLE bestanden DROP FOREIGN KEY FK_C351F8BE93ADAABB');
        $this->addSql('DROP TABLE bestandstypes');
        $this->addSql('DROP TABLE schijven');
        $this->addSql('DROP TABLE bestanden');
        $this->addSql('DROP TABLE ondertitels');
        $this->addSql('DROP TABLE mappen');
    }
}
