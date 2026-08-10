<?php declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::GET, path: 'Products')]
class ProductRequest extends CompagnieDeboucheursRequest implements RequestQuery
{
    public function __construct(
        string $auth,
        private readonly int $id,
    ) {
        parent::__construct($auth);
    }

    public function getQuery(): array
    {
        return [
            'id' => $this->id,
        ];
    }
}
