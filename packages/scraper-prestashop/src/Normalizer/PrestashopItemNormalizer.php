<?php

declare(strict_types=1);

namespace Scraper\ScraperPrestashop\Normalizer;

use Scraper\ScraperPrestashop\Entity\PrestashopItem;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class PrestashopItemNormalizer implements DenormalizerInterface
{
    /**
     * @param array<string, string> $context
     *
     * @return PrestashopItem|array<PrestashopItem>|array<int, mixed>|null
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (PrestashopItem::class === $type && \is_string($data)) {
            $prestashopItem = new PrestashopItem();
            $prestashopItem
                ->setValue($data)
            ;

            return $prestashopItem;
        }

        if (PrestashopItem::class === $type && \is_array($data)) {
            $prestashopItem = new PrestashopItem();
            $prestashopItem
                ->setId(isset($data['id']) && is_numeric($data['id']) ? (int) $data['id'] : null)
                ->setValue(isset($data['value']) && is_string($data['value']) ? $data['value'] : null)
            ;

            return $prestashopItem;
        }

        if (PrestashopItem::class . '[]' === $type && \is_array($data)) {
            return array_values(array_filter(array_map(function ($item) {
                $denormalized = $this->denormalize($item, PrestashopItem::class);
                /** @var PrestashopItem|null $denormalized */
                return $denormalized;
            }, $data)));
        }

        if (PrestashopItem::class . '[]' === $type && \is_string($data)) {
            $prestashopItem = new PrestashopItem();
            $prestashopItem
                ->setValue($data)
            ;

            return [$prestashopItem];
        }

        return PrestashopItem::class === $type ? null : [];
    }

    /**
     * @param array<string, string> $context
     * @return bool
     */
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return !\is_array($data)
            && (PrestashopItem::class === $type || PrestashopItem::class . '[]' === $type);
    }

    public function getSupportedTypes(?string $format): array
    {
        return ['*' => true];
    }
}
