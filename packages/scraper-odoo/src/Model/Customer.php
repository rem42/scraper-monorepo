<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Customer
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $email = null;
    public ?string $phone = null;
    public ?bool $is_company = null;
    public ?string $vat = null;
}
