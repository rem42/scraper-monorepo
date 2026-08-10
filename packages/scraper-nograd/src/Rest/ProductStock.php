<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Rest;

readonly class ProductStock implements \JsonSerializable
{
    public function __construct(
        private string $ean13,
        private int $quantity,
    ) {}

    /**
     * @return array<string, string|null>
     */
    public function jsonSerialize(): array
    {
        return [
            'ean13' => $this->ean13,
            'quantity' => $this->quantity,
        ];
    }
}
