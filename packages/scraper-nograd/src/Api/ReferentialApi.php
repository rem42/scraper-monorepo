<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperNoGrad\Model\Element;
use Scraper\ScraperNoGrad\Request\ReferentialRequest;

class ReferentialApi extends NoGradApi
{
    protected ReferentialRequest|ScraperRequest $request;

    public function execute(): object|array|bool|string
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Element::class . '[]',
            'json'
        );
    }
}
