<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::GET, path: 'products/{ean13}')]
class ProductRequest extends NoGradRequest
{
    public function __construct(
        string $key,
        protected string $ean13,
    ) {
        parent::__construct($key);
    }

    public function getEan13(): string
    {
        return $this->ean13;
    }
}
