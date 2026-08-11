<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Model;

class Order
{
    public ?Address $billingAddress = null;
    public ?bool $camaloTest = null;
    public ?string $carrierCode = null;
    public ?string $createdAt = null;
    public ?Customer $customer = null;
    public ?int $id = null;
    public ?string $invoiceId = null;

    /** @var array<int, Item> */
    public array $items = [];
    public ?string $orderNumber = null;
    public ?string $sentAt = null;
    public ?Address $shippingAddress = null;
    public ?int $shippingHt = null;
    public ?string $source = null;
    public ?string $statusCode = null;

    public function addItem(Item $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}
