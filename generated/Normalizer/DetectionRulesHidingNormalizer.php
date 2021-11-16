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
class DetectionRulesHidingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\DetectionRulesHiding';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\DetectionRulesHiding';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\DetectionRulesHiding();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('detection_type', $data) && $data['detection_type'] !== null) {
            $object->setDetectionType($data['detection_type']);
        }
        elseif (\array_key_exists('detection_type', $data) && $data['detection_type'] === null) {
            $object->setDetectionType(null);
        }
        if (\array_key_exists('detections_hidden', $data)) {
            $object->setDetectionsHidden($data['detections_hidden']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('hide_past_detections', $data)) {
            $object->setHidePastDetections($data['hide_past_detections']);
        }
        if (\array_key_exists('offender', $data)) {
            $values = array();
            foreach ($data['offender'] as $value) {
                $values[] = $value;
            }
            $object->setOffender($values);
        }
        if (\array_key_exists('victim', $data)) {
            $values_1 = array();
            foreach ($data['victim'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setVictim($values_1);
        }
        if (\array_key_exists('expiration', $data) && $data['expiration'] !== null) {
            $object->setExpiration($data['expiration']);
        }
        elseif (\array_key_exists('expiration', $data) && $data['expiration'] === null) {
            $object->setExpiration(null);
        }
        if (\array_key_exists('create_time', $data) && $data['create_time'] !== null) {
            $object->setCreateTime($data['create_time']);
        }
        elseif (\array_key_exists('create_time', $data) && $data['create_time'] === null) {
            $object->setCreateTime(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getAuthor()) {
            $data['author'] = $object->getAuthor();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDetectionType()) {
            $data['detection_type'] = $object->getDetectionType();
        }
        if (null !== $object->getDetectionsHidden()) {
            $data['detections_hidden'] = $object->getDetectionsHidden();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getHidePastDetections()) {
            $data['hide_past_detections'] = $object->getHidePastDetections();
        }
        if (null !== $object->getOffender()) {
            $values = array();
            foreach ($object->getOffender() as $value) {
                $values[] = $value;
            }
            $data['offender'] = $values;
        }
        if (null !== $object->getVictim()) {
            $values_1 = array();
            foreach ($object->getVictim() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['victim'] = $values_1;
        }
        if (null !== $object->getExpiration()) {
            $data['expiration'] = $object->getExpiration();
        }
        if (null !== $object->getCreateTime()) {
            $data['create_time'] = $object->getCreateTime();
        }
        return $data;
    }
}