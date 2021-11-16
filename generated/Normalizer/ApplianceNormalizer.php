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
class ApplianceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\Appliance';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\Appliance';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\Appliance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('add_time', $data) && $data['add_time'] !== null) {
            $object->setAddTime($data['add_time']);
        }
        elseif (\array_key_exists('add_time', $data) && $data['add_time'] === null) {
            $object->setAddTime(null);
        }
        if (\array_key_exists('advanced_analysis_capacity', $data)) {
            $object->setAdvancedAnalysisCapacity($data['advanced_analysis_capacity']);
        }
        if (\array_key_exists('analysis_levels_managed', $data)) {
            $object->setAnalysisLevelsManaged($data['analysis_levels_managed']);
        }
        if (\array_key_exists('connection_type', $data)) {
            $object->setConnectionType($data['connection_type']);
        }
        if (\array_key_exists('data_access', $data)) {
            $object->setDataAccess($data['data_access']);
        }
        if (\array_key_exists('display_name', $data)) {
            $object->setDisplayName($data['display_name']);
        }
        if (\array_key_exists('fingerprint', $data)) {
            $object->setFingerprint($data['fingerprint']);
        }
        if (\array_key_exists('firmware_version', $data)) {
            $object->setFirmwareVersion($data['firmware_version']);
        }
        if (\array_key_exists('hostname', $data)) {
            $object->setHostname($data['hostname']);
        }
        if (\array_key_exists('license_status', $data)) {
            $object->setLicenseStatus($data['license_status']);
        }
        if (\array_key_exists('managed_by_local', $data)) {
            $object->setManagedByLocal($data['managed_by_local']);
        }
        if (\array_key_exists('manages_local', $data)) {
            $object->setManagesLocal($data['manages_local']);
        }
        if (\array_key_exists('nickname', $data)) {
            $object->setNickname($data['nickname']);
        }
        if (\array_key_exists('platform', $data)) {
            $object->setPlatform($data['platform']);
        }
        if (\array_key_exists('status_message', $data)) {
            $object->setStatusMessage($data['status_message']);
        }
        if (\array_key_exists('sync_time', $data)) {
            $object->setSyncTime(\DateTime::createFromFormat('U', $data['sync_time']));
        }
        if (\array_key_exists('total_capacity', $data)) {
            $object->setTotalCapacity($data['total_capacity']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getAddTime()) {
            $data['add_time'] = $object->getAddTime();
        }
        if (null !== $object->getAdvancedAnalysisCapacity()) {
            $data['advanced_analysis_capacity'] = $object->getAdvancedAnalysisCapacity();
        }
        if (null !== $object->getAnalysisLevelsManaged()) {
            $data['analysis_levels_managed'] = $object->getAnalysisLevelsManaged();
        }
        if (null !== $object->getConnectionType()) {
            $data['connection_type'] = $object->getConnectionType();
        }
        if (null !== $object->getDataAccess()) {
            $data['data_access'] = $object->getDataAccess();
        }
        if (null !== $object->getDisplayName()) {
            $data['display_name'] = $object->getDisplayName();
        }
        if (null !== $object->getFingerprint()) {
            $data['fingerprint'] = $object->getFingerprint();
        }
        if (null !== $object->getFirmwareVersion()) {
            $data['firmware_version'] = $object->getFirmwareVersion();
        }
        if (null !== $object->getHostname()) {
            $data['hostname'] = $object->getHostname();
        }
        if (null !== $object->getLicenseStatus()) {
            $data['license_status'] = $object->getLicenseStatus();
        }
        if (null !== $object->getManagedByLocal()) {
            $data['managed_by_local'] = $object->getManagedByLocal();
        }
        if (null !== $object->getManagesLocal()) {
            $data['manages_local'] = $object->getManagesLocal();
        }
        if (null !== $object->getNickname()) {
            $data['nickname'] = $object->getNickname();
        }
        if (null !== $object->getPlatform()) {
            $data['platform'] = $object->getPlatform();
        }
        if (null !== $object->getStatusMessage()) {
            $data['status_message'] = $object->getStatusMessage();
        }
        if (null !== $object->getSyncTime()) {
            $data['sync_time'] = $object->getSyncTime()->format('U');
        }
        if (null !== $object->getTotalCapacity()) {
            $data['total_capacity'] = $object->getTotalCapacity();
        }
        if (null !== $object->getUuid()) {
            $data['uuid'] = $object->getUuid();
        }
        return $data;
    }
}