<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class Recipient
{
    public ?string $id = null;
    public ?string $firstname = null;
    public ?string $lastname = null;
    public ?string $companyName = null;
    public ?string $addressLine1 = null;
    public ?string $addressLine2 = null;
    public ?string $zipCode = null;
    public ?string $city = null;
    public ?string $state = null;
    public ?string $countryIsoCode = null;
    public ?string $shippingMessage = null;
    public ?string $email = null;
    public ?string $phone = null;
}
