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
class DetectionFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\DetectionFormat';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\DetectionFormat';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\DetectionFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('display_name', $data) && $data['display_name'] !== null) {
            $object->setDisplayName($data['display_name']);
        }
        elseif (\array_key_exists('display_name', $data) && $data['display_name'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('is_user_created', $data)) {
            $object->setIsUserCreated($data['is_user_created']);
        }
        if (\array_key_exists('mitre_categories', $data)) {
            $values = array();
            foreach ($data['mitre_categories'] as $value) {
                $values[] = $value;
            }
            $object->setMitreCategories($values);
        }
        if (\array_key_exists('properties', $data)) {
            $values_1 = array();
            foreach ($data['properties'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setProperties($values_1);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAuthor()) {
            $data['author'] = $object->getAuthor();
        }
        if (null !== $object->getDisplayName()) {
            $data['display_name'] = $object->getDisplayName();
        }
        if (null !== $object->getIsUserCreated()) {
            $data['is_user_created'] = $object->getIsUserCreated();
        }
        if (null !== $object->getMitreCategories()) {
            $values = array();
            foreach ($object->getMitreCategories() as $value) {
                $values[] = $value;
            }
            $data['mitre_categories'] = $values;
        }
        if (null !== $object->getProperties()) {
            $values_1 = array();
            foreach ($object->getProperties() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['properties'] = $values_1;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}