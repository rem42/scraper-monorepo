<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

abstract class WriteRequest extends OdooRequest
{
    /** @var array<int> */
    protected array $ids = [];

    /** @var array<string, mixed> */
    protected array $values = [];

    /**
     * @param array<int> $ids
     */
    public function setIds(array $ids): self
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * @param array<string, mixed> $values
     */
    public function setValues(array $values): self
    {
        $this->values = $values;

        return $this;
    }

    public function getMethod(): string
    {
        return 'write';
    }

    public function getJson(): array
    {
        return [
            'ids' => $this->ids,
            'vals' => $this->values,
        ];
    }
}
