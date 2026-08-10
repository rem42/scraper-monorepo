<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::GET, path: '{object}')]
class ListRequest extends JeudiMerciRequest implements RequestQuery
{
    protected int $page = 1;
    protected int $perPage = 10;

    public function __construct(
        string $key,
        protected string $object,
    ) {
        parent::__construct($key);
    }

    public function getObject(): string
    {
        return $this->object;
    }

    public function getQuery(): array
    {
        return [
            'page' => $this->page,
            'perPage' => $this->perPage,
        ];
    }

    public function setPage(int $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function setPerPage(int $perPage): self
    {
        $this->perPage = $perPage;

        return $this;
    }
}
