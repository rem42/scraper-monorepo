<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class Orders
{
    use ListTrait;

    /** @var array<int, Order> */
    public array $resources = [];

    public function addResource(Order $resource): self
    {
        $this->resources[] = $resource;

        return $this;
    }
}
