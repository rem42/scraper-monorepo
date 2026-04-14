<?php declare(strict_types=1);

namespace Scraper\ScraperLaPosteApim\Model;

class Token
{
    public string $accessToken;
    public string $scope;
    public string $tokenType;
    public int $expiresIn;
}
