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
class MetricRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\MetricRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\MetricRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\MetricRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cycle', $data)) {
            $object->setCycle($data['cycle']);
        }
        if (\array_key_exists('from', $data)) {
            $object->setFrom($data['from']);
        }
        if (\array_key_exists('metric_category', $data)) {
            $object->setMetricCategory($data['metric_category']);
        }
        if (\array_key_exists('metric_specs', $data)) {
            $values = array();
            foreach ($data['metric_specs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ExtraHop\\Api\\Model\\MetricSpec', 'json', $context);
            }
            $object->setMetricSpecs($values);
        }
        if (\array_key_exists('object_ids', $data)) {
            $values_1 = array();
            foreach ($data['object_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setObjectIds($values_1);
        }
        if (\array_key_exists('object_type', $data)) {
            $object->setObjectType($data['object_type']);
        }
        if (\array_key_exists('until', $data)) {
            $object->setUntil($data['until']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCycle()) {
            $data['cycle'] = $object->getCycle();
        }
        if (null !== $object->getFrom()) {
            $data['from'] = $object->getFrom();
        }
        if (null !== $object->getMetricCategory()) {
            $data['metric_category'] = $object->getMetricCategory();
        }
        if (null !== $object->getMetricSpecs()) {
            $values = array();
            foreach ($object->getMetricSpecs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['metric_specs'] = $values;
        }
        if (null !== $object->getObjectIds()) {
            $values_1 = array();
            foreach ($object->getObjectIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['object_ids'] = $values_1;
        }
        if (null !== $object->getObjectType()) {
            $data['object_type'] = $object->getObjectType();
        }
        if (null !== $object->getUntil()) {
            $data['until'] = $object->getUntil();
        }
        return $data;
    }
}