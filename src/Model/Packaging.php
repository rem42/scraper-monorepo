<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class Packaging
{
    public ?string $type = null;
    public ?string $id = null;
    public ?string $cushioning = null;
    public ?string $tapeId = null;
    public ?MessageOnBox $messageOnBox = null;
    public ?string $stickerId = null;
    public ?string $wrappingPaperId = null;
    public ?TissuePaper $tissuePaper = null;
}
