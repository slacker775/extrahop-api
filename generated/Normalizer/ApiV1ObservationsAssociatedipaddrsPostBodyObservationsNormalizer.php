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
class ApiV1ObservationsAssociatedipaddrsPostBodyObservationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\ApiV1ObservationsAssociatedipaddrsPostBodyObservations';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\ApiV1ObservationsAssociatedipaddrsPostBodyObservations';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\ApiV1ObservationsAssociatedipaddrsPostBodyObservations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ipaddr', $data)) {
            $object->setIpaddr($data['ipaddr']);
        }
        if (\array_key_exists('associated_ipaddr', $data)) {
            $object->setAssociatedIpaddr($data['associated_ipaddr']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp($data['timestamp']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIpaddr()) {
            $data['ipaddr'] = $object->getIpaddr();
        }
        if (null !== $object->getAssociatedIpaddr()) {
            $data['associated_ipaddr'] = $object->getAssociatedIpaddr();
        }
        if (null !== $object->getTimestamp()) {
            $data['timestamp'] = $object->getTimestamp();
        }
        return $data;
    }
}