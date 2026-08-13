<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\Scraper\Api\AbstractApi;

abstract class OdooApi extends AbstractApi
{
    /**
     * @return object|array<object>|bool|string
     */
    public function execute(): object|array|bool|string
    {
        $content = $this->response->getContent();

        /** @var object|array<object> $deserialized */
        return $this->serializer->deserialize(
            $content,
            $this->getType(),
            'json'
        );
    }

    /**
     * Retourne le FQCN (Fully Qualified Class Name) du modèle attendu pour la désérialisation.
     * Si c'est une liste d'objets, retourner `MyModel::class . '[]'`.
     */
    abstract protected function getType(): string;
}
