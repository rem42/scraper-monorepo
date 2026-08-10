<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperNoGrad\Model\DataList;
use Scraper\ScraperNoGrad\Request\ListRequest;

class ListApi extends NoGradApi
{
    protected ListRequest|ScraperRequest $request;

    public function execute(): object|array|bool|string
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            DataList::class,
            'json'
        );
    }
}
