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

class BomRevisionSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billOfMaterials;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $effectiveEndDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $effectiveStartDate;

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
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "billOfMaterials" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "effectiveEndDate" => "SearchColumnDateField[]",
        "effectiveStartDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $billOfMaterials
     * @return BomRevisionSearchRowBasic
     */
    public function setBillOfMaterials(SearchColumnSelectField $billOfMaterials): BomRevisionSearchRowBasic
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
     * @param SearchColumnDateField[] $createdDate
     * @return BomRevisionSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): BomRevisionSearchRowBasic
    {
        $this->createdDate[] = $createdDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate(): array
    {
        return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $effectiveEndDate
     * @return BomRevisionSearchRowBasic
     */
    public function setEffectiveEndDate(SearchColumnDateField $effectiveEndDate): BomRevisionSearchRowBasic
    {
        $this->effectiveEndDate[] = $effectiveEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveEndDate(): array
    {
        return $this->effectiveEndDate;
    }

    /**
     * @param SearchColumnDateField[] $effectiveStartDate
     * @return BomRevisionSearchRowBasic
     */
    public function setEffectiveStartDate(SearchColumnDateField $effectiveStartDate): BomRevisionSearchRowBasic
    {
        $this->effectiveStartDate[] = $effectiveStartDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveStartDate(): array
    {
        return $this->effectiveStartDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return BomRevisionSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): BomRevisionSearchRowBasic
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
     * @return BomRevisionSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): BomRevisionSearchRowBasic
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
     * @return BomRevisionSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): BomRevisionSearchRowBasic
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
     * @param SearchColumnStringField[] $memo
     * @return BomRevisionSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): BomRevisionSearchRowBasic
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
     * @return BomRevisionSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): BomRevisionSearchRowBasic
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
     * @param SearchColumnCustomFieldList $customFieldList
     * @return BomRevisionSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): BomRevisionSearchRowBasic
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
