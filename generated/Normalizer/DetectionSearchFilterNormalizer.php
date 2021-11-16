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
class DetectionSearchFilterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\DetectionSearchFilter';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\DetectionSearchFilter';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\DetectionSearchFilter();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('category', $data) && $data['category'] !== null) {
            $object->setCategory($data['category']);
        }
        elseif (\array_key_exists('category', $data) && $data['category'] === null) {
            $object->setCategory(null);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $values = array();
            foreach ($data['assignee'] as $value) {
                $values[] = $value;
            }
            $object->setAssignee($values);
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
        }
        if (\array_key_exists('ticket_id', $data) && $data['ticket_id'] !== null) {
            $values_1 = array();
            foreach ($data['ticket_id'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTicketId($values_1);
        }
        elseif (\array_key_exists('ticket_id', $data) && $data['ticket_id'] === null) {
            $object->setTicketId(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $values_2 = array();
            foreach ($data['status'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setStatus($values_2);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
            $values_3 = array();
            foreach ($data['resolution'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setResolution($values_3);
        }
        elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
            $object->setResolution(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }
        if (null !== $object->getAssignee()) {
            $values = array();
            foreach ($object->getAssignee() as $value) {
                $values[] = $value;
            }
            $data['assignee'] = $values;
        }
        if (null !== $object->getTicketId()) {
            $values_1 = array();
            foreach ($object->getTicketId() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ticket_id'] = $values_1;
        }
        if (null !== $object->getStatus()) {
            $values_2 = array();
            foreach ($object->getStatus() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['status'] = $values_2;
        }
        if (null !== $object->getResolution()) {
            $values_3 = array();
            foreach ($object->getResolution() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['resolution'] = $values_3;
        }
        return $data;
    }
}