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

class BomRevisionComponentSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $bomQuantity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $bomRevision;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $componentYield;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $itemSource;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $itemSubtype;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $itemType;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $lineId;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantity;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $units;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $weight;

    static $paramtypesmap = array(
        "bomQuantity" => "SearchDoubleField",
        "bomRevision" => "SearchMultiSelectField",
        "componentYield" => "SearchDoubleField",
        "description" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "itemSource" => "SearchEnumMultiSelectField",
        "itemSubtype" => "SearchStringField",
        "itemType" => "SearchMultiSelectField",
        "lineId" => "SearchLongField",
        "quantity" => "SearchDoubleField",
        "units" => "SearchStringField",
        "weight" => "SearchDoubleField",
    );

    /**
     * @param SearchDoubleField $bomQuantity
     * @return BomRevisionComponentSearchBasic
     */
    public function setBomQuantity(SearchDoubleField $bomQuantity): BomRevisionComponentSearchBasic
    {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBomQuantity(): SearchDoubleField
    {
        return $this->bomQuantity;
    }

    /**
     * @param SearchMultiSelectField $bomRevision
     * @return BomRevisionComponentSearchBasic
     */
    public function setBomRevision(SearchMultiSelectField $bomRevision): BomRevisionComponentSearchBasic
    {
        $this->bomRevision = $bomRevision;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBomRevision(): SearchMultiSelectField
    {
        return $this->bomRevision;
    }

    /**
     * @param SearchDoubleField $componentYield
     * @return BomRevisionComponentSearchBasic
     */
    public function setComponentYield(SearchDoubleField $componentYield): BomRevisionComponentSearchBasic
    {
        $this->componentYield = $componentYield;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getComponentYield(): SearchDoubleField
    {
        return $this->componentYield;
    }

    /**
     * @param SearchStringField $description
     * @return BomRevisionComponentSearchBasic
     */
    public function setDescription(SearchStringField $description): BomRevisionComponentSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return BomRevisionComponentSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): BomRevisionComponentSearchBasic
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
     * @return BomRevisionComponentSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): BomRevisionComponentSearchBasic
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
     * @param SearchMultiSelectField $item
     * @return BomRevisionComponentSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): BomRevisionComponentSearchBasic
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
     * @param SearchEnumMultiSelectField $itemSource
     * @return BomRevisionComponentSearchBasic
     */
    public function setItemSource(SearchEnumMultiSelectField $itemSource): BomRevisionComponentSearchBasic
    {
        $this->itemSource = $itemSource;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getItemSource(): SearchEnumMultiSelectField
    {
        return $this->itemSource;
    }

    /**
     * @param SearchStringField $itemSubtype
     * @return BomRevisionComponentSearchBasic
     */
    public function setItemSubtype(SearchStringField $itemSubtype): BomRevisionComponentSearchBasic
    {
        $this->itemSubtype = $itemSubtype;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getItemSubtype(): SearchStringField
    {
        return $this->itemSubtype;
    }

    /**
     * @param SearchMultiSelectField $itemType
     * @return BomRevisionComponentSearchBasic
     */
    public function setItemType(SearchMultiSelectField $itemType): BomRevisionComponentSearchBasic
    {
        $this->itemType = $itemType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItemType(): SearchMultiSelectField
    {
        return $this->itemType;
    }

    /**
     * @param SearchLongField $lineId
     * @return BomRevisionComponentSearchBasic
     */
    public function setLineId(SearchLongField $lineId): BomRevisionComponentSearchBasic
    {
        $this->lineId = $lineId;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLineId(): SearchLongField
    {
        return $this->lineId;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return BomRevisionComponentSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity): BomRevisionComponentSearchBasic
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity(): SearchDoubleField
    {
        return $this->quantity;
    }

    /**
     * @param SearchStringField $units
     * @return BomRevisionComponentSearchBasic
     */
    public function setUnits(SearchStringField $units): BomRevisionComponentSearchBasic
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUnits(): SearchStringField
    {
        return $this->units;
    }

    /**
     * @param SearchDoubleField $weight
     * @return BomRevisionComponentSearchBasic
     */
    public function setWeight(SearchDoubleField $weight): BomRevisionComponentSearchBasic
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getWeight(): SearchDoubleField
    {
        return $this->weight;
    }

}
