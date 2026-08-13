<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Order
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $state = null;
    public ?float $amount_total = null;
    public ?float $amount_tax = null;
    public ?float $amount_untaxed = null;

    /** @var array<int, mixed>|bool|null */
    public array|bool|null $partner_id = null;
    public ?string $date_order = null;
}
