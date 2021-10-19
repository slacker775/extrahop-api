<?php

namespace ExtraHop\Api\Normalizer;

use ExtraHop\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('ExtraHop\\Api\\Model\\Error' => 'ExtraHop\\Api\\Normalizer\\ErrorNormalizer', 'ExtraHop\\Api\\Model\\ActivityMap' => 'ExtraHop\\Api\\Normalizer\\ActivityMapNormalizer', 'ExtraHop\\Api\\Model\\Appliance' => 'ExtraHop\\Api\\Normalizer\\ApplianceNormalizer', 'ExtraHop\\Api\\Model\\Application' => 'ExtraHop\\Api\\Normalizer\\ApplicationNormalizer', 'ExtraHop\\Api\\Model\\ApplicationActivity' => 'ExtraHop\\Api\\Normalizer\\ApplicationActivityNormalizer', 'ExtraHop\\Api\\Model\\ApplicationCriteria' => 'ExtraHop\\Api\\Normalizer\\ApplicationCriteriaNormalizer', 'ExtraHop\\Api\\Model\\ApplicationSource' => 'ExtraHop\\Api\\Normalizer\\ApplicationSourceNormalizer', 'ExtraHop\\Api\\Model\\Dashboard' => 'ExtraHop\\Api\\Normalizer\\DashboardNormalizer', 'ExtraHop\\Api\\Model\\Detection' => 'ExtraHop\\Api\\Normalizer\\DetectionNormalizer', 'ExtraHop\\Api\\Model\\DetectionFormat' => 'ExtraHop\\Api\\Normalizer\\DetectionFormatNormalizer', 'ExtraHop\\Api\\Model\\DetectionMitreTactic' => 'ExtraHop\\Api\\Normalizer\\DetectionMitreTacticNormalizer', 'ExtraHop\\Api\\Model\\DetectionMitreTechnique' => 'ExtraHop\\Api\\Normalizer\\DetectionMitreTechniqueNormalizer', 'ExtraHop\\Api\\Model\\DetectionParticipant' => 'ExtraHop\\Api\\Normalizer\\DetectionParticipantNormalizer', 'ExtraHop\\Api\\Model\\DetectionRulesHiding' => 'ExtraHop\\Api\\Normalizer\\DetectionRulesHidingNormalizer', 'ExtraHop\\Api\\Model\\DetectionSearch' => 'ExtraHop\\Api\\Normalizer\\DetectionSearchNormalizer', 'ExtraHop\\Api\\Model\\DetectionSearchFilter' => 'ExtraHop\\Api\\Normalizer\\DetectionSearchFilterNormalizer', 'ExtraHop\\Api\\Model\\DetectionSearchSort' => 'ExtraHop\\Api\\Normalizer\\DetectionSearchSortNormalizer', 'ExtraHop\\Api\\Model\\DetectionTicket' => 'ExtraHop\\Api\\Normalizer\\DetectionTicketNormalizer', 'ExtraHop\\Api\\Model\\Device' => 'ExtraHop\\Api\\Normalizer\\DeviceNormalizer', 'ExtraHop\\Api\\Model\\DeviceGroup' => 'ExtraHop\\Api\\Normalizer\\DeviceGroupNormalizer', 'ExtraHop\\Api\\Model\\DeviceSearch' => 'ExtraHop\\Api\\Normalizer\\DeviceSearchNormalizer', 'ExtraHop\\Api\\Model\\DeviceSearchFilter' => 'ExtraHop\\Api\\Normalizer\\DeviceSearchFilterNormalizer', 'ExtraHop\\Api\\Model\\DnsName' => 'ExtraHop\\Api\\Normalizer\\DnsNameNormalizer', 'ExtraHop\\Api\\Model\\DnsNameResponse' => 'ExtraHop\\Api\\Normalizer\\DnsNameResponseNormalizer', 'ExtraHop\\Api\\Model\\IpAddress' => 'ExtraHop\\Api\\Normalizer\\IpAddressNormalizer', 'ExtraHop\\Api\\Model\\IpAddressResponse' => 'ExtraHop\\Api\\Normalizer\\IpAddressResponseNormalizer', 'ExtraHop\\Api\\Model\\MetricRequest' => 'ExtraHop\\Api\\Normalizer\\MetricRequestNormalizer', 'ExtraHop\\Api\\Model\\MetricResponse' => 'ExtraHop\\Api\\Normalizer\\MetricResponseNormalizer', 'ExtraHop\\Api\\Model\\MetricSpec' => 'ExtraHop\\Api\\Normalizer\\MetricSpecNormalizer', 'ExtraHop\\Api\\Model\\MetricStats' => 'ExtraHop\\Api\\Normalizer\\MetricStatsNormalizer', 'ExtraHop\\Api\\Model\\Network' => 'ExtraHop\\Api\\Normalizer\\NetworkNormalizer', 'ExtraHop\\Api\\Model\\Software' => 'ExtraHop\\Api\\Normalizer\\SoftwareNormalizer', 'ExtraHop\\Api\\Model\\Tag' => 'ExtraHop\\Api\\Normalizer\\TagNormalizer', 'ExtraHop\\Api\\Model\\Trigger' => 'ExtraHop\\Api\\Normalizer\\TriggerNormalizer', 'ExtraHop\\Api\\Model\\TriggerHint' => 'ExtraHop\\Api\\Normalizer\\TriggerHintNormalizer', 'ExtraHop\\Api\\Model\\Vlan' => 'ExtraHop\\Api\\Normalizer\\VlanNormalizer', 'ExtraHop\\Api\\Model\\ApiV1ObservationsAssociatedipaddrsPostBody' => 'ExtraHop\\Api\\Normalizer\\ApiV1ObservationsAssociatedipaddrsPostBodyNormalizer', 'ExtraHop\\Api\\Model\\ApiV1ObservationsAssociatedipaddrsPostBodyObservations' => 'ExtraHop\\Api\\Normalizer\\ApiV1ObservationsAssociatedipaddrsPostBodyObservationsNormalizer', 'ExtraHop\\Api\\Model\\ApiV1TriggersIdDevicegroupsPostBody' => 'ExtraHop\\Api\\Normalizer\\ApiV1TriggersIdDevicegroupsPostBodyNormalizer', 'ExtraHop\\Api\\Model\\ApiV1TriggersIdDevicegroupsChildIdPostBody' => 'ExtraHop\\Api\\Normalizer\\ApiV1TriggersIdDevicegroupsChildIdPostBodyNormalizer', 'ExtraHop\\Api\\Model\\ApiV1TriggersIdDevicesPostBody' => 'ExtraHop\\Api\\Normalizer\\ApiV1TriggersIdDevicesPostBodyNormalizer', 'ExtraHop\\Api\\Model\\ApiV1WatchlistDevicesPostBody' => 'ExtraHop\\Api\\Normalizer\\ApiV1WatchlistDevicesPostBodyNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\ExtraHop\\Api\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}