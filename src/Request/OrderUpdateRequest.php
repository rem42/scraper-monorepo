<?php declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::POST, path: 'OrderShippings')]
class OrderUpdateRequest extends CompagnieDeboucheursRequest implements RequestQuery
{
    public function __construct(
        string $auth,
        private readonly int $id,
        private readonly string $status,
        private readonly ?string $trackingNumber = null,
        private readonly ?string $carrier = null
    ) {
        parent::__construct($auth);
    }

    public function getQuery(): array
    {
        $array = [
            'id' => $this->id,
            'orderShippingStatus' => $this->status,
        ];

        if ($this->trackingNumber) {
            $array['shippingReference'] = $this->trackingNumber;
        }

        if ($this->carrier) {
            $array['idCarrier'] = $this->carrier;
        }

        return $array;
    }
}
