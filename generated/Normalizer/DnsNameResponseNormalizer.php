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
class DnsNameResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\DnsNameResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\DnsNameResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\DnsNameResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current_dns_names', $data)) {
            $values = array();
            foreach ($data['current_dns_names'] as $value) {
                $values[] = $value;
            }
            $object->setCurrentDnsNames($values);
        }
        if (\array_key_exists('dns_names', $data)) {
            $values_1 = array();
            foreach ($data['dns_names'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ExtraHop\\Api\\Model\\DnsName', 'json', $context);
            }
            $object->setDnsNames($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCurrentDnsNames()) {
            $values = array();
            foreach ($object->getCurrentDnsNames() as $value) {
                $values[] = $value;
            }
            $data['current_dns_names'] = $values;
        }
        if (null !== $object->getDnsNames()) {
            $values_1 = array();
            foreach ($object->getDnsNames() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['dns_names'] = $values_1;
        }
        return $data;
    }
}