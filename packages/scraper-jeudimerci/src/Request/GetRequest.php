<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::GET, path: '{object}/{id}')]
class GetRequest extends JeudiMerciRequest
{
    public function __construct(
        string $key,
        protected string $object,
        protected string $id,
    ) {
        parent::__construct($key);
    }

    public function getObject(): string
    {
        return $this->object;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
