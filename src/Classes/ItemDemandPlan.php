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

class ItemDemandPlan extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var int
     */
    protected int $year;

    /**
     * @var DemandPlanMonth
     */
    protected DemandPlanMonth $month;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var DemandPlanCalendarType
     */
    protected DemandPlanCalendarType $demandPlanCalendarType;

    /**
     * @var DemandPlanMatrix
     */
    protected DemandPlanMatrix $demandPlanMatrix;

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
        "customForm" => "RecordRef",
        "subsidiary" => "RecordRef",
        "location" => "RecordRef",
        "item" => "RecordRef",
        "units" => "RecordRef",
        "memo" => "string",
        "year" => "integer",
        "month" => "DemandPlanMonth",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "demandPlanCalendarType" => "DemandPlanCalendarType",
        "demandPlanMatrix" => "DemandPlanMatrix",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return ItemDemandPlan
     */
    public function setCustomForm(RecordRef $customForm): ItemDemandPlan
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param RecordRef $subsidiary
     * @return ItemDemandPlan
     */
    public function setSubsidiary(RecordRef $subsidiary): ItemDemandPlan
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param RecordRef $location
     * @return ItemDemandPlan
     */
    public function setLocation(RecordRef $location): ItemDemandPlan
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRef $item
     * @return ItemDemandPlan
     */
    public function setItem(RecordRef $item): ItemDemandPlan
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $units
     * @return ItemDemandPlan
     */
    public function setUnits(RecordRef $units): ItemDemandPlan
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits(): RecordRef
    {
        return $this->units;
    }

    /**
     * @param string $memo
     * @return ItemDemandPlan
     */
    public function setMemo(string $memo): ItemDemandPlan
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param int $year
     * @return ItemDemandPlan
     */
    public function setYear(int $year): ItemDemandPlan
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param DemandPlanMonth $month
     * @return ItemDemandPlan
     */
    public function setMonth(DemandPlanMonth $month): ItemDemandPlan
    {
        $this->month = $month;
        return $this;
    }

    /**
     * @return DemandPlanMonth
     */
    public function getMonth(): DemandPlanMonth
    {
        return $this->month;
    }

    /**
     * @param string $startDate
     * @return ItemDemandPlan
     */
    public function setStartDate(string $startDate): ItemDemandPlan
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return ItemDemandPlan
     */
    public function setEndDate(string $endDate): ItemDemandPlan
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param DemandPlanCalendarType $demandPlanCalendarType
     * @return ItemDemandPlan
     */
    public function setDemandPlanCalendarType(DemandPlanCalendarType $demandPlanCalendarType): ItemDemandPlan
    {
        $this->demandPlanCalendarType = $demandPlanCalendarType;
        return $this;
    }

    /**
     * @return DemandPlanCalendarType
     */
    public function getDemandPlanCalendarType(): DemandPlanCalendarType
    {
        return $this->demandPlanCalendarType;
    }

    /**
     * @param DemandPlanMatrix $demandPlanMatrix
     * @return ItemDemandPlan
     */
    public function setDemandPlanMatrix(DemandPlanMatrix $demandPlanMatrix): ItemDemandPlan
    {
        $this->demandPlanMatrix = $demandPlanMatrix;
        return $this;
    }

    /**
     * @return DemandPlanMatrix
     */
    public function getDemandPlanMatrix(): DemandPlanMatrix
    {
        return $this->demandPlanMatrix;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ItemDemandPlan
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ItemDemandPlan
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
     * @return ItemDemandPlan
     */
    public function setInternalId(string $internalId): ItemDemandPlan
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
     * @return ItemDemandPlan
     */
    public function setExternalId(string $externalId): ItemDemandPlan
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
