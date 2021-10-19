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
class DeviceGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\DeviceGroup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\DeviceGroup';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\DeviceGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('field', $data) && $data['field'] !== null) {
            $object->setField($data['field']);
        }
        elseif (\array_key_exists('field', $data) && $data['field'] === null) {
            $object->setField(null);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
        }
        elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
        }
        if (\array_key_exists('filter', $data)) {
            $values = array();
            foreach ($data['filter'] as $value) {
                $values[] = $value;
            }
            $object->setFilter($values);
        }
        if (\array_key_exists('built_in', $data)) {
            $object->setBuiltIn($data['built_in']);
        }
        if (\array_key_exists('dynamic', $data)) {
            $object->setDynamic($data['dynamic']);
        }
        if (\array_key_exists('include_custom_devices', $data)) {
            $object->setIncludeCustomDevices($data['include_custom_devices']);
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
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getField()) {
            $data['field'] = $object->getField();
        }
        if (null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        if (null !== $object->getFilter()) {
            $values = array();
            foreach ($object->getFilter() as $value) {
                $values[] = $value;
            }
            $data['filter'] = $values;
        }
        if (null !== $object->getBuiltIn()) {
            $data['built_in'] = $object->getBuiltIn();
        }
        if (null !== $object->getDynamic()) {
            $data['dynamic'] = $object->getDynamic();
        }
        if (null !== $object->getIncludeCustomDevices()) {
            $data['include_custom_devices'] = $object->getIncludeCustomDevices();
        }
        if (null !== $object->getModTime()) {
            $data['mod_time'] = $object->getModTime();
        }
        return $data;
    }
}