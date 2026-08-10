<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperNoGrad\Request\OrderInvoiceRequest;

class OrderInvoiceApi extends NoGradApi
{
    protected OrderInvoiceRequest|ScraperRequest $request;

    public function execute(): object|array|bool|string
    {
        return $this->response->getContent();
    }
}
