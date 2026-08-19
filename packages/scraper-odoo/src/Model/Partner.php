<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Partner
{
    public ?int $id = null;
    public ?bool $companyName = null;
    public ?string $city = null;
    public ?string $completeName = null;
    public ?string $contactAddress = null;
    public ?string $countryCode = null;

    /** @var array<int|string> */
    public array $countryId = [];
    public ?string $displayName = null;
    public bool|string|null $email = null;
    public bool|string|null $emailFormatted = null;
    public ?string $name = null;
    public bool|string|null $parentName = null;
    public ?string $phone = null;
    public ?string $street = null;
    public bool|string|null $street2 = null;
    public ?string $type = null;
    public ?string $zip = null;

    public function addCountryId($countryId): self
    {
        $this->countryId[] = $countryId;

        return $this;
    }
}
