<?php declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Request;

use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(scheme: Scheme::HTTPS, host: 'crm.compagnie-deboucheurs.com')]
abstract class CompagnieDeboucheursRequest extends ScraperRequest implements RequestHeaders
{
    public function __construct(
        private readonly string $auth
    ) {}

    public function getHeaders(): array
    {
        return [
            'Auth' => $this->auth,
        ];
    }
}
