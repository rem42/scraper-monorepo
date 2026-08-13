<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

readonly class Carrier
{
    public function __construct(
        public ?int $id = null,
        public ?string $displayName = null,
    ) {}
}
