<?php

namespace ExtraHop\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ExtraHop\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MetricSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\MetricSpec';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\MetricSpec';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\MetricSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('key1', $data) && $data['key1'] !== null) {
            $object->setKey1($data['key1']);
        }
        elseif (\array_key_exists('key1', $data) && $data['key1'] === null) {
            $object->setKey1(null);
        }
        if (\array_key_exists('key2', $data) && $data['key2'] !== null) {
            $object->setKey2($data['key2']);
        }
        elseif (\array_key_exists('key2', $data) && $data['key2'] === null) {
            $object->setKey2(null);
        }
        if (\array_key_exists('calc_type', $data) && $data['calc_type'] !== null) {
            $object->setCalcType($data['calc_type']);
        }
        elseif (\array_key_exists('calc_type', $data) && $data['calc_type'] === null) {
            $object->setCalcType(null);
        }
        if (\array_key_exists('percentiles', $data) && $data['percentiles'] !== null) {
            $values = array();
            foreach ($data['percentiles'] as $value) {
                $values[] = $value;
            }
            $object->setPercentiles($values);
        }
        elseif (\array_key_exists('percentiles', $data) && $data['percentiles'] === null) {
            $object->setPercentiles(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getKey1()) {
            $data['key1'] = $object->getKey1();
        }
        if (null !== $object->getKey2()) {
            $data['key2'] = $object->getKey2();
        }
        if (null !== $object->getCalcType()) {
            $data['calc_type'] = $object->getCalcType();
        }
        if (null !== $object->getPercentiles()) {
            $values = array();
            foreach ($object->getPercentiles() as $value) {
                $values[] = $value;
            }
            $data['percentiles'] = $values;
        }
        return $data;
    }
}