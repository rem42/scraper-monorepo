<?php declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::GET, path: 'OrderShippings')]
class OrderListRequest extends CompagnieDeboucheursRequest implements RequestQuery
{
    public function __construct(
        string $auth,
        private readonly string $status,
        private readonly int $limit = 10,
        private readonly int $offset = 0,
        private readonly ?string $orderBy = null
    ) {
        parent::__construct($auth);
    }

    public function getQuery(): array
    {
        $query = [
            'status' => $this->status,
        ];

        if ($this->limit) {
            $query['limit'] = $this->limit;
        }

        if ($this->offset) {
            $query['offset'] = $this->offset;
        }

        if ($this->orderBy) {
            $query['orderby'] = $this->orderBy;
        }

        return $query;
    }
}
