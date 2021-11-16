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
class MetricResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\MetricResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\MetricResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\MetricResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stats', $data)) {
            $values = array();
            foreach ($data['stats'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ExtraHop\\Api\\Model\\MetricStats', 'json', $context);
            }
            $object->setStats($values);
        }
        if (\array_key_exists('cycle', $data)) {
            $object->setCycle($data['cycle']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('clock', $data)) {
            $object->setClock($data['clock']);
        }
        if (\array_key_exists('from', $data)) {
            $object->setFrom($data['from']);
        }
        if (\array_key_exists('until', $data)) {
            $object->setUntil($data['until']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStats()) {
            $values = array();
            foreach ($object->getStats() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['stats'] = $values;
        }
        if (null !== $object->getCycle()) {
            $data['cycle'] = $object->getCycle();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getClock()) {
            $data['clock'] = $object->getClock();
        }
        if (null !== $object->getFrom()) {
            $data['from'] = $object->getFrom();
        }
        if (null !== $object->getUntil()) {
            $data['until'] = $object->getUntil();
        }
        return $data;
    }
}