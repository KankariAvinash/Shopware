<?php declare(strict_types=1);

namespace TestPlugin\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1703651663 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1703651663;
    }

    public function update(Connection $connection): void
    {
        // implement update
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
