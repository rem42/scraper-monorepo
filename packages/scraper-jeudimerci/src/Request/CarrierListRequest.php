<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;

#[Scraper(method: Method::GET, path: 'shipping/carriers')]
class CarrierListRequest extends JeudiMerciRequest {}
