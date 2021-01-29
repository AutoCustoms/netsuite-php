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

class LocationSearchRowBasic extends SearchRowBasic {
    protected $address1;
    protected $address2;
    protected $address3;
    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $allowStorePickup;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $autoAssignmentRegionSetting;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $bufferStock;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $city;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $dailyShippingCapacity;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endTime;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $geolocationMethod;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isFriday;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isIncludeInCt;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isMonday;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isOffice;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSaturday;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSunday;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isThursday;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isTuesday;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isWednesday;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $latitude;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $locationType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $longitude;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $makeInventoryAvailable;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $makeInventoryAvailableStore;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $nameNoHierarchy;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $nextPickupCutOffTime;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phone;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $sameDayPickupCutOffTime;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startTime;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $state;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $storePickupBufferStock;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $timeZone;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $totalShippingCapacity;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $tranPrefix;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $usesBins;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $zip;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "allowStorePickup" => "SearchColumnBooleanField[]",
        "autoAssignmentRegionSetting" => "SearchColumnEnumSelectField[]",
        "bufferStock" => "SearchColumnLongField[]",
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "dailyShippingCapacity" => "SearchColumnLongField[]",
        "endTime" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "geolocationMethod" => "SearchColumnEnumSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isFriday" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isIncludeInCt" => "SearchColumnBooleanField[]",
        "isMonday" => "SearchColumnBooleanField[]",
        "isOffice" => "SearchColumnBooleanField[]",
        "isSaturday" => "SearchColumnBooleanField[]",
        "isSunday" => "SearchColumnBooleanField[]",
        "isThursday" => "SearchColumnBooleanField[]",
        "isTuesday" => "SearchColumnBooleanField[]",
        "isWednesday" => "SearchColumnBooleanField[]",
        "latitude" => "SearchColumnDoubleField[]",
        "locationType" => "SearchColumnEnumSelectField[]",
        "longitude" => "SearchColumnDoubleField[]",
        "makeInventoryAvailable" => "SearchColumnBooleanField[]",
        "makeInventoryAvailableStore" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "nameNoHierarchy" => "SearchColumnStringField[]",
        "nextPickupCutOffTime" => "SearchColumnDateField[]",
        "phone" => "SearchColumnStringField[]",
        "sameDayPickupCutOffTime" => "SearchColumnDateField[]",
        "startTime" => "SearchColumnDateField[]",
        "state" => "SearchColumnStringField[]",
        "storePickupBufferStock" => "SearchColumnDoubleField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "timeZone" => "SearchColumnEnumSelectField[]",
        "totalShippingCapacity" => "SearchColumnLongField[]",
        "tranPrefix" => "SearchColumnStringField[]",
        "usesBins" => "SearchColumnBooleanField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnBooleanField[] $allowStorePickup
     * @return LocationSearchRowBasic
     */
    public function setAllowStorePickup(SearchColumnBooleanField $allowStorePickup): LocationSearchRowBasic
    {
        $this->allowStorePickup[] = $allowStorePickup;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowStorePickup(): array
    {
        return $this->allowStorePickup;
    }

    /**
     * @param SearchColumnEnumSelectField[] $autoAssignmentRegionSetting
     * @return LocationSearchRowBasic
     */
    public function setAutoAssignmentRegionSetting(SearchColumnEnumSelectField $autoAssignmentRegionSetting): LocationSearchRowBasic
    {
        $this->autoAssignmentRegionSetting[] = $autoAssignmentRegionSetting;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getAutoAssignmentRegionSetting(): array
    {
        return $this->autoAssignmentRegionSetting;
    }

    /**
     * @param SearchColumnLongField[] $bufferStock
     * @return LocationSearchRowBasic
     */
    public function setBufferStock(SearchColumnLongField $bufferStock): LocationSearchRowBasic
    {
        $this->bufferStock[] = $bufferStock;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getBufferStock(): array
    {
        return $this->bufferStock;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return LocationSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): LocationSearchRowBasic
    {
        $this->city[] = $city;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCity(): array
    {
        return $this->city;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return LocationSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): LocationSearchRowBasic
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountry(): array
    {
        return $this->country;
    }

    /**
     * @param SearchColumnLongField[] $dailyShippingCapacity
     * @return LocationSearchRowBasic
     */
    public function setDailyShippingCapacity(SearchColumnLongField $dailyShippingCapacity): LocationSearchRowBasic
    {
        $this->dailyShippingCapacity[] = $dailyShippingCapacity;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDailyShippingCapacity(): array
    {
        return $this->dailyShippingCapacity;
    }

    /**
     * @param SearchColumnDateField[] $endTime
     * @return LocationSearchRowBasic
     */
    public function setEndTime(SearchColumnDateField $endTime): LocationSearchRowBasic
    {
        $this->endTime[] = $endTime;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndTime(): array
    {
        return $this->endTime;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return LocationSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): LocationSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnEnumSelectField[] $geolocationMethod
     * @return LocationSearchRowBasic
     */
    public function setGeolocationMethod(SearchColumnEnumSelectField $geolocationMethod): LocationSearchRowBasic
    {
        $this->geolocationMethod[] = $geolocationMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGeolocationMethod(): array
    {
        return $this->geolocationMethod;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return LocationSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): LocationSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnBooleanField[] $isFriday
     * @return LocationSearchRowBasic
     */
    public function setIsFriday(SearchColumnBooleanField $isFriday): LocationSearchRowBasic
    {
        $this->isFriday[] = $isFriday;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsFriday(): array
    {
        return $this->isFriday;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return LocationSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): LocationSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isIncludeInCt
     * @return LocationSearchRowBasic
     */
    public function setIsIncludeInCt(SearchColumnBooleanField $isIncludeInCt): LocationSearchRowBasic
    {
        $this->isIncludeInCt[] = $isIncludeInCt;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsIncludeInCt(): array
    {
        return $this->isIncludeInCt;
    }

    /**
     * @param SearchColumnBooleanField[] $isMonday
     * @return LocationSearchRowBasic
     */
    public function setIsMonday(SearchColumnBooleanField $isMonday): LocationSearchRowBasic
    {
        $this->isMonday[] = $isMonday;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsMonday(): array
    {
        return $this->isMonday;
    }

    /**
     * @param SearchColumnBooleanField[] $isOffice
     * @return LocationSearchRowBasic
     */
    public function setIsOffice(SearchColumnBooleanField $isOffice): LocationSearchRowBasic
    {
        $this->isOffice[] = $isOffice;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOffice(): array
    {
        return $this->isOffice;
    }

    /**
     * @param SearchColumnBooleanField[] $isSaturday
     * @return LocationSearchRowBasic
     */
    public function setIsSaturday(SearchColumnBooleanField $isSaturday): LocationSearchRowBasic
    {
        $this->isSaturday[] = $isSaturday;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSaturday(): array
    {
        return $this->isSaturday;
    }

    /**
     * @param SearchColumnBooleanField[] $isSunday
     * @return LocationSearchRowBasic
     */
    public function setIsSunday(SearchColumnBooleanField $isSunday): LocationSearchRowBasic
    {
        $this->isSunday[] = $isSunday;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSunday(): array
    {
        return $this->isSunday;
    }

    /**
     * @param SearchColumnBooleanField[] $isThursday
     * @return LocationSearchRowBasic
     */
    public function setIsThursday(SearchColumnBooleanField $isThursday): LocationSearchRowBasic
    {
        $this->isThursday[] = $isThursday;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsThursday(): array
    {
        return $this->isThursday;
    }

    /**
     * @param SearchColumnBooleanField[] $isTuesday
     * @return LocationSearchRowBasic
     */
    public function setIsTuesday(SearchColumnBooleanField $isTuesday): LocationSearchRowBasic
    {
        $this->isTuesday[] = $isTuesday;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTuesday(): array
    {
        return $this->isTuesday;
    }

    /**
     * @param SearchColumnBooleanField[] $isWednesday
     * @return LocationSearchRowBasic
     */
    public function setIsWednesday(SearchColumnBooleanField $isWednesday): LocationSearchRowBasic
    {
        $this->isWednesday[] = $isWednesday;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsWednesday(): array
    {
        return $this->isWednesday;
    }

    /**
     * @param SearchColumnDoubleField[] $latitude
     * @return LocationSearchRowBasic
     */
    public function setLatitude(SearchColumnDoubleField $latitude): LocationSearchRowBasic
    {
        $this->latitude[] = $latitude;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLatitude(): array
    {
        return $this->latitude;
    }

    /**
     * @param SearchColumnEnumSelectField[] $locationType
     * @return LocationSearchRowBasic
     */
    public function setLocationType(SearchColumnEnumSelectField $locationType): LocationSearchRowBasic
    {
        $this->locationType[] = $locationType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLocationType(): array
    {
        return $this->locationType;
    }

    /**
     * @param SearchColumnDoubleField[] $longitude
     * @return LocationSearchRowBasic
     */
    public function setLongitude(SearchColumnDoubleField $longitude): LocationSearchRowBasic
    {
        $this->longitude[] = $longitude;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLongitude(): array
    {
        return $this->longitude;
    }

    /**
     * @param SearchColumnBooleanField[] $makeInventoryAvailable
     * @return LocationSearchRowBasic
     */
    public function setMakeInventoryAvailable(SearchColumnBooleanField $makeInventoryAvailable): LocationSearchRowBasic
    {
        $this->makeInventoryAvailable[] = $makeInventoryAvailable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMakeInventoryAvailable(): array
    {
        return $this->makeInventoryAvailable;
    }

    /**
     * @param SearchColumnBooleanField[] $makeInventoryAvailableStore
     * @return LocationSearchRowBasic
     */
    public function setMakeInventoryAvailableStore(SearchColumnBooleanField $makeInventoryAvailableStore): LocationSearchRowBasic
    {
        $this->makeInventoryAvailableStore[] = $makeInventoryAvailableStore;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMakeInventoryAvailableStore(): array
    {
        return $this->makeInventoryAvailableStore;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return LocationSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): LocationSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $nameNoHierarchy
     * @return LocationSearchRowBasic
     */
    public function setNameNoHierarchy(SearchColumnStringField $nameNoHierarchy): LocationSearchRowBasic
    {
        $this->nameNoHierarchy[] = $nameNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNameNoHierarchy(): array
    {
        return $this->nameNoHierarchy;
    }

    /**
     * @param SearchColumnDateField[] $nextPickupCutOffTime
     * @return LocationSearchRowBasic
     */
    public function setNextPickupCutOffTime(SearchColumnDateField $nextPickupCutOffTime): LocationSearchRowBasic
    {
        $this->nextPickupCutOffTime[] = $nextPickupCutOffTime;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextPickupCutOffTime(): array
    {
        return $this->nextPickupCutOffTime;
    }

    /**
     * @param SearchColumnStringField[] $phone
     * @return LocationSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): LocationSearchRowBasic
    {
        $this->phone[] = $phone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhone(): array
    {
        return $this->phone;
    }

    /**
     * @param SearchColumnDateField[] $sameDayPickupCutOffTime
     * @return LocationSearchRowBasic
     */
    public function setSameDayPickupCutOffTime(SearchColumnDateField $sameDayPickupCutOffTime): LocationSearchRowBasic
    {
        $this->sameDayPickupCutOffTime[] = $sameDayPickupCutOffTime;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSameDayPickupCutOffTime(): array
    {
        return $this->sameDayPickupCutOffTime;
    }

    /**
     * @param SearchColumnDateField[] $startTime
     * @return LocationSearchRowBasic
     */
    public function setStartTime(SearchColumnDateField $startTime): LocationSearchRowBasic
    {
        $this->startTime[] = $startTime;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartTime(): array
    {
        return $this->startTime;
    }

    /**
     * @param SearchColumnStringField[] $state
     * @return LocationSearchRowBasic
     */
    public function setState(SearchColumnStringField $state): LocationSearchRowBasic
    {
        $this->state[] = $state;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getState(): array
    {
        return $this->state;
    }

    /**
     * @param SearchColumnDoubleField[] $storePickupBufferStock
     * @return LocationSearchRowBasic
     */
    public function setStorePickupBufferStock(SearchColumnDoubleField $storePickupBufferStock): LocationSearchRowBasic
    {
        $this->storePickupBufferStock[] = $storePickupBufferStock;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getStorePickupBufferStock(): array
    {
        return $this->storePickupBufferStock;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return LocationSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): LocationSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnEnumSelectField[] $timeZone
     * @return LocationSearchRowBasic
     */
    public function setTimeZone(SearchColumnEnumSelectField $timeZone): LocationSearchRowBasic
    {
        $this->timeZone[] = $timeZone;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getTimeZone(): array
    {
        return $this->timeZone;
    }

    /**
     * @param SearchColumnLongField[] $totalShippingCapacity
     * @return LocationSearchRowBasic
     */
    public function setTotalShippingCapacity(SearchColumnLongField $totalShippingCapacity): LocationSearchRowBasic
    {
        $this->totalShippingCapacity[] = $totalShippingCapacity;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getTotalShippingCapacity(): array
    {
        return $this->totalShippingCapacity;
    }

    /**
     * @param SearchColumnStringField[] $tranPrefix
     * @return LocationSearchRowBasic
     */
    public function setTranPrefix(SearchColumnStringField $tranPrefix): LocationSearchRowBasic
    {
        $this->tranPrefix[] = $tranPrefix;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTranPrefix(): array
    {
        return $this->tranPrefix;
    }

    /**
     * @param SearchColumnBooleanField[] $usesBins
     * @return LocationSearchRowBasic
     */
    public function setUsesBins(SearchColumnBooleanField $usesBins): LocationSearchRowBasic
    {
        $this->usesBins[] = $usesBins;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsesBins(): array
    {
        return $this->usesBins;
    }

    /**
     * @param SearchColumnStringField[] $zip
     * @return LocationSearchRowBasic
     */
    public function setZip(SearchColumnStringField $zip): LocationSearchRowBasic
    {
        $this->zip[] = $zip;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZip(): array
    {
        return $this->zip;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return LocationSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): LocationSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
