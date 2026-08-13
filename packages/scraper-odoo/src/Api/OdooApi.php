<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\ScraperOdoo\Exception\OdooScraperException;

abstract class OdooApi extends AbstractApi
{
    /**
     * @return object|array<object>|bool|string
     */
    public function execute(): object|array|bool|string
    {
        $content = $this->response->getContent();

        try {
            /** @var array{error?: array{data?: array{message?: string}, message?: string}, result?: mixed} $data */
            $data = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            throw new OdooScraperException('Invalid JSON response from Odoo: ' . $e->getMessage(), 0, $e);
        }

        if (isset($data['error'])) {
            $errorMessage = $data['error']['data']['message'] ?? $data['error']['message'] ?? 'Unknown Odoo error';
            throw new OdooScraperException('Odoo Error: ' . $errorMessage);
        }

        if (!\array_key_exists('result', $data)) {
            throw new OdooScraperException('Malformed Odoo response: missing "result" key.');
        }

        $result = $data['result'];

        if (is_bool($result)) {
            return $result;
        }

        if (is_string($result)) {
            return $result;
        }

        $jsonResult = json_encode($result, \JSON_THROW_ON_ERROR);

        /** @var object|array<object> $deserialized */
        return $this->serializer->deserialize(
            $jsonResult,
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
