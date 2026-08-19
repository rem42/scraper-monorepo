<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Order
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $createDate = null;
    public ?string $dateOrder = null;
    public ?string $expectedDate = null;

    /** @var array<int|string> */
    public array $partnerId = [];

    /** @var array<int|string> */
    public array $partnerInvoiceId = [];

    /** @var array<int|string> */
    public array $partnerShippingId = [];

    public function addPartnerId($partnerId): self
    {
        $this->partnerId[] = $partnerId;

        return $this;
    }

    public function addPartnerInvoiceId($partnerInvoiceId): self
    {
        $this->partnerInvoiceId[] = $partnerInvoiceId;

        return $this;
    }

    public function addPartnerShippingId($partnerShippingId): self
    {
        $this->partnerShippingId[] = $partnerShippingId;

        return $this;
    }
}
