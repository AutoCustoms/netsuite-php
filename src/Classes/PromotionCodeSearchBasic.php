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

class PromotionCodeSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $applyDiscountTo;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $code;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $discount;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $freeShipItem;

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
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isPublic;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $partner;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "applyDiscountTo" => "SearchEnumMultiSelectField",
        "code" => "SearchStringField",
        "description" => "SearchStringField",
        "discount" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "freeShipItem" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isPublic" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "partner" => "SearchMultiSelectField",
        "startDate" => "SearchDateField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchEnumMultiSelectField $applyDiscountTo
     * @return PromotionCodeSearchBasic
     */
    public function setApplyDiscountTo(SearchEnumMultiSelectField $applyDiscountTo): PromotionCodeSearchBasic
    {
        $this->applyDiscountTo = $applyDiscountTo;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getApplyDiscountTo(): SearchEnumMultiSelectField
    {
        return $this->applyDiscountTo;
    }

    /**
     * @param SearchStringField $code
     * @return PromotionCodeSearchBasic
     */
    public function setCode(SearchStringField $code): PromotionCodeSearchBasic
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCode(): SearchStringField
    {
        return $this->code;
    }

    /**
     * @param SearchStringField $description
     * @return PromotionCodeSearchBasic
     */
    public function setDescription(SearchStringField $description): PromotionCodeSearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchMultiSelectField $discount
     * @return PromotionCodeSearchBasic
     */
    public function setDiscount(SearchMultiSelectField $discount): PromotionCodeSearchBasic
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDiscount(): SearchMultiSelectField
    {
        return $this->discount;
    }

    /**
     * @param SearchDateField $endDate
     * @return PromotionCodeSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): PromotionCodeSearchBasic
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate(): SearchDateField
    {
        return $this->endDate;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return PromotionCodeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): PromotionCodeSearchBasic
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
     * @return PromotionCodeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): PromotionCodeSearchBasic
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
     * @param SearchMultiSelectField $freeShipItem
     * @return PromotionCodeSearchBasic
     */
    public function setFreeShipItem(SearchMultiSelectField $freeShipItem): PromotionCodeSearchBasic
    {
        $this->freeShipItem = $freeShipItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFreeShipItem(): SearchMultiSelectField
    {
        return $this->freeShipItem;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return PromotionCodeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): PromotionCodeSearchBasic
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
     * @return PromotionCodeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): PromotionCodeSearchBasic
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
     * @param SearchBooleanField $isInactive
     * @return PromotionCodeSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): PromotionCodeSearchBasic
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
     * @param SearchBooleanField $isPublic
     * @return PromotionCodeSearchBasic
     */
    public function setIsPublic(SearchBooleanField $isPublic): PromotionCodeSearchBasic
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPublic(): SearchBooleanField
    {
        return $this->isPublic;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return PromotionCodeSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): PromotionCodeSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return PromotionCodeSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): PromotionCodeSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $name
     * @return PromotionCodeSearchBasic
     */
    public function setName(SearchStringField $name): PromotionCodeSearchBasic
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
     * @param SearchMultiSelectField $partner
     * @return PromotionCodeSearchBasic
     */
    public function setPartner(SearchMultiSelectField $partner): PromotionCodeSearchBasic
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPartner(): SearchMultiSelectField
    {
        return $this->partner;
    }

    /**
     * @param SearchDateField $startDate
     * @return PromotionCodeSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): PromotionCodeSearchBasic
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate(): SearchDateField
    {
        return $this->startDate;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return PromotionCodeSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): PromotionCodeSearchBasic
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
