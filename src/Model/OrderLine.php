<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class OrderLine
{
    public ?string $productId = null;
    public ?int $quantity = null;

    /** @var array<int, string>|null */
    public ?array $customisations = [];

    public function addCustomisation(?array $customisation): self
    {
        $this->customisations[] = $customisation;

        return $this;
    }
}
