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
class TriggerHintNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\TriggerHint';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\TriggerHint';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\TriggerHint();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('snaplen', $data) && $data['snaplen'] !== null) {
            $object->setSnaplen($data['snaplen']);
        }
        elseif (\array_key_exists('snaplen', $data) && $data['snaplen'] === null) {
            $object->setSnaplen(null);
        }
        if (\array_key_exists('payloadBytes', $data) && $data['payloadBytes'] !== null) {
            $object->setPayloadBytes($data['payloadBytes']);
        }
        elseif (\array_key_exists('payloadBytes', $data) && $data['payloadBytes'] === null) {
            $object->setPayloadBytes(null);
        }
        if (\array_key_exists('clipboardBytes', $data) && $data['clipboardBytes'] !== null) {
            $object->setClipboardBytes($data['clipboardBytes']);
        }
        elseif (\array_key_exists('clipboardBytes', $data) && $data['clipboardBytes'] === null) {
            $object->setClipboardBytes(null);
        }
        if (\array_key_exists('cycle', $data) && $data['cycle'] !== null) {
            $object->setCycle($data['cycle']);
        }
        elseif (\array_key_exists('cycle', $data) && $data['cycle'] === null) {
            $object->setCycle(null);
        }
        if (\array_key_exists('metricTypes', $data) && $data['metricTypes'] !== null) {
            $object->setMetricTypes($data['metricTypes']);
        }
        elseif (\array_key_exists('metricTypes', $data) && $data['metricTypes'] === null) {
            $object->setMetricTypes(null);
        }
        if (\array_key_exists('flowPayloadTurn', $data)) {
            $object->setFlowPayloadTurn($data['flowPayloadTurn']);
        }
        if (\array_key_exists('flowClientPortMin', $data) && $data['flowClientPortMin'] !== null) {
            $object->setFlowClientPortMin($data['flowClientPortMin']);
        }
        elseif (\array_key_exists('flowClientPortMin', $data) && $data['flowClientPortMin'] === null) {
            $object->setFlowClientPortMin(null);
        }
        if (\array_key_exists('flowClientPortMax', $data) && $data['flowClientPortMax'] !== null) {
            $object->setFlowClientPortMax($data['flowClientPortMax']);
        }
        elseif (\array_key_exists('flowClientPortMax', $data) && $data['flowClientPortMax'] === null) {
            $object->setFlowClientPortMax(null);
        }
        if (\array_key_exists('flowClientBytes', $data) && $data['flowClientBytes'] !== null) {
            $object->setFlowClientBytes($data['flowClientBytes']);
        }
        elseif (\array_key_exists('flowClientBytes', $data) && $data['flowClientBytes'] === null) {
            $object->setFlowClientBytes(null);
        }
        if (\array_key_exists('flowClientString', $data) && $data['flowClientString'] !== null) {
            $object->setFlowClientString($data['flowClientString']);
        }
        elseif (\array_key_exists('flowClientString', $data) && $data['flowClientString'] === null) {
            $object->setFlowClientString(null);
        }
        if (\array_key_exists('flowServerPortMin', $data) && $data['flowServerPortMin'] !== null) {
            $object->setFlowServerPortMin($data['flowServerPortMin']);
        }
        elseif (\array_key_exists('flowServerPortMin', $data) && $data['flowServerPortMin'] === null) {
            $object->setFlowServerPortMin(null);
        }
        if (\array_key_exists('flowServerPortMax', $data) && $data['flowServerPortMax'] !== null) {
            $object->setFlowServerPortMax($data['flowServerPortMax']);
        }
        elseif (\array_key_exists('flowServerPortMax', $data) && $data['flowServerPortMax'] === null) {
            $object->setFlowServerPortMax(null);
        }
        if (\array_key_exists('flowServerBytes', $data) && $data['flowServerBytes'] !== null) {
            $object->setFlowServerBytes($data['flowServerBytes']);
        }
        elseif (\array_key_exists('flowServerBytes', $data) && $data['flowServerBytes'] === null) {
            $object->setFlowServerBytes(null);
        }
        if (\array_key_exists('flowServerString', $data) && $data['flowServerString'] !== null) {
            $object->setFlowServerString($data['flowServerString']);
        }
        elseif (\array_key_exists('flowServerString', $data) && $data['flowServerString'] === null) {
            $object->setFlowServerString(null);
        }
        if (\array_key_exists('flowUdpAll', $data)) {
            $object->setFlowUdpAll($data['flowUdpAll']);
        }
        if (\array_key_exists('fireClassifyOnExpiration', $data)) {
            $object->setFireClassifyOnExpiration($data['fireClassifyOnExpiration']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSnaplen()) {
            $data['snaplen'] = $object->getSnaplen();
        }
        if (null !== $object->getPayloadBytes()) {
            $data['payloadBytes'] = $object->getPayloadBytes();
        }
        if (null !== $object->getClipboardBytes()) {
            $data['clipboardBytes'] = $object->getClipboardBytes();
        }
        if (null !== $object->getCycle()) {
            $data['cycle'] = $object->getCycle();
        }
        if (null !== $object->getMetricTypes()) {
            $data['metricTypes'] = $object->getMetricTypes();
        }
        if (null !== $object->getFlowPayloadTurn()) {
            $data['flowPayloadTurn'] = $object->getFlowPayloadTurn();
        }
        if (null !== $object->getFlowClientPortMin()) {
            $data['flowClientPortMin'] = $object->getFlowClientPortMin();
        }
        if (null !== $object->getFlowClientPortMax()) {
            $data['flowClientPortMax'] = $object->getFlowClientPortMax();
        }
        if (null !== $object->getFlowClientBytes()) {
            $data['flowClientBytes'] = $object->getFlowClientBytes();
        }
        if (null !== $object->getFlowClientString()) {
            $data['flowClientString'] = $object->getFlowClientString();
        }
        if (null !== $object->getFlowServerPortMin()) {
            $data['flowServerPortMin'] = $object->getFlowServerPortMin();
        }
        if (null !== $object->getFlowServerPortMax()) {
            $data['flowServerPortMax'] = $object->getFlowServerPortMax();
        }
        if (null !== $object->getFlowServerBytes()) {
            $data['flowServerBytes'] = $object->getFlowServerBytes();
        }
        if (null !== $object->getFlowServerString()) {
            $data['flowServerString'] = $object->getFlowServerString();
        }
        if (null !== $object->getFlowUdpAll()) {
            $data['flowUdpAll'] = $object->getFlowUdpAll();
        }
        if (null !== $object->getFireClassifyOnExpiration()) {
            $data['fireClassifyOnExpiration'] = $object->getFireClassifyOnExpiration();
        }
        return $data;
    }
}