<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Rest;

class OrderStatus implements \JsonSerializable
{
    private string $status;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return array<string, string>
     */
    public function jsonSerialize(): array
    {
        return [
            'status' => $this->getStatus(),
        ];
    }
}
