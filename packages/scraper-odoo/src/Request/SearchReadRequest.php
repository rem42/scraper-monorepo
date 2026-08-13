<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

abstract class SearchReadRequest extends OdooRequest
{
    /** @var array<string> */
    protected array $fields = [];

    public function __construct(
        string $host,
        string $apiKey,
        private readonly array $domain,
        private readonly ?int $limit = null,
        private readonly ?int $offset = null,
    ) {
        parent::__construct($host, $apiKey);
    }

    /**
     * @param array<string> $fields
     */
    public function setFields(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function getMethod(): string
    {
        return 'search_read';
    }

    public function getJson(): array|object
    {
        $args = [
            'domain' => $this->domain,
        ];

        if ([] !== $this->fields) {
            $args['fields'] = $this->fields;
        }

        if (null !== $this->limit) {
            $args['limit'] = $this->limit;
        }

        if (null !== $this->offset) {
            $args['offset'] = $this->offset;
        }

        return $args;
    }
}
