<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

abstract class ReadRequest extends OdooRequest
{
    /** @var array<string> */
    protected array $fields = [];

    public function __construct(
        string $host,
        string $apiKey,
        private readonly array $ids,
    ) {
        parent::__construct($host, $apiKey);
    }

    public function getMethod(): string
    {
        return 'read';
    }

    public function getJson(): array|object
    {
        $args = [
            'ids' => $this->ids,
        ];

        if ([] !== $this->fields) {
            $args['fields'] = $this->fields;
        }

        return $args;
    }
}
