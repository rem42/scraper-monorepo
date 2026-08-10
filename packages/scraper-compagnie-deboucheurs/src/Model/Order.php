<?php

declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Model;

class Order
{
    public ?string $number = null;
    public ?string $purchaseDate = null;
    public ?ShippingAddress $shippingAddress = null;
    public ?int $id = null;
    public ?BillingAddress $billingAddress = null;

    /** @var array<int, ProductsOrdered> */
    public array $productsOrdered = [];
    public ?User $user = null;
    public ?string $status = null;

    public function addProductsOrdered(ProductsOrdered $productsOrdered): self
    {
        $this->productsOrdered[] = $productsOrdered;

        return $this;
    }
}
