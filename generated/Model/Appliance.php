<?php

namespace ExtraHop\Api\Model;

class Appliance
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
     * @var int|null
     */
    protected $addTime;
    /**
     * 
     *
     * @var bool
     */
    protected $advancedAnalysisCapacity;
    /**
     * 
     *
     * @var bool
     */
    protected $analysisLevelsManaged;
    /**
     * 
     *
     * @var string
     */
    protected $connectionType;
    /**
     * 
     *
     * @var bool
     */
    protected $dataAccess;
    /**
     * 
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @var string
     */
    protected $fingerprint;
    /**
     * 
     *
     * @var string
     */
    protected $firmwareVersion;
    /**
     * 
     *
     * @var string
     */
    protected $hostname;
    /**
     * 
     *
     * @var string
     */
    protected $licenseStatus;
    /**
     * 
     *
     * @var bool
     */
    protected $managedByLocal;
    /**
     * 
     *
     * @var bool
     */
    protected $managesLocal;
    /**
     * 
     *
     * @var string
     */
    protected $nickname;
    /**
     * 
     *
     * @var string
     */
    protected $platform;
    /**
     * 
     *
     * @var string
     */
    protected $statusMessage;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $syncTime;
    /**
     * 
     *
     * @var int
     */
    protected $totalCapacity;
    /**
     * 
     *
     * @var string
     */
    protected $uuid;
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
     * @return int|null
     */
    public function getAddTime() : ?int
    {
        return $this->addTime;
    }
    /**
     * 
     *
     * @param int|null $addTime
     *
     * @return self
     */
    public function setAddTime(?int $addTime) : self
    {
        $this->addTime = $addTime;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAdvancedAnalysisCapacity() : bool
    {
        return $this->advancedAnalysisCapacity;
    }
    /**
     * 
     *
     * @param bool $advancedAnalysisCapacity
     *
     * @return self
     */
    public function setAdvancedAnalysisCapacity(bool $advancedAnalysisCapacity) : self
    {
        $this->advancedAnalysisCapacity = $advancedAnalysisCapacity;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAnalysisLevelsManaged() : bool
    {
        return $this->analysisLevelsManaged;
    }
    /**
     * 
     *
     * @param bool $analysisLevelsManaged
     *
     * @return self
     */
    public function setAnalysisLevelsManaged(bool $analysisLevelsManaged) : self
    {
        $this->analysisLevelsManaged = $analysisLevelsManaged;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConnectionType() : string
    {
        return $this->connectionType;
    }
    /**
     * 
     *
     * @param string $connectionType
     *
     * @return self
     */
    public function setConnectionType(string $connectionType) : self
    {
        $this->connectionType = $connectionType;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDataAccess() : bool
    {
        return $this->dataAccess;
    }
    /**
     * 
     *
     * @param bool $dataAccess
     *
     * @return self
     */
    public function setDataAccess(bool $dataAccess) : self
    {
        $this->dataAccess = $dataAccess;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName) : self
    {
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFingerprint() : string
    {
        return $this->fingerprint;
    }
    /**
     * 
     *
     * @param string $fingerprint
     *
     * @return self
     */
    public function setFingerprint(string $fingerprint) : self
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirmwareVersion() : string
    {
        return $this->firmwareVersion;
    }
    /**
     * 
     *
     * @param string $firmwareVersion
     *
     * @return self
     */
    public function setFirmwareVersion(string $firmwareVersion) : self
    {
        $this->firmwareVersion = $firmwareVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHostname() : string
    {
        return $this->hostname;
    }
    /**
     * 
     *
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname) : self
    {
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLicenseStatus() : string
    {
        return $this->licenseStatus;
    }
    /**
     * 
     *
     * @param string $licenseStatus
     *
     * @return self
     */
    public function setLicenseStatus(string $licenseStatus) : self
    {
        $this->licenseStatus = $licenseStatus;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManagedByLocal() : bool
    {
        return $this->managedByLocal;
    }
    /**
     * 
     *
     * @param bool $managedByLocal
     *
     * @return self
     */
    public function setManagedByLocal(bool $managedByLocal) : self
    {
        $this->managedByLocal = $managedByLocal;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getManagesLocal() : bool
    {
        return $this->managesLocal;
    }
    /**
     * 
     *
     * @param bool $managesLocal
     *
     * @return self
     */
    public function setManagesLocal(bool $managesLocal) : self
    {
        $this->managesLocal = $managesLocal;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNickname() : string
    {
        return $this->nickname;
    }
    /**
     * 
     *
     * @param string $nickname
     *
     * @return self
     */
    public function setNickname(string $nickname) : self
    {
        $this->nickname = $nickname;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlatform() : string
    {
        return $this->platform;
    }
    /**
     * 
     *
     * @param string $platform
     *
     * @return self
     */
    public function setPlatform(string $platform) : self
    {
        $this->platform = $platform;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatusMessage() : string
    {
        return $this->statusMessage;
    }
    /**
     * 
     *
     * @param string $statusMessage
     *
     * @return self
     */
    public function setStatusMessage(string $statusMessage) : self
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSyncTime() : \DateTime
    {
        return $this->syncTime;
    }
    /**
     * 
     *
     * @param \DateTime $syncTime
     *
     * @return self
     */
    public function setSyncTime(\DateTime $syncTime) : self
    {
        $this->syncTime = $syncTime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalCapacity() : int
    {
        return $this->totalCapacity;
    }
    /**
     * 
     *
     * @param int $totalCapacity
     *
     * @return self
     */
    public function setTotalCapacity(int $totalCapacity) : self
    {
        $this->totalCapacity = $totalCapacity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUuid() : string
    {
        return $this->uuid;
    }
    /**
     * 
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid) : self
    {
        $this->uuid = $uuid;
        return $this;
    }
}