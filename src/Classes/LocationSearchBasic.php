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

class LocationSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $address;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $allowStorePickup;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $autoAssignmentRegionSetting;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $bufferStock;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $city;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $county;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $dailyShippingCapacity;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endTime;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $geolocationMethod;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isFriday;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isIncludeInCt;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isMonday;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isOffice;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isSaturday;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isSunday;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isThursday;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isTuesday;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isWednesday;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $latitude;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $locationType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $longitude;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $makeInventoryAvailable;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $makeInventoryAvailableStore;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $nameNoHierarchy;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $nextPickupCutOffTime;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phone;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $sameDayPickupCutOffTime;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startTime;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $state;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $storePickupBufferStock;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $timeZone;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $totalShippingCapacity;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $tranprefix;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $usesBins;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $zip;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "allowStorePickup" => "SearchBooleanField",
        "autoAssignmentRegionSetting" => "SearchEnumMultiSelectField",
        "bufferStock" => "SearchLongField",
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dailyShippingCapacity" => "SearchLongField",
        "endTime" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "geolocationMethod" => "SearchEnumMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isFriday" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isIncludeInCt" => "SearchBooleanField",
        "isMonday" => "SearchBooleanField",
        "isOffice" => "SearchBooleanField",
        "isSaturday" => "SearchBooleanField",
        "isSunday" => "SearchBooleanField",
        "isThursday" => "SearchBooleanField",
        "isTuesday" => "SearchBooleanField",
        "isWednesday" => "SearchBooleanField",
        "latitude" => "SearchDoubleField",
        "locationType" => "SearchEnumMultiSelectField",
        "longitude" => "SearchDoubleField",
        "makeInventoryAvailable" => "SearchBooleanField",
        "makeInventoryAvailableStore" => "SearchBooleanField",
        "name" => "SearchStringField",
        "nameNoHierarchy" => "SearchStringField",
        "nextPickupCutOffTime" => "SearchDateField",
        "phone" => "SearchStringField",
        "sameDayPickupCutOffTime" => "SearchDateField",
        "startTime" => "SearchDateField",
        "state" => "SearchStringField",
        "storePickupBufferStock" => "SearchDoubleField",
        "subsidiary" => "SearchMultiSelectField",
        "timeZone" => "SearchEnumMultiSelectField",
        "totalShippingCapacity" => "SearchLongField",
        "tranprefix" => "SearchStringField",
        "usesBins" => "SearchBooleanField",
        "zip" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $address
     * @return LocationSearchBasic
     */
    public function setAddress(SearchStringField $address): LocationSearchBasic
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddress(): SearchStringField
    {
        return $this->address;
    }

    /**
     * @param SearchBooleanField $allowStorePickup
     * @return LocationSearchBasic
     */
    public function setAllowStorePickup(SearchBooleanField $allowStorePickup): LocationSearchBasic
    {
        $this->allowStorePickup = $allowStorePickup;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowStorePickup(): SearchBooleanField
    {
        return $this->allowStorePickup;
    }

    /**
     * @param SearchEnumMultiSelectField $autoAssignmentRegionSetting
     * @return LocationSearchBasic
     */
    public function setAutoAssignmentRegionSetting(SearchEnumMultiSelectField $autoAssignmentRegionSetting): LocationSearchBasic
    {
        $this->autoAssignmentRegionSetting = $autoAssignmentRegionSetting;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAutoAssignmentRegionSetting(): SearchEnumMultiSelectField
    {
        return $this->autoAssignmentRegionSetting;
    }

    /**
     * @param SearchLongField $bufferStock
     * @return LocationSearchBasic
     */
    public function setBufferStock(SearchLongField $bufferStock): LocationSearchBasic
    {
        $this->bufferStock = $bufferStock;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getBufferStock(): SearchLongField
    {
        return $this->bufferStock;
    }

    /**
     * @param SearchStringField $city
     * @return LocationSearchBasic
     */
    public function setCity(SearchStringField $city): LocationSearchBasic
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCity(): SearchStringField
    {
        return $this->city;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return LocationSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): LocationSearchBasic
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountry(): SearchEnumMultiSelectField
    {
        return $this->country;
    }

    /**
     * @param SearchStringField $county
     * @return LocationSearchBasic
     */
    public function setCounty(SearchStringField $county): LocationSearchBasic
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCounty(): SearchStringField
    {
        return $this->county;
    }

    /**
     * @param SearchLongField $dailyShippingCapacity
     * @return LocationSearchBasic
     */
    public function setDailyShippingCapacity(SearchLongField $dailyShippingCapacity): LocationSearchBasic
    {
        $this->dailyShippingCapacity = $dailyShippingCapacity;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDailyShippingCapacity(): SearchLongField
    {
        return $this->dailyShippingCapacity;
    }

    /**
     * @param SearchDateField $endTime
     * @return LocationSearchBasic
     */
    public function setEndTime(SearchDateField $endTime): LocationSearchBasic
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndTime(): SearchDateField
    {
        return $this->endTime;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return LocationSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): LocationSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return LocationSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): LocationSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchEnumMultiSelectField $geolocationMethod
     * @return LocationSearchBasic
     */
    public function setGeolocationMethod(SearchEnumMultiSelectField $geolocationMethod): LocationSearchBasic
    {
        $this->geolocationMethod = $geolocationMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGeolocationMethod(): SearchEnumMultiSelectField
    {
        return $this->geolocationMethod;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return LocationSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): LocationSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return LocationSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): LocationSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isFriday
     * @return LocationSearchBasic
     */
    public function setIsFriday(SearchBooleanField $isFriday): LocationSearchBasic
    {
        $this->isFriday = $isFriday;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsFriday(): SearchBooleanField
    {
        return $this->isFriday;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return LocationSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): LocationSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isIncludeInCt
     * @return LocationSearchBasic
     */
    public function setIsIncludeInCt(SearchBooleanField $isIncludeInCt): LocationSearchBasic
    {
        $this->isIncludeInCt = $isIncludeInCt;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsIncludeInCt(): SearchBooleanField
    {
        return $this->isIncludeInCt;
    }

    /**
     * @param SearchBooleanField $isMonday
     * @return LocationSearchBasic
     */
    public function setIsMonday(SearchBooleanField $isMonday): LocationSearchBasic
    {
        $this->isMonday = $isMonday;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsMonday(): SearchBooleanField
    {
        return $this->isMonday;
    }

    /**
     * @param SearchBooleanField $isOffice
     * @return LocationSearchBasic
     */
    public function setIsOffice(SearchBooleanField $isOffice): LocationSearchBasic
    {
        $this->isOffice = $isOffice;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOffice(): SearchBooleanField
    {
        return $this->isOffice;
    }

    /**
     * @param SearchBooleanField $isSaturday
     * @return LocationSearchBasic
     */
    public function setIsSaturday(SearchBooleanField $isSaturday): LocationSearchBasic
    {
        $this->isSaturday = $isSaturday;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSaturday(): SearchBooleanField
    {
        return $this->isSaturday;
    }

    /**
     * @param SearchBooleanField $isSunday
     * @return LocationSearchBasic
     */
    public function setIsSunday(SearchBooleanField $isSunday): LocationSearchBasic
    {
        $this->isSunday = $isSunday;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsSunday(): SearchBooleanField
    {
        return $this->isSunday;
    }

    /**
     * @param SearchBooleanField $isThursday
     * @return LocationSearchBasic
     */
    public function setIsThursday(SearchBooleanField $isThursday): LocationSearchBasic
    {
        $this->isThursday = $isThursday;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsThursday(): SearchBooleanField
    {
        return $this->isThursday;
    }

    /**
     * @param SearchBooleanField $isTuesday
     * @return LocationSearchBasic
     */
    public function setIsTuesday(SearchBooleanField $isTuesday): LocationSearchBasic
    {
        $this->isTuesday = $isTuesday;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTuesday(): SearchBooleanField
    {
        return $this->isTuesday;
    }

    /**
     * @param SearchBooleanField $isWednesday
     * @return LocationSearchBasic
     */
    public function setIsWednesday(SearchBooleanField $isWednesday): LocationSearchBasic
    {
        $this->isWednesday = $isWednesday;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsWednesday(): SearchBooleanField
    {
        return $this->isWednesday;
    }

    /**
     * @param SearchDoubleField $latitude
     * @return LocationSearchBasic
     */
    public function setLatitude(SearchDoubleField $latitude): LocationSearchBasic
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLatitude(): SearchDoubleField
    {
        return $this->latitude;
    }

    /**
     * @param SearchEnumMultiSelectField $locationType
     * @return LocationSearchBasic
     */
    public function setLocationType(SearchEnumMultiSelectField $locationType): LocationSearchBasic
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocationType(): SearchEnumMultiSelectField
    {
        return $this->locationType;
    }

    /**
     * @param SearchDoubleField $longitude
     * @return LocationSearchBasic
     */
    public function setLongitude(SearchDoubleField $longitude): LocationSearchBasic
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLongitude(): SearchDoubleField
    {
        return $this->longitude;
    }

    /**
     * @param SearchBooleanField $makeInventoryAvailable
     * @return LocationSearchBasic
     */
    public function setMakeInventoryAvailable(SearchBooleanField $makeInventoryAvailable): LocationSearchBasic
    {
        $this->makeInventoryAvailable = $makeInventoryAvailable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMakeInventoryAvailable(): SearchBooleanField
    {
        return $this->makeInventoryAvailable;
    }

    /**
     * @param SearchBooleanField $makeInventoryAvailableStore
     * @return LocationSearchBasic
     */
    public function setMakeInventoryAvailableStore(SearchBooleanField $makeInventoryAvailableStore): LocationSearchBasic
    {
        $this->makeInventoryAvailableStore = $makeInventoryAvailableStore;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMakeInventoryAvailableStore(): SearchBooleanField
    {
        return $this->makeInventoryAvailableStore;
    }

    /**
     * @param SearchStringField $name
     * @return LocationSearchBasic
     */
    public function setName(SearchStringField $name): LocationSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchStringField $nameNoHierarchy
     * @return LocationSearchBasic
     */
    public function setNameNoHierarchy(SearchStringField $nameNoHierarchy): LocationSearchBasic
    {
        $this->nameNoHierarchy = $nameNoHierarchy;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNameNoHierarchy(): SearchStringField
    {
        return $this->nameNoHierarchy;
    }

    /**
     * @param SearchDateField $nextPickupCutOffTime
     * @return LocationSearchBasic
     */
    public function setNextPickupCutOffTime(SearchDateField $nextPickupCutOffTime): LocationSearchBasic
    {
        $this->nextPickupCutOffTime = $nextPickupCutOffTime;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextPickupCutOffTime(): SearchDateField
    {
        return $this->nextPickupCutOffTime;
    }

    /**
     * @param SearchStringField $phone
     * @return LocationSearchBasic
     */
    public function setPhone(SearchStringField $phone): LocationSearchBasic
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhone(): SearchStringField
    {
        return $this->phone;
    }

    /**
     * @param SearchDateField $sameDayPickupCutOffTime
     * @return LocationSearchBasic
     */
    public function setSameDayPickupCutOffTime(SearchDateField $sameDayPickupCutOffTime): LocationSearchBasic
    {
        $this->sameDayPickupCutOffTime = $sameDayPickupCutOffTime;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getSameDayPickupCutOffTime(): SearchDateField
    {
        return $this->sameDayPickupCutOffTime;
    }

    /**
     * @param SearchDateField $startTime
     * @return LocationSearchBasic
     */
    public function setStartTime(SearchDateField $startTime): LocationSearchBasic
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartTime(): SearchDateField
    {
        return $this->startTime;
    }

    /**
     * @param SearchStringField $state
     * @return LocationSearchBasic
     */
    public function setState(SearchStringField $state): LocationSearchBasic
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getState(): SearchStringField
    {
        return $this->state;
    }

    /**
     * @param SearchDoubleField $storePickupBufferStock
     * @return LocationSearchBasic
     */
    public function setStorePickupBufferStock(SearchDoubleField $storePickupBufferStock): LocationSearchBasic
    {
        $this->storePickupBufferStock = $storePickupBufferStock;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getStorePickupBufferStock(): SearchDoubleField
    {
        return $this->storePickupBufferStock;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return LocationSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): LocationSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchEnumMultiSelectField $timeZone
     * @return LocationSearchBasic
     */
    public function setTimeZone(SearchEnumMultiSelectField $timeZone): LocationSearchBasic
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTimeZone(): SearchEnumMultiSelectField
    {
        return $this->timeZone;
    }

    /**
     * @param SearchLongField $totalShippingCapacity
     * @return LocationSearchBasic
     */
    public function setTotalShippingCapacity(SearchLongField $totalShippingCapacity): LocationSearchBasic
    {
        $this->totalShippingCapacity = $totalShippingCapacity;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getTotalShippingCapacity(): SearchLongField
    {
        return $this->totalShippingCapacity;
    }

    /**
     * @param SearchStringField $tranprefix
     * @return LocationSearchBasic
     */
    public function setTranprefix(SearchStringField $tranprefix): LocationSearchBasic
    {
        $this->tranprefix = $tranprefix;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTranprefix(): SearchStringField
    {
        return $this->tranprefix;
    }

    /**
     * @param SearchBooleanField $usesBins
     * @return LocationSearchBasic
     */
    public function setUsesBins(SearchBooleanField $usesBins): LocationSearchBasic
    {
        $this->usesBins = $usesBins;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsesBins(): SearchBooleanField
    {
        return $this->usesBins;
    }

    /**
     * @param SearchStringField $zip
     * @return LocationSearchBasic
     */
    public function setZip(SearchStringField $zip): LocationSearchBasic
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZip(): SearchStringField
    {
        return $this->zip;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return LocationSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): LocationSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
