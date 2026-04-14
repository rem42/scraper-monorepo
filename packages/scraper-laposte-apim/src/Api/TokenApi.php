<?php declare(strict_types=1);

namespace Scraper\ScraperLaPosteApim\Api;

use Scraper\ScraperLaPosteApim\Model\Error;
use Scraper\ScraperLaPosteApim\Model\Token;

class TokenApi extends LaposteApimApi
{
    public function execute(): object
    {
        if (200 !== $this->response->getStatusCode()) {
            return $this->serializer->deserialize($this->response->getContent(false), Error::class, 'json');
        }

        return $this->serializer->deserialize($this->response->getContent(), Token::class, 'json');
    }
}
