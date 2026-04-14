<?php declare(strict_types=1);

namespace Scraper\ScraperLaPosteApim\Request;

use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestException;

#[Scraper(path: '/token')]
class TokenRequest extends LaposteApimRequest implements RequestBody, RequestException
{
    public function __construct(
        private string $clientId,
        private string $clientSecret,
    ) {}

    /**
     * @return array<string, string>
     */
    public function getBody(): array
    {
        return [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
        ];
    }

    public function isThrow(): bool
    {
        return false;
    }
}
