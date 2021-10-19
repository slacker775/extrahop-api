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
class DeviceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ExtraHop\\Api\\Model\\Device';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ExtraHop\\Api\\Model\\Device';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ExtraHop\Api\Model\Device();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('activity', $data)) {
            $values = array();
            foreach ($data['activity'] as $value) {
                $values[] = $value;
            }
            $object->setActivity($values);
        }
        if (\array_key_exists('analysis', $data) && $data['analysis'] !== null) {
            $object->setAnalysis($data['analysis']);
        }
        elseif (\array_key_exists('analysis', $data) && $data['analysis'] === null) {
            $object->setAnalysis(null);
        }
        if (\array_key_exists('analysis_level', $data) && $data['analysis_level'] !== null) {
            $object->setAnalysisLevel($data['analysis_level']);
        }
        elseif (\array_key_exists('analysis_level', $data) && $data['analysis_level'] === null) {
            $object->setAnalysisLevel(null);
        }
        if (\array_key_exists('auto_role', $data) && $data['auto_role'] !== null) {
            $object->setAutoRole($data['auto_role']);
        }
        elseif (\array_key_exists('auto_role', $data) && $data['auto_role'] === null) {
            $object->setAutoRole(null);
        }
        if (\array_key_exists('cdp_name', $data) && $data['cdp_name'] !== null) {
            $object->setCdpName($data['cdp_name']);
        }
        elseif (\array_key_exists('cdp_name', $data) && $data['cdp_name'] === null) {
            $object->setCdpName(null);
        }
        if (\array_key_exists('cloud_account', $data) && $data['cloud_account'] !== null) {
            $object->setCloudAccount($data['cloud_account']);
        }
        elseif (\array_key_exists('cloud_account', $data) && $data['cloud_account'] === null) {
            $object->setCloudAccount(null);
        }
        if (\array_key_exists('cloud_instance_id', $data) && $data['cloud_instance_id'] !== null) {
            $object->setCloudInstanceId($data['cloud_instance_id']);
        }
        elseif (\array_key_exists('cloud_instance_id', $data) && $data['cloud_instance_id'] === null) {
            $object->setCloudInstanceId(null);
        }
        if (\array_key_exists('cloud_instance_name', $data) && $data['cloud_instance_name'] !== null) {
            $object->setCloudInstanceName($data['cloud_instance_name']);
        }
        elseif (\array_key_exists('cloud_instance_name', $data) && $data['cloud_instance_name'] === null) {
            $object->setCloudInstanceName(null);
        }
        if (\array_key_exists('cloud_instance_type', $data) && $data['cloud_instance_type'] !== null) {
            $object->setCloudInstanceType($data['cloud_instance_type']);
        }
        elseif (\array_key_exists('cloud_instance_type', $data) && $data['cloud_instance_type'] === null) {
            $object->setCloudInstanceType(null);
        }
        if (\array_key_exists('critical', $data) && $data['critical'] !== null) {
            $object->setCritical($data['critical']);
        }
        elseif (\array_key_exists('critical', $data) && $data['critical'] === null) {
            $object->setCritical(null);
        }
        if (\array_key_exists('custom_name', $data) && $data['custom_name'] !== null) {
            $object->setCustomName($data['custom_name']);
        }
        elseif (\array_key_exists('custom_name', $data) && $data['custom_name'] === null) {
            $object->setCustomName(null);
        }
        if (\array_key_exists('custom_type', $data) && $data['custom_type'] !== null) {
            $object->setCustomType($data['custom_type']);
        }
        elseif (\array_key_exists('custom_type', $data) && $data['custom_type'] === null) {
            $object->setCustomType(null);
        }
        if (\array_key_exists('default_name', $data) && $data['default_name'] !== null) {
            $object->setDefaultName($data['default_name']);
        }
        elseif (\array_key_exists('default_name', $data) && $data['default_name'] === null) {
            $object->setDefaultName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('device_class', $data) && $data['device_class'] !== null) {
            $object->setDeviceClass($data['device_class']);
        }
        elseif (\array_key_exists('device_class', $data) && $data['device_class'] === null) {
            $object->setDeviceClass(null);
        }
        if (\array_key_exists('dhcp_name', $data) && $data['dhcp_name'] !== null) {
            $object->setDhcpName($data['dhcp_name']);
        }
        elseif (\array_key_exists('dhcp_name', $data) && $data['dhcp_name'] === null) {
            $object->setDhcpName(null);
        }
        if (\array_key_exists('discover_time', $data)) {
            $object->setDiscoverTime($data['discover_time']);
        }
        if (\array_key_exists('discovery_id', $data)) {
            $object->setDiscoveryId($data['discovery_id']);
        }
        if (\array_key_exists('display_name', $data) && $data['display_name'] !== null) {
            $object->setDisplayName($data['display_name']);
        }
        elseif (\array_key_exists('display_name', $data) && $data['display_name'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('dns_name', $data) && $data['dns_name'] !== null) {
            $object->setDnsName($data['dns_name']);
        }
        elseif (\array_key_exists('dns_name', $data) && $data['dns_name'] === null) {
            $object->setDnsName(null);
        }
        if (\array_key_exists('extrahop_id', $data)) {
            $object->setExtrahopId($data['extrahop_id']);
        }
        if (\array_key_exists('ipaddr4', $data) && $data['ipaddr4'] !== null) {
            $object->setIpaddr4($data['ipaddr4']);
        }
        elseif (\array_key_exists('ipaddr4', $data) && $data['ipaddr4'] === null) {
            $object->setIpaddr4(null);
        }
        if (\array_key_exists('ipaddr6', $data) && $data['ipaddr6'] !== null) {
            $object->setIpaddr6($data['ipaddr6']);
        }
        elseif (\array_key_exists('ipaddr6', $data) && $data['ipaddr6'] === null) {
            $object->setIpaddr6(null);
        }
        if (\array_key_exists('is_l3', $data)) {
            $object->setIsL3($data['is_l3']);
        }
        if (\array_key_exists('last_seen_time', $data) && $data['last_seen_time'] !== null) {
            $object->setLastSeenTime($data['last_seen_time']);
        }
        elseif (\array_key_exists('last_seen_time', $data) && $data['last_seen_time'] === null) {
            $object->setLastSeenTime(null);
        }
        if (\array_key_exists('macaddr', $data) && $data['macaddr'] !== null) {
            $object->setMacaddr($data['macaddr']);
        }
        elseif (\array_key_exists('macaddr', $data) && $data['macaddr'] === null) {
            $object->setMacaddr(null);
        }
        if (\array_key_exists('mod_time', $data)) {
            $object->setModTime($data['mod_time']);
        }
        if (\array_key_exists('model', $data) && $data['model'] !== null) {
            $object->setModel($data['model']);
        }
        elseif (\array_key_exists('model', $data) && $data['model'] === null) {
            $object->setModel(null);
        }
        if (\array_key_exists('netbios_name', $data) && $data['netbios_name'] !== null) {
            $object->setNetbiosName($data['netbios_name']);
        }
        elseif (\array_key_exists('netbios_name', $data) && $data['netbios_name'] === null) {
            $object->setNetbiosName(null);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('on_watchlist', $data)) {
            $object->setOnWatchlist($data['on_watchlist']);
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
        }
        elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('role', $data) && $data['role'] !== null) {
            $object->setRole($data['role']);
        }
        elseif (\array_key_exists('role', $data) && $data['role'] === null) {
            $object->setRole(null);
        }
        if (\array_key_exists('subnet_id', $data) && $data['subnet_id'] !== null) {
            $object->setSubnetId($data['subnet_id']);
        }
        elseif (\array_key_exists('subnet_id', $data) && $data['subnet_id'] === null) {
            $object->setSubnetId(null);
        }
        if (\array_key_exists('user_mod_time', $data) && $data['user_mod_time'] !== null) {
            $object->setUserModTime($data['user_mod_time']);
        }
        elseif (\array_key_exists('user_mod_time', $data) && $data['user_mod_time'] === null) {
            $object->setUserModTime(null);
        }
        if (\array_key_exists('vendor', $data) && $data['vendor'] !== null) {
            $object->setVendor($data['vendor']);
        }
        elseif (\array_key_exists('vendor', $data) && $data['vendor'] === null) {
            $object->setVendor(null);
        }
        if (\array_key_exists('vlanid', $data) && $data['vlanid'] !== null) {
            $object->setVlanid($data['vlanid']);
        }
        elseif (\array_key_exists('vlanid', $data) && $data['vlanid'] === null) {
            $object->setVlanid(null);
        }
        if (\array_key_exists('vpc_id', $data) && $data['vpc_id'] !== null) {
            $object->setVpcId($data['vpc_id']);
        }
        elseif (\array_key_exists('vpc_id', $data) && $data['vpc_id'] === null) {
            $object->setVpcId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getActivity()) {
            $values = array();
            foreach ($object->getActivity() as $value) {
                $values[] = $value;
            }
            $data['activity'] = $values;
        }
        if (null !== $object->getAnalysis()) {
            $data['analysis'] = $object->getAnalysis();
        }
        if (null !== $object->getAnalysisLevel()) {
            $data['analysis_level'] = $object->getAnalysisLevel();
        }
        if (null !== $object->getAutoRole()) {
            $data['auto_role'] = $object->getAutoRole();
        }
        if (null !== $object->getCdpName()) {
            $data['cdp_name'] = $object->getCdpName();
        }
        if (null !== $object->getCloudAccount()) {
            $data['cloud_account'] = $object->getCloudAccount();
        }
        if (null !== $object->getCloudInstanceId()) {
            $data['cloud_instance_id'] = $object->getCloudInstanceId();
        }
        if (null !== $object->getCloudInstanceName()) {
            $data['cloud_instance_name'] = $object->getCloudInstanceName();
        }
        if (null !== $object->getCloudInstanceType()) {
            $data['cloud_instance_type'] = $object->getCloudInstanceType();
        }
        if (null !== $object->getCritical()) {
            $data['critical'] = $object->getCritical();
        }
        if (null !== $object->getCustomName()) {
            $data['custom_name'] = $object->getCustomName();
        }
        if (null !== $object->getCustomType()) {
            $data['custom_type'] = $object->getCustomType();
        }
        if (null !== $object->getDefaultName()) {
            $data['default_name'] = $object->getDefaultName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDeviceClass()) {
            $data['device_class'] = $object->getDeviceClass();
        }
        if (null !== $object->getDhcpName()) {
            $data['dhcp_name'] = $object->getDhcpName();
        }
        if (null !== $object->getDiscoverTime()) {
            $data['discover_time'] = $object->getDiscoverTime();
        }
        if (null !== $object->getDiscoveryId()) {
            $data['discovery_id'] = $object->getDiscoveryId();
        }
        if (null !== $object->getDisplayName()) {
            $data['display_name'] = $object->getDisplayName();
        }
        if (null !== $object->getDnsName()) {
            $data['dns_name'] = $object->getDnsName();
        }
        if (null !== $object->getExtrahopId()) {
            $data['extrahop_id'] = $object->getExtrahopId();
        }
        if (null !== $object->getIpaddr4()) {
            $data['ipaddr4'] = $object->getIpaddr4();
        }
        if (null !== $object->getIpaddr6()) {
            $data['ipaddr6'] = $object->getIpaddr6();
        }
        if (null !== $object->getIsL3()) {
            $data['is_l3'] = $object->getIsL3();
        }
        if (null !== $object->getLastSeenTime()) {
            $data['last_seen_time'] = $object->getLastSeenTime();
        }
        if (null !== $object->getMacaddr()) {
            $data['macaddr'] = $object->getMacaddr();
        }
        if (null !== $object->getModTime()) {
            $data['mod_time'] = $object->getModTime();
        }
        if (null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        if (null !== $object->getNetbiosName()) {
            $data['netbios_name'] = $object->getNetbiosName();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getOnWatchlist()) {
            $data['on_watchlist'] = $object->getOnWatchlist();
        }
        if (null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        if (null !== $object->getRole()) {
            $data['role'] = $object->getRole();
        }
        if (null !== $object->getSubnetId()) {
            $data['subnet_id'] = $object->getSubnetId();
        }
        if (null !== $object->getUserModTime()) {
            $data['user_mod_time'] = $object->getUserModTime();
        }
        if (null !== $object->getVendor()) {
            $data['vendor'] = $object->getVendor();
        }
        if (null !== $object->getVlanid()) {
            $data['vlanid'] = $object->getVlanid();
        }
        if (null !== $object->getVpcId()) {
            $data['vpc_id'] = $object->getVpcId();
        }
        return $data;
    }
}