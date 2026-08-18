<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

abstract class CreateRequest extends OdooRequest
{
    /** @var array<int, array> */
    protected array $values = [];

    /**
     * @param array<int, array> $values
     */
    public function setValues(array $values): self
    {
        $this->values = $values;

        return $this;
    }

    public function addValue(array $value): self
    {
        $this->values[] = $value;

        return $this;
    }

    public function getMethod(): string
    {
        return 'create';
    }

    public function getJson(): array
    {
        return [
            'vals_list' => $this->values,
        ];
    }
}
