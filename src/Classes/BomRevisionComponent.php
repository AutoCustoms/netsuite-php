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

class BomRevisionComponent {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var float
     */
    protected float $componentYield;

    /**
     * @var float
     */
    protected float $bomQuantity;

    /**
     * @var ItemSource
     */
    protected ItemSource $itemSource;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "description" => "string",
        "componentYield" => "float",
        "bomQuantity" => "float",
        "itemSource" => "ItemSource",
        "quantity" => "float",
        "units" => "RecordRef",
        "internalId" => "string",
        "customFieldList" => "CustomFieldList",
    );

    /**
     * @param RecordRef $item
     * @return BomRevisionComponent
     */
    public function setItem(RecordRef $item): BomRevisionComponent
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
     * @param string $description
     * @return BomRevisionComponent
     */
    public function setDescription(string $description): BomRevisionComponent
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param float $componentYield
     * @return BomRevisionComponent
     */
    public function setComponentYield(float $componentYield): BomRevisionComponent
    {
        $this->componentYield = $componentYield;
        return $this;
    }

    /**
     * @return float
     */
    public function getComponentYield(): float
    {
        return $this->componentYield;
    }

    /**
     * @param float $bomQuantity
     * @return BomRevisionComponent
     */
    public function setBomQuantity(float $bomQuantity): BomRevisionComponent
    {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getBomQuantity(): float
    {
        return $this->bomQuantity;
    }

    /**
     * @param ItemSource $itemSource
     * @return BomRevisionComponent
     */
    public function setItemSource(ItemSource $itemSource): BomRevisionComponent
    {
        $this->itemSource = $itemSource;
        return $this;
    }

    /**
     * @return ItemSource
     */
    public function getItemSource(): ItemSource
    {
        return $this->itemSource;
    }

    /**
     * @param float $quantity
     * @return BomRevisionComponent
     */
    public function setQuantity(float $quantity): BomRevisionComponent
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param RecordRef $units
     * @return BomRevisionComponent
     */
    public function setUnits(RecordRef $units): BomRevisionComponent
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
     * @param string $internalId
     * @return BomRevisionComponent
     */
    public function setInternalId(string $internalId): BomRevisionComponent
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
     * @param CustomFieldList $customFieldList
     * @return BomRevisionComponent
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): BomRevisionComponent
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

}
