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
class IpAddressResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\IpAddressResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\IpAddressResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\IpAddressResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('associated_ipaddrs', $data)) {
            $values = array();
            foreach ($data['associated_ipaddrs'] as $value) {
                $values[] = $value;
            }
            $object->setAssociatedIpaddrs($values);
        }
        if (\array_key_exists('current_ipaddrs', $data)) {
            $values_1 = array();
            foreach ($data['current_ipaddrs'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCurrentIpaddrs($values_1);
        }
        if (\array_key_exists('ipaddrs', $data)) {
            $values_2 = array();
            foreach ($data['ipaddrs'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ExtraHop\\Api\\Model\\IpAddress', 'json', $context);
            }
            $object->setIpaddrs($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAssociatedIpaddrs()) {
            $values = array();
            foreach ($object->getAssociatedIpaddrs() as $value) {
                $values[] = $value;
            }
            $data['associated_ipaddrs'] = $values;
        }
        if (null !== $object->getCurrentIpaddrs()) {
            $values_1 = array();
            foreach ($object->getCurrentIpaddrs() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['current_ipaddrs'] = $values_1;
        }
        if (null !== $object->getIpaddrs()) {
            $values_2 = array();
            foreach ($object->getIpaddrs() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['ipaddrs'] = $values_2;
        }
        return $data;
    }
}