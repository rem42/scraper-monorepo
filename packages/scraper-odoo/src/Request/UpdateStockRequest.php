<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class UpdateStockRequest extends WriteRequest
{
    public function getOdooModel(): string
    {
        // En Odoo, le stock d'un produit spécifique est souvent mis à jour via product.product ou stock.quant
        return 'product.product';
    }
}
