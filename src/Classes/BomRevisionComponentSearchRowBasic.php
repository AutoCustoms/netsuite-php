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

class BomRevisionComponentSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $bomQuantity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $bomRevision;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $componentYield;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $itemSource;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $itemSubtype;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $itemType;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $lineId;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantity;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $units;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $weight;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "bomQuantity" => "SearchColumnDoubleField[]",
        "bomRevision" => "SearchColumnSelectField[]",
        "componentYield" => "SearchColumnDoubleField[]",
        "description" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "itemSource" => "SearchColumnEnumSelectField[]",
        "itemSubtype" => "SearchColumnStringField[]",
        "itemType" => "SearchColumnSelectField[]",
        "lineId" => "SearchColumnLongField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "units" => "SearchColumnStringField[]",
        "weight" => "SearchColumnDoubleField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDoubleField[] $bomQuantity
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setBomQuantity(SearchColumnDoubleField $bomQuantity): BomRevisionComponentSearchRowBasic
    {
        $this->bomQuantity[] = $bomQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBomQuantity(): array
    {
        return $this->bomQuantity;
    }

    /**
     * @param SearchColumnSelectField[] $bomRevision
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setBomRevision(SearchColumnSelectField $bomRevision): BomRevisionComponentSearchRowBasic
    {
        $this->bomRevision[] = $bomRevision;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBomRevision(): array
    {
        return $this->bomRevision;
    }

    /**
     * @param SearchColumnDoubleField[] $componentYield
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setComponentYield(SearchColumnDoubleField $componentYield): BomRevisionComponentSearchRowBasic
    {
        $this->componentYield[] = $componentYield;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getComponentYield(): array
    {
        return $this->componentYield;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): BomRevisionComponentSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): BomRevisionComponentSearchRowBasic
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
     * @param SearchColumnSelectField[] $item
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): BomRevisionComponentSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnEnumSelectField[] $itemSource
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setItemSource(SearchColumnEnumSelectField $itemSource): BomRevisionComponentSearchRowBasic
    {
        $this->itemSource[] = $itemSource;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getItemSource(): array
    {
        return $this->itemSource;
    }

    /**
     * @param SearchColumnStringField[] $itemSubtype
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setItemSubtype(SearchColumnStringField $itemSubtype): BomRevisionComponentSearchRowBasic
    {
        $this->itemSubtype[] = $itemSubtype;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemSubtype(): array
    {
        return $this->itemSubtype;
    }

    /**
     * @param SearchColumnSelectField[] $itemType
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setItemType(SearchColumnSelectField $itemType): BomRevisionComponentSearchRowBasic
    {
        $this->itemType[] = $itemType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItemType(): array
    {
        return $this->itemType;
    }

    /**
     * @param SearchColumnLongField[] $lineId
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setLineId(SearchColumnLongField $lineId): BomRevisionComponentSearchRowBasic
    {
        $this->lineId[] = $lineId;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineId(): array
    {
        return $this->lineId;
    }

    /**
     * @param SearchColumnDoubleField[] $quantity
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setQuantity(SearchColumnDoubleField $quantity): BomRevisionComponentSearchRowBasic
    {
        $this->quantity[] = $quantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantity(): array
    {
        return $this->quantity;
    }

    /**
     * @param SearchColumnStringField[] $units
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setUnits(SearchColumnStringField $units): BomRevisionComponentSearchRowBasic
    {
        $this->units[] = $units;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUnits(): array
    {
        return $this->units;
    }

    /**
     * @param SearchColumnDoubleField[] $weight
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setWeight(SearchColumnDoubleField $weight): BomRevisionComponentSearchRowBasic
    {
        $this->weight[] = $weight;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getWeight(): array
    {
        return $this->weight;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return BomRevisionComponentSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): BomRevisionComponentSearchRowBasic
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
