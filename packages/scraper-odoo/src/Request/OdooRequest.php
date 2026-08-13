<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBodyJson;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::POST, scheme: Scheme::HTTPS, host: '{host}', path: '/json/2/{odooModel}/{odooMethod}')]
abstract class OdooRequest extends ScraperRequest implements RequestBodyJson, RequestHeaders
{
    public function __construct(
        protected string $host,
        protected string $db,
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
            'X-Odoo-Database' => $this->db,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function getJson(): array
    {
        return $this->getOdooKwargs();
    }

    abstract public function getOdooModel(): string;

    abstract public function getOdooMethod(): string;

    /**
     * @return array<string, mixed>
     */
    abstract protected function getOdooKwargs(): array;
}
