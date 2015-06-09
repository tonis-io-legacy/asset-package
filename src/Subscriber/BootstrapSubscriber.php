<?php
namespace Tonis\Asset\Subscriber;

use Tonis\Event\EventManager;
use Tonis\Event\SubscriberInterface;

final class BootstrapSubscriber implements SubscriberInterface
{
    /**
     * {@inheritDoc}
     */
    public function subscribe(EventManager $events)
    {
        echo 'wat';exit;
    }
}
