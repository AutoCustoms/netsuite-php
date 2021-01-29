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

class ManufacturingRoutingSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $autoCalculateLag;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billOfMaterials;

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
    protected array $isDefault;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $lagAmount;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $lagType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $lagUnits;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $manufacturingCostTemplate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $manufacturingWorkCenter;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $operationName;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $operationYield;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $runRate;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $sequence;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $setupTime;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "autoCalculateLag" => "SearchColumnBooleanField[]",
        "billOfMaterials" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefault" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "lagAmount" => "SearchColumnDoubleField[]",
        "lagType" => "SearchColumnEnumSelectField[]",
        "lagUnits" => "SearchColumnStringField[]",
        "location" => "SearchColumnSelectField[]",
        "manufacturingCostTemplate" => "SearchColumnSelectField[]",
        "manufacturingWorkCenter" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "operationName" => "SearchColumnStringField[]",
        "operationYield" => "SearchColumnDoubleField[]",
        "runRate" => "SearchColumnDoubleField[]",
        "sequence" => "SearchColumnLongField[]",
        "setupTime" => "SearchColumnDoubleField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnBooleanField[] $autoCalculateLag
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setAutoCalculateLag(SearchColumnBooleanField $autoCalculateLag): ManufacturingRoutingSearchRowBasic
    {
        $this->autoCalculateLag[] = $autoCalculateLag;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAutoCalculateLag(): array
    {
        return $this->autoCalculateLag;
    }

    /**
     * @param SearchColumnSelectField[] $billOfMaterials
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setBillOfMaterials(SearchColumnSelectField $billOfMaterials): ManufacturingRoutingSearchRowBasic
    {
        $this->billOfMaterials[] = $billOfMaterials;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillOfMaterials(): array
    {
        return $this->billOfMaterials;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ManufacturingRoutingSearchRowBasic
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
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ManufacturingRoutingSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isDefault
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setIsDefault(SearchColumnBooleanField $isDefault): ManufacturingRoutingSearchRowBasic
    {
        $this->isDefault[] = $isDefault;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDefault(): array
    {
        return $this->isDefault;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): ManufacturingRoutingSearchRowBasic
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
     * @param SearchColumnSelectField[] $item
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): ManufacturingRoutingSearchRowBasic
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
     * @param SearchColumnDoubleField[] $lagAmount
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setLagAmount(SearchColumnDoubleField $lagAmount): ManufacturingRoutingSearchRowBasic
    {
        $this->lagAmount[] = $lagAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLagAmount(): array
    {
        return $this->lagAmount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $lagType
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setLagType(SearchColumnEnumSelectField $lagType): ManufacturingRoutingSearchRowBasic
    {
        $this->lagType[] = $lagType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLagType(): array
    {
        return $this->lagType;
    }

    /**
     * @param SearchColumnStringField[] $lagUnits
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setLagUnits(SearchColumnStringField $lagUnits): ManufacturingRoutingSearchRowBasic
    {
        $this->lagUnits[] = $lagUnits;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLagUnits(): array
    {
        return $this->lagUnits;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): ManufacturingRoutingSearchRowBasic
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
     * @param SearchColumnSelectField[] $manufacturingCostTemplate
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setManufacturingCostTemplate(SearchColumnSelectField $manufacturingCostTemplate): ManufacturingRoutingSearchRowBasic
    {
        $this->manufacturingCostTemplate[] = $manufacturingCostTemplate;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingCostTemplate(): array
    {
        return $this->manufacturingCostTemplate;
    }

    /**
     * @param SearchColumnSelectField[] $manufacturingWorkCenter
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setManufacturingWorkCenter(SearchColumnSelectField $manufacturingWorkCenter): ManufacturingRoutingSearchRowBasic
    {
        $this->manufacturingWorkCenter[] = $manufacturingWorkCenter;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getManufacturingWorkCenter(): array
    {
        return $this->manufacturingWorkCenter;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): ManufacturingRoutingSearchRowBasic
    {
        $this->memo[] = $memo;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo(): array
    {
        return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): ManufacturingRoutingSearchRowBasic
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
     * @param SearchColumnStringField[] $operationName
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setOperationName(SearchColumnStringField $operationName): ManufacturingRoutingSearchRowBasic
    {
        $this->operationName[] = $operationName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOperationName(): array
    {
        return $this->operationName;
    }

    /**
     * @param SearchColumnDoubleField[] $operationYield
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setOperationYield(SearchColumnDoubleField $operationYield): ManufacturingRoutingSearchRowBasic
    {
        $this->operationYield[] = $operationYield;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOperationYield(): array
    {
        return $this->operationYield;
    }

    /**
     * @param SearchColumnDoubleField[] $runRate
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setRunRate(SearchColumnDoubleField $runRate): ManufacturingRoutingSearchRowBasic
    {
        $this->runRate[] = $runRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRunRate(): array
    {
        return $this->runRate;
    }

    /**
     * @param SearchColumnLongField[] $sequence
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setSequence(SearchColumnLongField $sequence): ManufacturingRoutingSearchRowBasic
    {
        $this->sequence[] = $sequence;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getSequence(): array
    {
        return $this->sequence;
    }

    /**
     * @param SearchColumnDoubleField[] $setupTime
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setSetupTime(SearchColumnDoubleField $setupTime): ManufacturingRoutingSearchRowBasic
    {
        $this->setupTime[] = $setupTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getSetupTime(): array
    {
        return $this->setupTime;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): ManufacturingRoutingSearchRowBasic
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
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ManufacturingRoutingSearchRowBasic
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
