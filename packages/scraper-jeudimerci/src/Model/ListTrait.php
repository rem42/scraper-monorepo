<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

trait ListTrait
{
    public ?int $pageNumber = null;
    public ?int $pageSize = null;
    public ?int $totalCount = null;
}
