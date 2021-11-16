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
class ApplicationCriteriaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\ApplicationCriteria';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\ApplicationCriteria';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\ApplicationCriteria();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('protocol_default', $data)) {
            $object->setProtocolDefault($data['protocol_default']);
        }
        if (\array_key_exists('sources', $data)) {
            $values = array();
            foreach ($data['sources'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ExtraHop\\Api\\Model\\ApplicationSource', 'json', $context);
            }
            $object->setSources($values);
        }
        if (\array_key_exists('protocols', $data)) {
            $values_1 = array();
            foreach ($data['protocols'] as $value_1) {
                $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setProtocols($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProtocolDefault()) {
            $data['protocol_default'] = $object->getProtocolDefault();
        }
        if (null !== $object->getSources()) {
            $values = array();
            foreach ($object->getSources() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sources'] = $values;
        }
        if (null !== $object->getProtocols()) {
            $values_1 = array();
            foreach ($object->getProtocols() as $value_1) {
                $values_2 = array();
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $data['protocols'] = $values_1;
        }
        return $data;
    }
}