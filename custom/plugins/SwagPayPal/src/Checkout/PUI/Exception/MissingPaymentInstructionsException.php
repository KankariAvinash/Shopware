<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Checkout\PUI\Exception;

use Shopware\Core\Framework\Log\Package;
use Shopware\Core\Framework\ShopwareHttpException;
use Symfony\Component\HttpFoundation\Response;

#[Package('checkout')]
class MissingPaymentInstructionsException extends ShopwareHttpException
{
    public function __construct(string $transactionId)
    {
        parent::__construct(
            'Payment instructions for transaction "{{ transactionId }}" missing',
            ['transactionId' => $transactionId]
        );
    }

    public function getStatusCode(): int
    {
        return Response::HTTP_NOT_FOUND;
    }

    public function getErrorCode(): string
    {
        return 'SWAG_PAYPAL__PUI_PAYMENT_INSTRUCTION_MISSING';
    }
}
