<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Tests\Api;

use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Attribute\Scraper;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractOdooApiTestCase extends TestCase
{
    protected function getResponseMock(string $fixture, int $statusCode = 200): ResponseInterface
    {
        $response = $this->createMock(ResponseInterface::class);
        $content = file_get_contents(__DIR__ . '/../Fixtures/' . $fixture);

        if (false === $content) {
            throw new \RuntimeException(sprintf('Fixture "%s" not found.', $fixture));
        }

        $response->method('getContent')->willReturn($content);
        $response->method('getStatusCode')->willReturn($statusCode);

        return $response;
    }

    protected function getScraperAttribute(): Scraper
    {
        return new Scraper();
    }
}
