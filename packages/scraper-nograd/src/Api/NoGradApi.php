<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperNoGrad\Request\NoGradRequest;

abstract class NoGradApi extends AbstractApi
{
    protected NoGradRequest|ScraperRequest $request;
}
