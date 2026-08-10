<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::GET, path: 'orders/{id}/check-availability')]
class OrderCheckAvailabilityRequest extends JeudiMerciRequest
{
    public function __construct(
        string $key,
        protected string $id,
    ) {
        parent::__construct($key);
    }

    public function getId(): string
    {
        return $this->id;
    }
}
