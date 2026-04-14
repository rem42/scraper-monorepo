<?php declare(strict_types=1);

namespace Scraper\ScraperLaPosteApim\Tests\Request;

use PHPUnit\Framework\TestCase;
use Scraper\ScraperLaPosteApim\Model\Error;
use Scraper\ScraperLaPosteApim\Model\Token;
use Scraper\ScraperLaPosteApim\Request\TokenRequest;

/**
 * @internal
 */
class TokenApiTest extends TestCase
{
    use RequestTrait;

    public function testTokenRequest(): void
    {
        $client = $this->getClient('token.json');

        $request = new TokenRequest('clientId', 'clientSecret');
        $result = $client->send($request);

        $this->assertInstanceOf(Token::class, $result);
        $this->assertEquals('Bearer', $result->tokenType);
    }

    public function testErrorRequest(): void
    {
        $client = $this->getClient('error.json', 401);

        $request = new TokenRequest('clientId', 'clientSecret');
        $result = $client->send($request);

        $this->assertInstanceOf(Error::class, $result);
        $this->assertEquals('invalid_client', $result->error);
    }
}
