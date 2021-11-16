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
class TriggerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\Trigger';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\Trigger';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\Trigger();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('apply_all', $data)) {
            $object->setApplyAll($data['apply_all']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($data['author']);
        }
        if (\array_key_exists('debug', $data)) {
            $object->setDebug($data['debug']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
        }
        if (\array_key_exists('event', $data) && $data['event'] !== null) {
            $object->setEvent($data['event']);
        }
        elseif (\array_key_exists('event', $data) && $data['event'] === null) {
            $object->setEvent(null);
        }
        if (\array_key_exists('events', $data)) {
            $values = array();
            foreach ($data['events'] as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
        }
        if (\array_key_exists('hints', $data)) {
            $values_1 = array();
            foreach ($data['hints'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ExtraHop\\Api\\Model\\TriggerHint', 'json', $context);
            }
            $object->setHints($values_1);
        }
        if (\array_key_exists('mod_time', $data) && $data['mod_time'] !== null) {
            $object->setModTime($data['mod_time']);
        }
        elseif (\array_key_exists('mod_time', $data) && $data['mod_time'] === null) {
            $object->setModTime(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('script', $data)) {
            $object->setScript($data['script']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getApplyAll()) {
            $data['apply_all'] = $object->getApplyAll();
        }
        if (null !== $object->getAuthor()) {
            $data['author'] = $object->getAuthor();
        }
        if (null !== $object->getDebug()) {
            $data['debug'] = $object->getDebug();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if (null !== $object->getEvent()) {
            $data['event'] = $object->getEvent();
        }
        if (null !== $object->getEvents()) {
            $values = array();
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
        }
        if (null !== $object->getHints()) {
            $values_1 = array();
            foreach ($object->getHints() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['hints'] = $values_1;
        }
        if (null !== $object->getModTime()) {
            $data['mod_time'] = $object->getModTime();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getScript()) {
            $data['script'] = $object->getScript();
        }
        return $data;
    }
}