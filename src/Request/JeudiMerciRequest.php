<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Request;

use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(scheme: Scheme::HTTPS, host: 'camalo.jeudimerci.{tld}', path: '/api/v{version}/')]
class JeudiMerciRequest extends ScraperRequest implements RequestHeaders
{
    protected string $env = 'prod';
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
            'X-ApiKey' => $this->key,
        ];
    }

    public function setEnv(string $env): self
    {
        $this->env = $env;

        return $this;
    }

    public function getTld(): string
    {
        return match ($this->env) {
            'prod' => 'fr',
            'staging' => 'io',
            'dev' => 'dev',
            default => throw new \Exception('Invalid env'),
        };
    }
}
