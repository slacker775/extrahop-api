<?php

namespace ExtraHop\Api\Model;

class Device
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string[]
     */
    protected $activity;
    /**
     * 
     *
     * @var string|null
     */
    protected $analysis;
    /**
     * 
     *
     * @var int|null
     */
    protected $analysisLevel;
    /**
     * 
     *
     * @var string|null
     */
    protected $autoRole;
    /**
     * 
     *
     * @var string|null
     */
    protected $cdpName;
    /**
     * 
     *
     * @var string|null
     */
    protected $cloudAccount;
    /**
     * 
     *
     * @var string|null
     */
    protected $cloudInstanceId;
    /**
     * 
     *
     * @var string|null
     */
    protected $cloudInstanceName;
    /**
     * 
     *
     * @var string|null
     */
    protected $cloudInstanceType;
    /**
     * 
     *
     * @var bool|null
     */
    protected $critical;
    /**
     * 
     *
     * @var string|null
     */
    protected $customName;
    /**
     * 
     *
     * @var string|null
     */
    protected $customType;
    /**
     * 
     *
     * @var string|null
     */
    protected $defaultName;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $deviceClass;
    /**
     * 
     *
     * @var string|null
     */
    protected $dhcpName;
    /**
     * 
     *
     * @var int
     */
    protected $discoverTime;
    /**
     * 
     *
     * @var string
     */
    protected $discoveryId;
    /**
     * 
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * 
     *
     * @var string|null
     */
    protected $dnsName;
    /**
     * 
     *
     * @var string
     */
    protected $extrahopId;
    /**
     * 
     *
     * @var string|null
     */
    protected $ipaddr4;
    /**
     * 
     *
     * @var string|null
     */
    protected $ipaddr6;
    /**
     * 
     *
     * @var bool
     */
    protected $isL3;
    /**
     * 
     *
     * @var int|null
     */
    protected $lastSeenTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $macaddr;
    /**
     * 
     *
     * @var int
     */
    protected $modTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $model;
    /**
     * 
     *
     * @var string|null
     */
    protected $netbiosName;
    /**
     * 
     *
     * @var int
     */
    protected $nodeId;
    /**
     * 
     *
     * @var bool
     */
    protected $onWatchlist;
    /**
     * 
     *
     * @var int|null
     */
    protected $parentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $role;
    /**
     * 
     *
     * @var string|null
     */
    protected $subnetId;
    /**
     * 
     *
     * @var int|null
     */
    protected $userModTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $vendor;
    /**
     * 
     *
     * @var int|null
     */
    protected $vlanid;
    /**
     * 
     *
     * @var string|null
     */
    protected $vpcId;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getActivity() : array
    {
        return $this->activity;
    }
    /**
     * 
     *
     * @param string[] $activity
     *
     * @return self
     */
    public function setActivity(array $activity) : self
    {
        $this->activity = $activity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAnalysis() : ?string
    {
        return $this->analysis;
    }
    /**
     * 
     *
     * @param string|null $analysis
     *
     * @return self
     */
    public function setAnalysis(?string $analysis) : self
    {
        $this->analysis = $analysis;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getAnalysisLevel() : ?int
    {
        return $this->analysisLevel;
    }
    /**
     * 
     *
     * @param int|null $analysisLevel
     *
     * @return self
     */
    public function setAnalysisLevel(?int $analysisLevel) : self
    {
        $this->analysisLevel = $analysisLevel;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAutoRole() : ?string
    {
        return $this->autoRole;
    }
    /**
     * 
     *
     * @param string|null $autoRole
     *
     * @return self
     */
    public function setAutoRole(?string $autoRole) : self
    {
        $this->autoRole = $autoRole;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCdpName() : ?string
    {
        return $this->cdpName;
    }
    /**
     * 
     *
     * @param string|null $cdpName
     *
     * @return self
     */
    public function setCdpName(?string $cdpName) : self
    {
        $this->cdpName = $cdpName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCloudAccount() : ?string
    {
        return $this->cloudAccount;
    }
    /**
     * 
     *
     * @param string|null $cloudAccount
     *
     * @return self
     */
    public function setCloudAccount(?string $cloudAccount) : self
    {
        $this->cloudAccount = $cloudAccount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCloudInstanceId() : ?string
    {
        return $this->cloudInstanceId;
    }
    /**
     * 
     *
     * @param string|null $cloudInstanceId
     *
     * @return self
     */
    public function setCloudInstanceId(?string $cloudInstanceId) : self
    {
        $this->cloudInstanceId = $cloudInstanceId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCloudInstanceName() : ?string
    {
        return $this->cloudInstanceName;
    }
    /**
     * 
     *
     * @param string|null $cloudInstanceName
     *
     * @return self
     */
    public function setCloudInstanceName(?string $cloudInstanceName) : self
    {
        $this->cloudInstanceName = $cloudInstanceName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCloudInstanceType() : ?string
    {
        return $this->cloudInstanceType;
    }
    /**
     * 
     *
     * @param string|null $cloudInstanceType
     *
     * @return self
     */
    public function setCloudInstanceType(?string $cloudInstanceType) : self
    {
        $this->cloudInstanceType = $cloudInstanceType;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getCritical() : ?bool
    {
        return $this->critical;
    }
    /**
     * 
     *
     * @param bool|null $critical
     *
     * @return self
     */
    public function setCritical(?bool $critical) : self
    {
        $this->critical = $critical;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomName() : ?string
    {
        return $this->customName;
    }
    /**
     * 
     *
     * @param string|null $customName
     *
     * @return self
     */
    public function setCustomName(?string $customName) : self
    {
        $this->customName = $customName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomType() : ?string
    {
        return $this->customType;
    }
    /**
     * 
     *
     * @param string|null $customType
     *
     * @return self
     */
    public function setCustomType(?string $customType) : self
    {
        $this->customType = $customType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDefaultName() : ?string
    {
        return $this->defaultName;
    }
    /**
     * 
     *
     * @param string|null $defaultName
     *
     * @return self
     */
    public function setDefaultName(?string $defaultName) : self
    {
        $this->defaultName = $defaultName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeviceClass() : ?string
    {
        return $this->deviceClass;
    }
    /**
     * 
     *
     * @param string|null $deviceClass
     *
     * @return self
     */
    public function setDeviceClass(?string $deviceClass) : self
    {
        $this->deviceClass = $deviceClass;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDhcpName() : ?string
    {
        return $this->dhcpName;
    }
    /**
     * 
     *
     * @param string|null $dhcpName
     *
     * @return self
     */
    public function setDhcpName(?string $dhcpName) : self
    {
        $this->dhcpName = $dhcpName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDiscoverTime() : int
    {
        return $this->discoverTime;
    }
    /**
     * 
     *
     * @param int $discoverTime
     *
     * @return self
     */
    public function setDiscoverTime(int $discoverTime) : self
    {
        $this->discoverTime = $discoverTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDiscoveryId() : string
    {
        return $this->discoveryId;
    }
    /**
     * 
     *
     * @param string $discoveryId
     *
     * @return self
     */
    public function setDiscoveryId(string $discoveryId) : self
    {
        $this->discoveryId = $discoveryId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDnsName() : ?string
    {
        return $this->dnsName;
    }
    /**
     * 
     *
     * @param string|null $dnsName
     *
     * @return self
     */
    public function setDnsName(?string $dnsName) : self
    {
        $this->dnsName = $dnsName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExtrahopId() : string
    {
        return $this->extrahopId;
    }
    /**
     * 
     *
     * @param string $extrahopId
     *
     * @return self
     */
    public function setExtrahopId(string $extrahopId) : self
    {
        $this->extrahopId = $extrahopId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIpaddr4() : ?string
    {
        return $this->ipaddr4;
    }
    /**
     * 
     *
     * @param string|null $ipaddr4
     *
     * @return self
     */
    public function setIpaddr4(?string $ipaddr4) : self
    {
        $this->ipaddr4 = $ipaddr4;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIpaddr6() : ?string
    {
        return $this->ipaddr6;
    }
    /**
     * 
     *
     * @param string|null $ipaddr6
     *
     * @return self
     */
    public function setIpaddr6(?string $ipaddr6) : self
    {
        $this->ipaddr6 = $ipaddr6;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsL3() : bool
    {
        return $this->isL3;
    }
    /**
     * 
     *
     * @param bool $isL3
     *
     * @return self
     */
    public function setIsL3(bool $isL3) : self
    {
        $this->isL3 = $isL3;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLastSeenTime() : ?int
    {
        return $this->lastSeenTime;
    }
    /**
     * 
     *
     * @param int|null $lastSeenTime
     *
     * @return self
     */
    public function setLastSeenTime(?int $lastSeenTime) : self
    {
        $this->lastSeenTime = $lastSeenTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMacaddr() : ?string
    {
        return $this->macaddr;
    }
    /**
     * 
     *
     * @param string|null $macaddr
     *
     * @return self
     */
    public function setMacaddr(?string $macaddr) : self
    {
        $this->macaddr = $macaddr;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getModTime() : int
    {
        return $this->modTime;
    }
    /**
     * 
     *
     * @param int $modTime
     *
     * @return self
     */
    public function setModTime(int $modTime) : self
    {
        $this->modTime = $modTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getModel() : ?string
    {
        return $this->model;
    }
    /**
     * 
     *
     * @param string|null $model
     *
     * @return self
     */
    public function setModel(?string $model) : self
    {
        $this->model = $model;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNetbiosName() : ?string
    {
        return $this->netbiosName;
    }
    /**
     * 
     *
     * @param string|null $netbiosName
     *
     * @return self
     */
    public function setNetbiosName(?string $netbiosName) : self
    {
        $this->netbiosName = $netbiosName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNodeId() : int
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param int $nodeId
     *
     * @return self
     */
    public function setNodeId(int $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOnWatchlist() : bool
    {
        return $this->onWatchlist;
    }
    /**
     * 
     *
     * @param bool $onWatchlist
     *
     * @return self
     */
    public function setOnWatchlist(bool $onWatchlist) : self
    {
        $this->onWatchlist = $onWatchlist;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getParentId() : ?int
    {
        return $this->parentId;
    }
    /**
     * 
     *
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId) : self
    {
        $this->parentId = $parentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRole() : ?string
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param string|null $role
     *
     * @return self
     */
    public function setRole(?string $role) : self
    {
        $this->role = $role;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubnetId() : ?string
    {
        return $this->subnetId;
    }
    /**
     * 
     *
     * @param string|null $subnetId
     *
     * @return self
     */
    public function setSubnetId(?string $subnetId) : self
    {
        $this->subnetId = $subnetId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUserModTime() : ?int
    {
        return $this->userModTime;
    }
    /**
     * 
     *
     * @param int|null $userModTime
     *
     * @return self
     */
    public function setUserModTime(?int $userModTime) : self
    {
        $this->userModTime = $userModTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVendor() : ?string
    {
        return $this->vendor;
    }
    /**
     * 
     *
     * @param string|null $vendor
     *
     * @return self
     */
    public function setVendor(?string $vendor) : self
    {
        $this->vendor = $vendor;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVlanid() : ?int
    {
        return $this->vlanid;
    }
    /**
     * 
     *
     * @param int|null $vlanid
     *
     * @return self
     */
    public function setVlanid(?int $vlanid) : self
    {
        $this->vlanid = $vlanid;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVpcId() : ?string
    {
        return $this->vpcId;
    }
    /**
     * 
     *
     * @param string|null $vpcId
     *
     * @return self
     */
    public function setVpcId(?string $vpcId) : self
    {
        $this->vpcId = $vpcId;
        return $this;
    }
}