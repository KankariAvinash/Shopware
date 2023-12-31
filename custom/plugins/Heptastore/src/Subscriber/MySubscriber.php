<?php declare(strict_types=1);

namespace  Heptastore\Subscriber;


use Heptastore\Core\Event\ExampleEvent;
use Heptastore\Service\CustomServices;
use Psr\EventDispatcher\EventDispatcherInterface;
use Shopware\Core\Content\Product\ProductEvents;
use Shopware\Core\Framework\DataAbstractionLayer\Event\EntityLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MySubscriber implements EventSubscriberInterface
{
    public EventDispatcherInterface $eventDispatcher;
    public function __construct(EventDispatcherInterface $eventDispatcher){
        $this->eventDispatcher = $eventDispatcher;
    }
    public static function getSubscribedEvents():array{
        return array(
            ProductEvents::PRODUCT_AGGREGATION_LOADED_EVENT =>"onProductLoaded"
        );
    }
    public function onProductLoaded(EntityLoadedEvent $event){

    }
}
