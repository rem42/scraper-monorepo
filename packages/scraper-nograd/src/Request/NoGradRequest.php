<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Request;

use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(scheme: Scheme::HTTPS, host: 'pro.nograd.fr', path: '/api/wms/v{version}/')]
abstract class NoGradRequest extends ScraperRequest implements RequestHeaders
{
    protected string $version = '1';

    public function __construct(
        protected string $key,
    ) {}

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getHeaders(): array
    {
        return [
            'X-API-Key' => $this->key,
        ];
    }
}
