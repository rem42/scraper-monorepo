<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class Product
{
    public ?string $id = null;
    public ?string $reference = null;
    public ?string $name = null;
    public ?string $barCode = null;
    public ?int $weight = null;
    public ?int $length = null;
    public ?int $width = null;
    public ?int $height = null;
    public ?string $hsCode = null;
    public ?string $manufacturingCountry = null;
    public ?float $customsValue = null;
    public ?string $storageType = null;
    public ?string $batPictureUrl = null;
    public ?string $batComments = null;
}
