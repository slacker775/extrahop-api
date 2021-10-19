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
class ApplicationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\Application';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\Application';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\Application();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('criteria', $data)) {
            $values = array();
            foreach ($data['criteria'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ExtraHop\\Api\\Model\\ApplicationCriteria', 'json', $context);
            }
            $object->setCriteria($values);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('discovery_id', $data)) {
            $object->setDiscoveryId($data['discovery_id']);
        }
        if (\array_key_exists('display_name', $data)) {
            $object->setDisplayName($data['display_name']);
        }
        if (\array_key_exists('extrahop_id', $data)) {
            $object->setExtrahopId($data['extrahop_id']);
        }
        if (\array_key_exists('mod_time', $data)) {
            $object->setModTime($data['mod_time']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('user_mod_time', $data)) {
            $object->setUserModTime($data['user_mod_time']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getCriteria()) {
            $values = array();
            foreach ($object->getCriteria() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['criteria'] = $values;
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDiscoveryId()) {
            $data['discovery_id'] = $object->getDiscoveryId();
        }
        if (null !== $object->getDisplayName()) {
            $data['display_name'] = $object->getDisplayName();
        }
        if (null !== $object->getExtrahopId()) {
            $data['extrahop_id'] = $object->getExtrahopId();
        }
        if (null !== $object->getModTime()) {
            $data['mod_time'] = $object->getModTime();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getUserModTime()) {
            $data['user_mod_time'] = $object->getUserModTime();
        }
        return $data;
    }
}