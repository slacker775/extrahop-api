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
class ApplicationActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\ApplicationActivity';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\ApplicationActivity';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\ApplicationActivity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('application_id', $data)) {
            $object->setApplicationId($data['application_id']);
        }
        if (\array_key_exists('from_time', $data)) {
            $object->setFromTime($data['from_time']);
        }
        if (\array_key_exists('until_time', $data)) {
            $object->setUntilTime($data['until_time']);
        }
        if (\array_key_exists('stat_name', $data)) {
            $object->setStatName($data['stat_name']);
        }
        if (\array_key_exists('mod_time', $data)) {
            $object->setModTime($data['mod_time']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getApplicationId()) {
            $data['application_id'] = $object->getApplicationId();
        }
        if (null !== $object->getFromTime()) {
            $data['from_time'] = $object->getFromTime();
        }
        if (null !== $object->getUntilTime()) {
            $data['until_time'] = $object->getUntilTime();
        }
        if (null !== $object->getStatName()) {
            $data['stat_name'] = $object->getStatName();
        }
        if (null !== $object->getModTime()) {
            $data['mod_time'] = $object->getModTime();
        }
        return $data;
    }
}