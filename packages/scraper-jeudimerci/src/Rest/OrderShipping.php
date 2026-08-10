<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Rest;

class OrderShipping implements \JsonSerializable
{
    /** @var array<int, string> */
    private array $trackingIds;

    /**
     * @return array<int, string>
     */
    public function getTrackingIds(): array
    {
        return $this->trackingIds;
    }

    /**
     * @param array<int, string> $trackingIds
     */
    public function setTrackingIds(array $trackingIds): self
    {
        $this->trackingIds = $trackingIds;

        return $this;
    }

    public function addTrackingId(string $trackingId): self
    {
        $this->trackingIds[] = $trackingId;

        return $this;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'trackingIds' => $this->getTrackingIds(),
        ];
    }
}
