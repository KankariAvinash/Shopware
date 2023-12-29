<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\RestApi\V2\Api\Order\PurchaseUnit\Payments\Capture\SellerReceivableBreakdown;

use Shopware\Core\Framework\Log\Package;
use Swag\PayPal\RestApi\V2\Api\Common\Money;

#[Package('checkout')]
class GrossAmount extends Money
{
}
