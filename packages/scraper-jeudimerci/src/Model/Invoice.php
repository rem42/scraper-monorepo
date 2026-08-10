<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class Invoice
{
    public ?string $addressLine1 = null;
    public ?string $addressLine2 = null;
    public ?string $zipCode = null;
    public ?string $city = null;
    public ?string $countryIsoCode = null;
    public ?string $company = null;
}
