<?php

namespace ExtraHop\Api;

class Client extends \ExtraHop\Api\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\ActivityMap[]|\Psr\Http\Message\ResponseInterface
     */
    public function getActivityMaps(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetActivityMaps(), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\ActivityMap|\Psr\Http\Message\ResponseInterface
     */
    public function getActivityMap(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetActivityMap($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Appliance[]|\Psr\Http\Message\ResponseInterface
     */
    public function getAppliances(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetAppliances(), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Appliance|\Psr\Http\Message\ResponseInterface
     */
    public function getAppliance(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetAppliance($id), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $active_from 
     *     @var int $active_until 
     *     @var int $limit 
     *     @var int $offset 
     *     @var string $search_type 
     *     @var string $value 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Application[]|\Psr\Http\Message\ResponseInterface
     */
    public function getApplications(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetApplications($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\Application $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createApplication(?\ExtraHop\Api\Model\Application $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\CreateApplication($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var bool $include_criteria 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Application|\Psr\Http\Message\ResponseInterface
     */
    public function getApplication(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetApplication($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param null|\ExtraHop\Api\Model\Application $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateApplication(int $id, ?\ExtraHop\Api\Model\Application $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateApplication($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\ApplicationActivity[]|\Psr\Http\Message\ResponseInterface
     */
    public function getApplicationActivity(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetApplicationActivity($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Dashboard[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDashboards(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDashboards(), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Dashboard|\Psr\Http\Message\ResponseInterface
     */
    public function getDashboard(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDashboard($id), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Detection[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDetections(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDetections($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of detection
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Detection|\Psr\Http\Message\ResponseInterface
     */
    public function getDetection(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDetection($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of detection
     * @param null|\ExtraHop\Api\Model\Detection $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateDetection(int $id, ?\ExtraHop\Api\Model\Detection $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateDetection($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of detection to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDetectionNotes(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\DeleteDetectionNotes($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of detection to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getDetectionNotes(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDetectionNotes($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of detection to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateDetectionNotes(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateDetectionNotes($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\DetectionFormat[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDetectionFormats(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDetectionFormats(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateDetectionFormat(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateDetectionFormat(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createDetectionFormat(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\CreateDetectionFormat(), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of detection format to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDetectionFormat(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\DeleteDetectionFormat($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\DetectionRulesHiding[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDetectionRulesHiding(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDetectionRulesHiding(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createDetectionHidingRule(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\CreateDetectionHidingRule(), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDetectionHidingRule(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\DeleteDetectionHidingRule($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateDetectionHidingRule(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateDetectionHidingRule($id), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\DetectionSearch $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Detection[]|\Psr\Http\Message\ResponseInterface
     */
    public function searchDetections(?\ExtraHop\Api\Model\DetectionSearch $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\SearchDetections($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\DetectionTicket $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateDetectionTicket(?\ExtraHop\Api\Model\DetectionTicket $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateDetectionTicket($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $since Only return device groups that were modified after this time, expressed in milliseconds since the epoch.
     *     @var string $name The Regex search value to filter the device groups by name.
     *     @var string $type Only return device groups of the specified type
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\DeviceGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDeviceGroups(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDeviceGroups($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var float $active_from 
     *     @var float $active_until 
     *     @var float $limit 
     *     @var float $offset 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Device[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDeviceGroupDevices(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDeviceGroupDevices($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $active_from 
     *     @var int $active_until 
     *     @var int $limit 
     *     @var int $offset 
     *     @var string $search_type 
     *     @var string $value 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Device[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDevices(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDevices($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\DeviceSearch $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Device[]|\Psr\Http\Message\ResponseInterface
     */
    public function searchDevices(?\ExtraHop\Api\Model\DeviceSearch $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\SearchDevices($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of device to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Device|\Psr\Http\Message\ResponseInterface
     */
    public function getDevice(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDevice($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of device to retrieve
     * @param null|\ExtraHop\Api\Model\Device $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateDevice(int $id, ?\ExtraHop\Api\Model\Device $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateDevice($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of device to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\DnsNameResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDeviceDnsNames(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDeviceDnsNames($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id ID of device to retrieve
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\IpAddressResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getDeviceIpAddrs(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDeviceIpAddrs($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var int $from Returns software that was observed on the device after the specified date, expressed in milliseconds since the epoch.
     *     @var int $until Returns software that was observed on the device before the specified date, expressed in milliseconds since the epoch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Software[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDeviceSoftware(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDeviceSoftware($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\MetricRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\MetricResponse[]|\Psr\Http\Message\ResponseInterface
     */
    public function getMetrics(?\ExtraHop\Api\Model\MetricRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetMetrics($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\MetricRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\MetricResponse[]|\Psr\Http\Message\ResponseInterface
     */
    public function getMetricTotals(?\ExtraHop\Api\Model\MetricRequest $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetMetricTotals($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Network[]|\Psr\Http\Message\ResponseInterface
     */
    public function getNetworks(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetNetworks(), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Network|\Psr\Http\Message\ResponseInterface
     */
    public function getNetwork(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetNetwork($id), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\ApiV1ObservationsAssociatedipaddrsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addDeviceIpAddrObservation(?\ExtraHop\Api\Model\ApiV1ObservationsAssociatedipaddrsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\AddDeviceIpAddrObservation($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $software_type 
     *     @var string $name 
     *     @var string $version 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Software[]|\Psr\Http\Message\ResponseInterface
     */
    public function getAllSoftware(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetAllSoftware($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Software|\Psr\Http\Message\ResponseInterface
     */
    public function getSoftware(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetSoftware($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Tag[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTags(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetTags(), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\Tag $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createTag(?\ExtraHop\Api\Model\Tag $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\CreateTag($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTag(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\DeleteTag($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTag(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetTag($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param null|\ExtraHop\Api\Model\Tag $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateTag(int $id, ?\ExtraHop\Api\Model\Tag $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateTag($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Device[]|\Psr\Http\Message\ResponseInterface
     */
    public function getDevicesWithTag(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetDevicesWithTag($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateDeviceTags(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateDeviceTags($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param int $deviceId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function unassignDeviceFromTag(int $id, int $deviceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UnassignDeviceFromTag($id, $deviceId), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param int $deviceId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function assignDeviceToTag(int $id, int $deviceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\AssignDeviceToTag($id, $deviceId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Trigger[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTriggers(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetTriggers(), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\Trigger $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createTrigger(?\ExtraHop\Api\Model\Trigger $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\CreateTrigger($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTrigger(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\DeleteTrigger($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Trigger|\Psr\Http\Message\ResponseInterface
     */
    public function getTrigger(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetTrigger($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param null|\ExtraHop\Api\Model\Trigger $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateTrigger(int $id, ?\ExtraHop\Api\Model\Trigger $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateTrigger($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTriggerDeviceGroups(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetTriggerDeviceGroups($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param null|\ExtraHop\Api\Model\ApiV1TriggersIdDevicegroupsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateTriggerDeviceGroups(int $id, ?\ExtraHop\Api\Model\ApiV1TriggersIdDevicegroupsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateTriggerDeviceGroups($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param int $childId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTriggerDeviceGroup(int $id, int $childId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\DeleteTriggerDeviceGroup($id, $childId), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param int $childId 
     * @param null|\ExtraHop\Api\Model\ApiV1TriggersIdDevicegroupsChildIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addTriggerDeviceGroup(int $id, int $childId, ?\ExtraHop\Api\Model\ApiV1TriggersIdDevicegroupsChildIdPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\AddTriggerDeviceGroup($id, $childId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTriggerDevices(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetTriggerDevices($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param null|\ExtraHop\Api\Model\ApiV1TriggersIdDevicesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateTriggerDevices(int $id, ?\ExtraHop\Api\Model\ApiV1TriggersIdDevicesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateTriggerDevices($id, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param int $childId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTriggerDevice(int $id, int $childId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\DeleteTriggerDevice($id, $childId), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param int $childId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addTriggerDevice(int $id, int $childId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\AddTriggerDevice($id, $childId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Device[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWatchlistDevices(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetWatchlistDevices(), $fetch);
    }
    /**
     * 
     *
     * @param null|\ExtraHop\Api\Model\ApiV1WatchlistDevicesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateWatchlistDevices(?\ExtraHop\Api\Model\ApiV1WatchlistDevicesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\UpdateWatchlistDevices($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWatchlistDevice(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\DeleteWatchlistDevice($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addWatchlistDevice(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\AddWatchlistDevice($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Vlan[]|\Psr\Http\Message\ResponseInterface
     */
    public function getVlans(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetVlans(), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ExtraHop\Api\Model\Vlan|\Psr\Http\Message\ResponseInterface
     */
    public function getVlan(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ExtraHop\Api\Endpoint\GetVlan($id), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://{customerId}.api.cloud.extrahop.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \ExtraHop\Api\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}