<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Model;

class OrderStatus
{
    public ?bool $success = null;
    public ?string $message = null;
    public ?int $orderId = null;
    public ?string $statusCode = null;
    public ?string $updatedAt = null;
}
