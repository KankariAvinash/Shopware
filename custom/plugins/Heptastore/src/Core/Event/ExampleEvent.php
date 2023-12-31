<?php declare(strict_types=1);

namespace Heptastore\Core\Event;

use Heptastore\Core\Custom\CustomEntity;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Event\ShopwareSalesChannelEvent;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

class ExampleEvent implements ShopwareSalesChannelEvent{

    protected SalesChannelContext $salesChannelContext;
    protected CustomEntity $customEntity;
    public function __construct(SalesChannelContext $salesChannelContext,CustomEntity $customEntity)
    {
        $this->salesChannelContext = $salesChannelContext;
        $this->customEntity = $customEntity;
    }
    public function getExample():CustomEntity{
        return $this->customEntity;
    }
    public function getSalesChannelContext(): SalesChannelContext
    {
        // TODO: Implement getSalesChannelContext() method.
        return $this->salesChannelContext;
    }
    public function getContext():Context{
        return $this->salesChannelContext->getContext();
    }
}