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
class ActivityMapNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\ActivityMap';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\ActivityMap';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\ActivityMap();
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
        if (\array_key_exists('mode', $data) && $data['mode'] !== null) {
            $object->setMode($data['mode']);
        }
        elseif (\array_key_exists('mode', $data) && $data['mode'] === null) {
            $object->setMode(null);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('rights', $data)) {
            $values = array();
            foreach ($data['rights'] as $value) {
                $values[] = $value;
            }
            $object->setRights($values);
        }
        if (\array_key_exists('short_code', $data) && $data['short_code'] !== null) {
            $object->setShortCode($data['short_code']);
        }
        elseif (\array_key_exists('short_code', $data) && $data['short_code'] === null) {
            $object->setShortCode(null);
        }
        if (\array_key_exists('show_alert_status', $data)) {
            $object->setShowAlertStatus($data['show_alert_status']);
        }
        if (\array_key_exists('walks', $data)) {
            $values_1 = array();
            foreach ($data['walks'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWalks($values_1);
        }
        if (\array_key_exists('weighting', $data) && $data['weighting'] !== null) {
            $object->setWeighting($data['weighting']);
        }
        elseif (\array_key_exists('weighting', $data) && $data['weighting'] === null) {
            $object->setWeighting(null);
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
        if (null !== $object->getMode()) {
            $data['mode'] = $object->getMode();
        }
        if (null !== $object->getOwner()) {
            $data['owner'] = $object->getOwner();
        }
        if (null !== $object->getRights()) {
            $values = array();
            foreach ($object->getRights() as $value) {
                $values[] = $value;
            }
            $data['rights'] = $values;
        }
        if (null !== $object->getShortCode()) {
            $data['short_code'] = $object->getShortCode();
        }
        if (null !== $object->getShowAlertStatus()) {
            $data['show_alert_status'] = $object->getShowAlertStatus();
        }
        if (null !== $object->getWalks()) {
            $values_1 = array();
            foreach ($object->getWalks() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['walks'] = $values_1;
        }
        if (null !== $object->getWeighting()) {
            $data['weighting'] = $object->getWeighting();
        }
        if (null !== $object->getModTime()) {
            $data['mod_time'] = $object->getModTime();
        }
        return $data;
    }
}