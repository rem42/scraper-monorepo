<?php

declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::GET, path: 'Products')]
class ProductListRequest extends CompagnieDeboucheursRequest implements RequestQuery
{
    public function __construct(
        string $auth,
        private readonly int $limit = 10,
        private readonly int $offset = 0,
    ) {
        parent::__construct($auth);
    }

    public function getQuery(): array
    {
        $query = [];

        if ($this->limit) {
            $query['limit'] = $this->limit;
        }

        if ($this->offset) {
            $query['offset'] = $this->offset;
        }

        return $query;
    }
}
