<?php declare(strict_types=1);

namespace Shopware\Core\Framework\App\Exception;

use Shopware\Core\Framework\Log\Package;

/**
 * @internal only for use by the app-system, will be considered internal from v6.4.0 onward
 */
#[Package('core')]
class AppUrlChangeStrategyNotFoundException extends \RuntimeException
{
    public function __construct(string $strategyName)
    {
        parent::__construct('Unable to find AppUrlChangeResolver with name: "' . $strategyName . '".');
    }
}
