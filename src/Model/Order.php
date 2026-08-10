<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class Order
{
    public ?string $id = null;
    public ?string $reference = null;
    public ?string $giftId = null;
    public ?string $type = null;
    public ?string $creationDate = null;
    public ?string $expectedShippingDate = null;
    public ?string $status = null;
    public ?string $comments = null;
    public ?string $proformaUrl = null;
    public ?MessageCard $messageCard = null;
    public ?Packaging $packaging = null;

    /** @var array<int, OrderLine> */
    public array $orderLines = [];
    /** @var array<int, Document> */
    public array $documents = [];
    public ?Buyer $buyer = null;
    public ?Invoice $invoice = null;
    public ?Recipient $recipient = null;
    public ?Shipping $shipping = null;

    public function addOrderLine(OrderLine $orderLine): self
    {
        $this->orderLines[] = $orderLine;

        return $this;
    }

    public function addDocument(Document $document): self
    {
        $this->documents[] = $document;

        return $this;
    }
}
