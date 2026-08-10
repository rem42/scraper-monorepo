<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Rest;

readonly class OrderStatus implements \JsonSerializable
{
    public function __construct(
        private string $status,
        private ?string $trackingNumber = null,
    ) {}

    /**
     * @return array<string, string|null>
     */
    public function jsonSerialize(): array
    {
        return [
            'status_code' => $this->status,
            'tracking_number' => $this->trackingNumber,
        ];
    }
}
