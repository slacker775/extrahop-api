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
class DeviceSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\DeviceSearch';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\DeviceSearch';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\DeviceSearch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('active_from', $data) && $data['active_from'] !== null) {
            $object->setActiveFrom($data['active_from']);
        }
        elseif (\array_key_exists('active_from', $data) && $data['active_from'] === null) {
            $object->setActiveFrom(null);
        }
        if (\array_key_exists('active_until', $data) && $data['active_until'] !== null) {
            $object->setActiveUntil($data['active_until']);
        }
        elseif (\array_key_exists('active_until', $data) && $data['active_until'] === null) {
            $object->setActiveUntil(null);
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
        if (\array_key_exists('filter', $data)) {
            $object->setFilter($this->denormalizer->denormalize($data['filter'], 'ExtraHop\\Api\\Model\\DeviceSearchFilter', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActiveFrom()) {
            $data['active_from'] = $object->getActiveFrom();
        }
        if (null !== $object->getActiveUntil()) {
            $data['active_until'] = $object->getActiveUntil();
        }
        if (null !== $object->getLimit()) {
            $data['limit'] = $object->getLimit();
        }
        if (null !== $object->getOffset()) {
            $data['offset'] = $object->getOffset();
        }
        if (null !== $object->getFilter()) {
            $data['filter'] = $this->normalizer->normalize($object->getFilter(), 'json', $context);
        }
        return $data;
    }
}