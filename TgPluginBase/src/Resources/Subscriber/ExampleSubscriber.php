<?php declare(strict_types=1);

namespace Tg\PluginBase\Subscriber;

class MySubscriber implements EventSubscriberInterface
{
    ...
    public function onProductsLoaded(EntityLoadedEvent $event): void
    {
        $exampleConfig = $this->systemConfigService->get('TgPluginBase.config.example', $salesChannelId);
    }
}