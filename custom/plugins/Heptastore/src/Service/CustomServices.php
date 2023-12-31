<?php declare(strict_types=1);

namespace Heptastore\Service;

use Heptastore\Core\Event\ExampleEvent;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\Context;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;


class CustomServices{
    public EventDispatcherInterface $eventDispatcher;
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }
    public function fireEvent(ExampleEvent $exampleEvent,SalesChannelContext $salesChannelContext){
        $this->eventDispatcher->dispatch(new ExampleEvent($exampleEvent,$salesChannelContext));
    }

}
