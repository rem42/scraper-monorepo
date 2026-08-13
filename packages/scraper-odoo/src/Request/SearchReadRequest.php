<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

abstract class SearchReadRequest extends OdooRequest
{
    /** @var array<mixed> */
    protected array $domain = [];

    /** @var array<string> */
    protected array $fields = [];

    protected ?int $limit = null;
    protected ?int $offset = null;

    /**
     * @param array<mixed> $domain
     */
    public function setDomain(array $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @param array<string> $fields
     */
    public function setFields(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    public function setLimit(?int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function setOffset(?int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    protected function getOdooMethod(): string
    {
        return 'search_read';
    }

    protected function getOdooArgs(): array
    {
        return [
            $this->domain,
        ];
    }

    protected function getOdooKwargs(): array
    {
        $kwargs = [];

        if ([] !== $this->fields) {
            $kwargs['fields'] = $this->fields;
        }

        if (null !== $this->limit) {
            $kwargs['limit'] = $this->limit;
        }

        if (null !== $this->offset) {
            $kwargs['offset'] = $this->offset;
        }

        return $kwargs;
    }
}
