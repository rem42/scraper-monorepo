<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Address
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $street = null;
    public ?string $street2 = null;
    public ?string $city = null;
    public ?string $zip = null;

    /** @var array<int, mixed>|bool|null */
    public array|bool|null $state_id = null;

    /** @var array<int, mixed>|bool|null */
    public array|bool|null $country_id = null;
    public ?string $type = null;
}
