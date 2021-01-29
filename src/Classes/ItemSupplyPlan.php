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

class ItemSupplyPlan extends Record {
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
     * @var ItemSupplyPlanOrderList
     */
    protected ItemSupplyPlanOrderList $orderList;

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
        "orderList" => "ItemSupplyPlanOrderList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return ItemSupplyPlan
     */
    public function setCustomForm(RecordRef $customForm): ItemSupplyPlan
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
     * @return ItemSupplyPlan
     */
    public function setSubsidiary(RecordRef $subsidiary): ItemSupplyPlan
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
     * @return ItemSupplyPlan
     */
    public function setLocation(RecordRef $location): ItemSupplyPlan
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
     * @return ItemSupplyPlan
     */
    public function setItem(RecordRef $item): ItemSupplyPlan
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
     * @return ItemSupplyPlan
     */
    public function setUnits(RecordRef $units): ItemSupplyPlan
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
     * @return ItemSupplyPlan
     */
    public function setMemo(string $memo): ItemSupplyPlan
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
     * @param ItemSupplyPlanOrderList $orderList
     * @return ItemSupplyPlan
     */
    public function setOrderList(ItemSupplyPlanOrderList $orderList): ItemSupplyPlan
    {
        $this->orderList = $orderList;
        return $this;
    }

    /**
     * @return ItemSupplyPlanOrderList
     */
    public function getOrderList(): ItemSupplyPlanOrderList
    {
        return $this->orderList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ItemSupplyPlan
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ItemSupplyPlan
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
     * @return ItemSupplyPlan
     */
    public function setInternalId(string $internalId): ItemSupplyPlan
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
     * @return ItemSupplyPlan
     */
    public function setExternalId(string $externalId): ItemSupplyPlan
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
