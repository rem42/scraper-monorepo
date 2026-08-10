<?php declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Api;

class OrderUpdateApi extends CompagnieDeboucheursApi
{
    public function execute(): bool
    {
        return 204 === $this->response->getStatusCode();
    }
}
