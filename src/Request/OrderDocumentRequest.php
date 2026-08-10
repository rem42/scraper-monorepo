<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::GET, path: 'orders/{orderId}/documents/{documentId}')]
class OrderDocumentRequest extends JeudiMerciRequest
{
    public function __construct(
        string $key,
        protected string $orderId,
        protected string $documentId,
    ) {
        parent::__construct($key);
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getDocumentId(): string
    {
        return $this->documentId;
    }
}
