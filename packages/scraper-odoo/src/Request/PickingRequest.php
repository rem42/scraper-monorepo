<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class PickingRequest extends ReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'name',
        'state',
        'x_wms_status',
        'location_id',
        'location_dest_id',
        'carrier_id',
        'delivery_type',
        'carrier_price',
        'move_ids',
        'partner_id',
    ];

    public function getModel(): string
    {
        return 'stock.picking';
    }
}
