<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Model;

class DataList
{
    /** @var array<int, Data> */
    public array $data = [];
    public ?Pagination $pagination = null;

    public function addData(Data $datum): self
    {
        $this->data[] = $datum;

        return $this;
    }
}
