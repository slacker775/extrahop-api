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
class DetectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\Detection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\Detection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\Detection();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('appliance_id', $data)) {
            $object->setApplianceId($data['appliance_id']);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $object->setAssignee($data['assignee']);
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
        }
        if (\array_key_exists('categories', $data)) {
            $values = array();
            foreach ($data['categories'] as $value) {
                $values[] = $value;
            }
            $object->setCategories($values);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('end_time', $data)) {
            $object->setEndTime($data['end_time']);
        }
        if (\array_key_exists('is_user_created', $data)) {
            $object->setIsUserCreated($data['is_user_created']);
        }
        if (\array_key_exists('mitre_tactics', $data)) {
            $values_1 = array();
            foreach ($data['mitre_tactics'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ExtraHop\\Api\\Model\\DetectionMitreTactic', 'json', $context);
            }
            $object->setMitreTactics($values_1);
        }
        if (\array_key_exists('mitre_techniques', $data)) {
            $values_2 = array();
            foreach ($data['mitre_techniques'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'ExtraHop\\Api\\Model\\DetectionMitreTechnique', 'json', $context);
            }
            $object->setMitreTechniques($values_2);
        }
        if (\array_key_exists('participants', $data)) {
            $values_3 = array();
            foreach ($data['participants'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'ExtraHop\\Api\\Model\\DetectionParticipant', 'json', $context);
            }
            $object->setParticipants($values_3);
        }
        if (\array_key_exists('properties', $data)) {
            $values_4 = array();
            foreach ($data['properties'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setProperties($values_4);
        }
        if (\array_key_exists('resolution', $data) && $data['resolution'] !== null) {
            $object->setResolution($data['resolution']);
        }
        elseif (\array_key_exists('resolution', $data) && $data['resolution'] === null) {
            $object->setResolution(null);
        }
        if (\array_key_exists('risk_score', $data)) {
            $object->setRiskScore($data['risk_score']);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('ticket_id', $data) && $data['ticket_id'] !== null) {
            $object->setTicketId($data['ticket_id']);
        }
        elseif (\array_key_exists('ticket_id', $data) && $data['ticket_id'] === null) {
            $object->setTicketId(null);
        }
        if (\array_key_exists('ticket_url', $data) && $data['ticket_url'] !== null) {
            $object->setTicketUrl($data['ticket_url']);
        }
        elseif (\array_key_exists('ticket_url', $data) && $data['ticket_url'] === null) {
            $object->setTicketUrl(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('start_time', $data) && $data['start_time'] !== null) {
            $object->setStartTime($data['start_time']);
        }
        elseif (\array_key_exists('start_time', $data) && $data['start_time'] === null) {
            $object->setStartTime(null);
        }
        if (\array_key_exists('update_time', $data) && $data['update_time'] !== null) {
            $object->setUpdateTime($data['update_time']);
        }
        elseif (\array_key_exists('update_time', $data) && $data['update_time'] === null) {
            $object->setUpdateTime(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getApplianceId()) {
            $data['appliance_id'] = $object->getApplianceId();
        }
        if (null !== $object->getAssignee()) {
            $data['assignee'] = $object->getAssignee();
        }
        if (null !== $object->getCategories()) {
            $values = array();
            foreach ($object->getCategories() as $value) {
                $values[] = $value;
            }
            $data['categories'] = $values;
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getEndTime()) {
            $data['end_time'] = $object->getEndTime();
        }
        if (null !== $object->getIsUserCreated()) {
            $data['is_user_created'] = $object->getIsUserCreated();
        }
        if (null !== $object->getMitreTactics()) {
            $values_1 = array();
            foreach ($object->getMitreTactics() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['mitre_tactics'] = $values_1;
        }
        if (null !== $object->getMitreTechniques()) {
            $values_2 = array();
            foreach ($object->getMitreTechniques() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['mitre_techniques'] = $values_2;
        }
        if (null !== $object->getParticipants()) {
            $values_3 = array();
            foreach ($object->getParticipants() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['participants'] = $values_3;
        }
        if (null !== $object->getProperties()) {
            $values_4 = array();
            foreach ($object->getProperties() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['properties'] = $values_4;
        }
        if (null !== $object->getResolution()) {
            $data['resolution'] = $object->getResolution();
        }
        if (null !== $object->getRiskScore()) {
            $data['risk_score'] = $object->getRiskScore();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTicketId()) {
            $data['ticket_id'] = $object->getTicketId();
        }
        if (null !== $object->getTicketUrl()) {
            $data['ticket_url'] = $object->getTicketUrl();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getStartTime()) {
            $data['start_time'] = $object->getStartTime();
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        return $data;
    }
}