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

class PromotionCodeSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $code;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $discount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isPublic;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "code" => "SearchColumnStringField[]",
        "description" => "SearchColumnStringField[]",
        "discount" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isPublic" => "SearchColumnBooleanField[]",
        "location" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $code
     * @return PromotionCodeSearchRowBasic
     */
    public function setCode(SearchColumnStringField $code): PromotionCodeSearchRowBasic
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCode(): array
    {
        return $this->code;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return PromotionCodeSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): PromotionCodeSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $discount
     * @return PromotionCodeSearchRowBasic
     */
    public function setDiscount(SearchColumnStringField $discount): PromotionCodeSearchRowBasic
    {
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDiscount(): array
    {
        return $this->discount;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return PromotionCodeSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): PromotionCodeSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return PromotionCodeSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): PromotionCodeSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return PromotionCodeSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PromotionCodeSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isInactive
     * @return PromotionCodeSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): PromotionCodeSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isPublic
     * @return PromotionCodeSearchRowBasic
     */
    public function setIsPublic(SearchColumnBooleanField $isPublic): PromotionCodeSearchRowBasic
    {
        $this->isPublic[] = $isPublic;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsPublic(): array
    {
        return $this->isPublic;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return PromotionCodeSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): PromotionCodeSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return PromotionCodeSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): PromotionCodeSearchRowBasic
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
     * @param SearchColumnDateField[] $startDate
     * @return PromotionCodeSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): PromotionCodeSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return PromotionCodeSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): PromotionCodeSearchRowBasic
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
