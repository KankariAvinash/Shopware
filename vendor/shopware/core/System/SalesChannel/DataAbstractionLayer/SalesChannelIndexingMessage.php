<?php declare(strict_types=1);

namespace Shopware\Core\System\SalesChannel\DataAbstractionLayer;

use Shopware\Core\Framework\DataAbstractionLayer\Indexing\EntityIndexingMessage;
use Shopware\Core\Framework\Log\Package;

#[Package('buyers-experience')]
class SalesChannelIndexingMessage extends EntityIndexingMessage
{
}
