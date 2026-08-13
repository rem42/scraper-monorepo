<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBodyJson;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::POST, scheme: Scheme::HTTPS, host: '{host}', path: '/json/2/{model}/{method}')]
abstract class OdooRequest extends ScraperRequest implements RequestBodyJson, RequestHeaders
{
    public function __construct(
        protected string $host,
        protected string $apiKey,
    ) {}

    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->apiKey,
        ];
    }

    abstract public function getModel(): string;

    abstract public function getMethod(): string;
}
