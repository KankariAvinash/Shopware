<?php declare(strict_types=1);

namespace Heptastore\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1703876636 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1703876636;
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
