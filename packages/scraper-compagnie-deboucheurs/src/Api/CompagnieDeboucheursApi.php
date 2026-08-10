<?php

declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperCompagnieDeboucheurs\Request\CompagnieDeboucheursRequest;

abstract class CompagnieDeboucheursApi extends AbstractApi
{
    protected CompagnieDeboucheursRequest|ScraperRequest $request;
}
