<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Model;

class Pagination
{
    public ?int $currentPage = null;
    public ?int $perPage = null;
    public ?int $totalItems = null;
    public ?int $totalPages = null;
}
