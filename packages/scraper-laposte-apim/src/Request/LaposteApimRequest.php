<?php declare(strict_types=1);

namespace Scraper\ScraperLaPosteApim\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::POST, scheme: Scheme::HTTPS, host: 'apim-gw.extra.laposte.fr')]
abstract class LaposteApimRequest extends ScraperRequest
{
}
