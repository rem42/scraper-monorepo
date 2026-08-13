<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBodyJson;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::POST, scheme: Scheme::HTTPS, host: '{host}', path: '/jsonrpc')]
abstract class OdooRequest extends ScraperRequest implements RequestBodyJson
{
    protected ?int $id = null;

    public function __construct(
        protected string $host,
        protected string $db,
        protected int $uid,
        protected string $apiKey,
    ) {
        $this->id = random_int(1, 1000000);
    }

    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return array<string, mixed>
     */
    public function getJson(): array
    {
        return [
            'jsonrpc' => '2.0',
            'method' => 'call',
            'params' => [
                'service' => 'object',
                'method' => 'execute_kw',
                'args' => [
                    $this->db,
                    $this->uid,
                    $this->apiKey,
                    $this->getOdooModel(),
                    $this->getOdooMethod(),
                    $this->getOdooArgs(),
                ],
                'kwargs' => $this->getOdooKwargs(),
            ],
            'id' => $this->id,
        ];
    }

    abstract protected function getOdooModel(): string;

    abstract protected function getOdooMethod(): string;

    /**
     * @return array<mixed>
     */
    abstract protected function getOdooArgs(): array;

    /**
     * @return array<string, mixed>
     */
    abstract protected function getOdooKwargs(): array;
}
