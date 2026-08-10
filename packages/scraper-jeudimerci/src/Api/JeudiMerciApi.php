<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperJeudiMerci\Request\JeudiMerciRequest;

abstract class JeudiMerciApi extends AbstractApi
{
    protected JeudiMerciRequest|ScraperRequest $request;
}
