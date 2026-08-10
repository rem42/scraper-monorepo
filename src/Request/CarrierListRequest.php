<?php declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::GET, path: 'OrderShippingCarriers')]
class CarrierListRequest extends CompagnieDeboucheursRequest
{
}
