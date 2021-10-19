<?php

namespace ExtraHop\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use ExtraHop\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DetectionSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\DetectionSearch';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\DetectionSearch';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\DetectionSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('filter', $data)) {
            $object->setFilter($this->denormalizer->denormalize($data['filter'], 'ExtraHop\\Api\\Model\\DetectionSearchFilter', 'json', $context));
        }
        if (\array_key_exists('from', $data) && $data['from'] !== null) {
            $object->setFrom($data['from']);
        }
        elseif (\array_key_exists('from', $data) && $data['from'] === null) {
            $object->setFrom(null);
        }
        if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
            $object->setLimit($data['limit']);
        }
        elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
            $object->setLimit(null);
        }
        if (\array_key_exists('offset', $data) && $data['offset'] !== null) {
            $object->setOffset($data['offset']);
        }
        elseif (\array_key_exists('offset', $data) && $data['offset'] === null) {
            $object->setOffset(null);
        }
        if (\array_key_exists('sort', $data)) {
            $object->setSort($this->denormalizer->denormalize($data['sort'], 'ExtraHop\\Api\\Model\\DetectionSearchSort', 'json', $context));
        }
        if (\array_key_exists('until', $data) && $data['until'] !== null) {
            $object->setUntil($data['until']);
        }
        elseif (\array_key_exists('until', $data) && $data['until'] === null) {
            $object->setUntil(null);
        }
        if (\array_key_exists('update_time', $data) && $data['update_time'] !== null) {
            $object->setUpdateTime($data['update_time']);
        }
        elseif (\array_key_exists('update_time', $data) && $data['update_time'] === null) {
            $object->setUpdateTime(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFilter()) {
            $data['filter'] = $this->normalizer->normalize($object->getFilter(), 'json', $context);
        }
        if (null !== $object->getFrom()) {
            $data['from'] = $object->getFrom();
        }
        if (null !== $object->getLimit()) {
            $data['limit'] = $object->getLimit();
        }
        if (null !== $object->getOffset()) {
            $data['offset'] = $object->getOffset();
        }
        if (null !== $object->getSort()) {
            $data['sort'] = $this->normalizer->normalize($object->getSort(), 'json', $context);
        }
        if (null !== $object->getUntil()) {
            $data['until'] = $object->getUntil();
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        return $data;
    }
}