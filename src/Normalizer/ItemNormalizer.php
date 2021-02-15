<?php

namespace App\Normalizer;

use App\Hydra\Item;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ItemNormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function supportsDenormalization($data, string $type, string $format = null)
    {
        return $type === Item::class;
    }

    public function denormalize($data, string $type, string $format = null, array $context = [])
    {
        if(isset($context['items_models'])) {
            return new Item($this->denormalizer->denormalize($data, $context['items_models'].'[]', $format));
        }

        return new Item($data);
    }
}