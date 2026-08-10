<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::PATCH, path: 'products/{id}/stock')]
class ProductStockRequest extends JeudiMerciRequest implements RequestQuery
{
    public function __construct(
        string $key,
        protected string $id,
        protected int $quantity,
    ) {
        parent::__construct($key);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getQuery(): array
    {
        return [
            'stock' => $this->quantity,
        ];
    }
}
