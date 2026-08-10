<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::GET, path: 'referentials/{referential}')]
class ReferentialRequest extends NoGradRequest
{
    public function __construct(
        string $key,
        protected string $referential,
    ) {
        parent::__construct($key);
    }

    public function getReferential(): string
    {
        return $this->referential;
    }
}
