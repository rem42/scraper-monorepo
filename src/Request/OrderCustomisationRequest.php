<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::GET, path: 'orders/{orderId}/customisation/{customisationId}')]
class OrderCustomisationRequest extends JeudiMerciRequest
{
    public function __construct(
        string $key,
        protected string $orderId,
        protected string $customisationId,
    ) {
        parent::__construct($key);
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getCustomisationId(): string
    {
        return $this->customisationId;
    }
}
