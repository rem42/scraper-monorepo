<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBodyJson;
use Scraper\ScraperNoGrad\Rest\OrderStatus;

#[Scraper(method: Method::PATCH, path: 'orders/{id}/status')]
class OrderStatusRequest extends NoGradRequest implements RequestBodyJson
{
    public function __construct(
        string $key,
        protected string $id,
        protected OrderStatus $orderStatus,
    ) {
        parent::__construct($key);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getJson(): object
    {
        return $this->orderStatus;
    }
}
