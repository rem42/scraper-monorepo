<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class Products
{
    use ListTrait;

    /** @var array<int, Product> */
    public array $resources = [];

    public function addResource(Product $resource): self
    {
        $this->resources[] = $resource;

        return $this;
    }
}
