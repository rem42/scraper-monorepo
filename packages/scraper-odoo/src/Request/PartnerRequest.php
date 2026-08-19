<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class PartnerRequest extends ReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'id',
        'company_name',
        'city',
        'complete_name',
        'contact_address',
        'country_code',
        'country_id',
        'display_name',
        'email',
        'email_formatted',
        'name',
        'parent_name',
        'phone',
        'street',
        'street2',
        'type',
        'zip',
    ];

    public function getModel(): string
    {
        return 'res.partner';
    }
}
