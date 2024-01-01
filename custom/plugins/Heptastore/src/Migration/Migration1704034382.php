<?php declare(strict_types=1);

namespace Heptastore\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1704034382 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1704034382;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `hepta_custom_entity` (
    `id` BINARY(16) NOT NULL,
    `technical_name` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
    `custom_fields` VARCHAR(255) DEFAULT NULL,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3),
    PRIMARY KEY (`id`)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;
SQL;
        $connection->executeStatement($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
