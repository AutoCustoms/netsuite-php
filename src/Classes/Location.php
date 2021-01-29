<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-01-29 05:23:50 PM UTC
 */

namespace NetSuite\Classes;

class Location extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $tranPrefix;

    /**
     * @var Address
     */
    protected Address $mainAddress;

    /**
     * @var Address
     */
    protected Address $returnAddress;

    /**
     * @var LocationType
     */
    protected LocationType $locationType;

    /**
     * @var LocationTimeZone
     */
    protected LocationTimeZone $timeZone;

    /**
     * @var float
     */
    protected float $latitude;

    /**
     * @var float
     */
    protected float $longitude;

    /**
     * @var RecordRef
     */
    protected RecordRef $logo;

    /**
     * @var bool
     */
    protected bool $useBins;

    /**
     * @var bool
     */
    protected bool $makeInventoryAvailable;

    /**
     * @var bool
     */
    protected bool $makeInventoryAvailableStore;

    /**
     * @var LocationGeolocationMethod
     */
    protected LocationGeolocationMethod $geolocationMethod;

    /**
     * @var LocationAutoAssignmentRegionSetting
     */
    protected LocationAutoAssignmentRegionSetting $autoAssignmentRegionSetting;

    /**
     * @var string
     */
    protected string $nextPickupCutOffTime;

    /**
     * @var int
     */
    protected int $bufferStock;

    /**
     * @var bool
     */
    protected bool $allowStorePickup;

    /**
     * @var float
     */
    protected float $storePickupBufferStock;

    /**
     * @var int
     */
    protected int $dailyShippingCapacity;

    /**
     * @var int
     */
    protected int $totalShippingCapacity;

    /**
     * @var LocationRegionsList
     */
    protected LocationRegionsList $includeLocationRegionsList;

    /**
     * @var LocationRegionsList
     */
    protected LocationRegionsList $excludeLocationRegionsList;

    /**
     * @var LocationBusinessHoursList
     */
    protected LocationBusinessHoursList $businessHoursList;

    /**
     * @var ClassTranslationList
     */
    protected ClassTranslationList $classTranslationList;

    /**
     * @var bool
     */
    protected bool $includeInControlTower;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "parent" => "RecordRef",
        "includeChildren" => "boolean",
        "subsidiaryList" => "RecordRefList",
        "isInactive" => "boolean",
        "tranPrefix" => "string",
        "mainAddress" => "Address",
        "returnAddress" => "Address",
        "locationType" => "LocationType",
        "timeZone" => "LocationTimeZone",
        "latitude" => "float",
        "longitude" => "float",
        "logo" => "RecordRef",
        "useBins" => "boolean",
        "makeInventoryAvailable" => "boolean",
        "makeInventoryAvailableStore" => "boolean",
        "geolocationMethod" => "LocationGeolocationMethod",
        "autoAssignmentRegionSetting" => "LocationAutoAssignmentRegionSetting",
        "nextPickupCutOffTime" => "dateTime",
        "bufferStock" => "integer",
        "allowStorePickup" => "boolean",
        "storePickupBufferStock" => "float",
        "dailyShippingCapacity" => "integer",
        "totalShippingCapacity" => "integer",
        "includeLocationRegionsList" => "LocationRegionsList",
        "excludeLocationRegionsList" => "LocationRegionsList",
        "businessHoursList" => "LocationBusinessHoursList",
        "classTranslationList" => "ClassTranslationList",
        "includeInControlTower" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return Location
     */
    public function setName(string $name): Location
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param RecordRef $parent
     * @return Location
     */
    public function setParent(RecordRef $parent): Location
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param bool $includeChildren
     * @return Location
     */
    public function setIncludeChildren(bool $includeChildren): Location
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return Location
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): Location
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param bool $isInactive
     * @return Location
     */
    public function setIsInactive(bool $isInactive): Location
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $tranPrefix
     * @return Location
     */
    public function setTranPrefix(string $tranPrefix): Location
    {
        $this->tranPrefix = $tranPrefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranPrefix(): string
    {
        return $this->tranPrefix;
    }

    /**
     * @param Address $mainAddress
     * @return Location
     */
    public function setMainAddress(Address $mainAddress): Location
    {
        $this->mainAddress = $mainAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getMainAddress(): Address
    {
        return $this->mainAddress;
    }

    /**
     * @param Address $returnAddress
     * @return Location
     */
    public function setReturnAddress(Address $returnAddress): Location
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getReturnAddress(): Address
    {
        return $this->returnAddress;
    }

    /**
     * @param LocationType $locationType
     * @return Location
     */
    public function setLocationType(LocationType $locationType): Location
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * @return LocationType
     */
    public function getLocationType(): LocationType
    {
        return $this->locationType;
    }

    /**
     * @param LocationTimeZone $timeZone
     * @return Location
     */
    public function setTimeZone(LocationTimeZone $timeZone): Location
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return LocationTimeZone
     */
    public function getTimeZone(): LocationTimeZone
    {
        return $this->timeZone;
    }

    /**
     * @param float $latitude
     * @return Location
     */
    public function setLatitude(float $latitude): Location
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $longitude
     * @return Location
     */
    public function setLongitude(float $longitude): Location
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param RecordRef $logo
     * @return Location
     */
    public function setLogo(RecordRef $logo): Location
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLogo(): RecordRef
    {
        return $this->logo;
    }

    /**
     * @param bool $useBins
     * @return Location
     */
    public function setUseBins(bool $useBins): Location
    {
        $this->useBins = $useBins;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseBins(): bool
    {
        return $this->useBins;
    }

    /**
     * @param bool $makeInventoryAvailable
     * @return Location
     */
    public function setMakeInventoryAvailable(bool $makeInventoryAvailable): Location
    {
        $this->makeInventoryAvailable = $makeInventoryAvailable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMakeInventoryAvailable(): bool
    {
        return $this->makeInventoryAvailable;
    }

    /**
     * @param bool $makeInventoryAvailableStore
     * @return Location
     */
    public function setMakeInventoryAvailableStore(bool $makeInventoryAvailableStore): Location
    {
        $this->makeInventoryAvailableStore = $makeInventoryAvailableStore;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMakeInventoryAvailableStore(): bool
    {
        return $this->makeInventoryAvailableStore;
    }

    /**
     * @param LocationGeolocationMethod $geolocationMethod
     * @return Location
     */
    public function setGeolocationMethod(LocationGeolocationMethod $geolocationMethod): Location
    {
        $this->geolocationMethod = $geolocationMethod;
        return $this;
    }

    /**
     * @return LocationGeolocationMethod
     */
    public function getGeolocationMethod(): LocationGeolocationMethod
    {
        return $this->geolocationMethod;
    }

    /**
     * @param LocationAutoAssignmentRegionSetting $autoAssignmentRegionSetting
     * @return Location
     */
    public function setAutoAssignmentRegionSetting(LocationAutoAssignmentRegionSetting $autoAssignmentRegionSetting): Location
    {
        $this->autoAssignmentRegionSetting = $autoAssignmentRegionSetting;
        return $this;
    }

    /**
     * @return LocationAutoAssignmentRegionSetting
     */
    public function getAutoAssignmentRegionSetting(): LocationAutoAssignmentRegionSetting
    {
        return $this->autoAssignmentRegionSetting;
    }

    /**
     * @param string $nextPickupCutOffTime
     * @return Location
     */
    public function setNextPickupCutOffTime(string $nextPickupCutOffTime): Location
    {
        $this->nextPickupCutOffTime = $nextPickupCutOffTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextPickupCutOffTime(): string
    {
        return $this->nextPickupCutOffTime;
    }

    /**
     * @param int $bufferStock
     * @return Location
     */
    public function setBufferStock(int $bufferStock): Location
    {
        $this->bufferStock = $bufferStock;
        return $this;
    }

    /**
     * @return int
     */
    public function getBufferStock(): int
    {
        return $this->bufferStock;
    }

    /**
     * @param bool $allowStorePickup
     * @return Location
     */
    public function setAllowStorePickup(bool $allowStorePickup): Location
    {
        $this->allowStorePickup = $allowStorePickup;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowStorePickup(): bool
    {
        return $this->allowStorePickup;
    }

    /**
     * @param float $storePickupBufferStock
     * @return Location
     */
    public function setStorePickupBufferStock(float $storePickupBufferStock): Location
    {
        $this->storePickupBufferStock = $storePickupBufferStock;
        return $this;
    }

    /**
     * @return float
     */
    public function getStorePickupBufferStock(): float
    {
        return $this->storePickupBufferStock;
    }

    /**
     * @param int $dailyShippingCapacity
     * @return Location
     */
    public function setDailyShippingCapacity(int $dailyShippingCapacity): Location
    {
        $this->dailyShippingCapacity = $dailyShippingCapacity;
        return $this;
    }

    /**
     * @return int
     */
    public function getDailyShippingCapacity(): int
    {
        return $this->dailyShippingCapacity;
    }

    /**
     * @param int $totalShippingCapacity
     * @return Location
     */
    public function setTotalShippingCapacity(int $totalShippingCapacity): Location
    {
        $this->totalShippingCapacity = $totalShippingCapacity;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalShippingCapacity(): int
    {
        return $this->totalShippingCapacity;
    }

    /**
     * @param LocationRegionsList $includeLocationRegionsList
     * @return Location
     */
    public function setIncludeLocationRegionsList(LocationRegionsList $includeLocationRegionsList): Location
    {
        $this->includeLocationRegionsList = $includeLocationRegionsList;
        return $this;
    }

    /**
     * @return LocationRegionsList
     */
    public function getIncludeLocationRegionsList(): LocationRegionsList
    {
        return $this->includeLocationRegionsList;
    }

    /**
     * @param LocationRegionsList $excludeLocationRegionsList
     * @return Location
     */
    public function setExcludeLocationRegionsList(LocationRegionsList $excludeLocationRegionsList): Location
    {
        $this->excludeLocationRegionsList = $excludeLocationRegionsList;
        return $this;
    }

    /**
     * @return LocationRegionsList
     */
    public function getExcludeLocationRegionsList(): LocationRegionsList
    {
        return $this->excludeLocationRegionsList;
    }

    /**
     * @param LocationBusinessHoursList $businessHoursList
     * @return Location
     */
    public function setBusinessHoursList(LocationBusinessHoursList $businessHoursList): Location
    {
        $this->businessHoursList = $businessHoursList;
        return $this;
    }

    /**
     * @return LocationBusinessHoursList
     */
    public function getBusinessHoursList(): LocationBusinessHoursList
    {
        return $this->businessHoursList;
    }

    /**
     * @param ClassTranslationList $classTranslationList
     * @return Location
     */
    public function setClassTranslationList(ClassTranslationList $classTranslationList): Location
    {
        $this->classTranslationList = $classTranslationList;
        return $this;
    }

    /**
     * @return ClassTranslationList
     */
    public function getClassTranslationList(): ClassTranslationList
    {
        return $this->classTranslationList;
    }

    /**
     * @param bool $includeInControlTower
     * @return Location
     */
    public function setIncludeInControlTower(bool $includeInControlTower): Location
    {
        $this->includeInControlTower = $includeInControlTower;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeInControlTower(): bool
    {
        return $this->includeInControlTower;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Location
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Location
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return Location
     */
    public function setInternalId(string $internalId): Location
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return Location
     */
    public function setExternalId(string $externalId): Location
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
