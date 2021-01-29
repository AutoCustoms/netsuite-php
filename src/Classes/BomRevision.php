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

class BomRevision extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $billOfMaterials;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $effectiveStartDate;

    /**
     * @var string
     */
    protected string $effectiveEndDate;

    /**
     * @var BomRevisionComponentList
     */
    protected BomRevisionComponentList $componentList;

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
        "name" => "string",
        "createdDate" => "dateTime",
        "billOfMaterials" => "RecordRef",
        "memo" => "string",
        "isInactive" => "boolean",
        "effectiveStartDate" => "dateTime",
        "effectiveEndDate" => "dateTime",
        "componentList" => "BomRevisionComponentList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return BomRevision
     */
    public function setCustomForm(RecordRef $customForm): BomRevision
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
     * @param string $name
     * @return BomRevision
     */
    public function setName(string $name): BomRevision
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $createdDate
     * @return BomRevision
     */
    public function setCreatedDate(string $createdDate): BomRevision
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param RecordRef $billOfMaterials
     * @return BomRevision
     */
    public function setBillOfMaterials(RecordRef $billOfMaterials): BomRevision
    {
        $this->billOfMaterials = $billOfMaterials;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterials(): RecordRef
    {
        return $this->billOfMaterials;
    }

    /**
     * @param string $memo
     * @return BomRevision
     */
    public function setMemo(string $memo): BomRevision
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
     * @param bool $isInactive
     * @return BomRevision
     */
    public function setIsInactive(bool $isInactive): BomRevision
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $effectiveStartDate
     * @return BomRevision
     */
    public function setEffectiveStartDate(string $effectiveStartDate): BomRevision
    {
        $this->effectiveStartDate = $effectiveStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveStartDate(): string
    {
        return $this->effectiveStartDate;
    }

    /**
     * @param string $effectiveEndDate
     * @return BomRevision
     */
    public function setEffectiveEndDate(string $effectiveEndDate): BomRevision
    {
        $this->effectiveEndDate = $effectiveEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveEndDate(): string
    {
        return $this->effectiveEndDate;
    }

    /**
     * @param BomRevisionComponentList $componentList
     * @return BomRevision
     */
    public function setComponentList(BomRevisionComponentList $componentList): BomRevision
    {
        $this->componentList = $componentList;
        return $this;
    }

    /**
     * @return BomRevisionComponentList
     */
    public function getComponentList(): BomRevisionComponentList
    {
        return $this->componentList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return BomRevision
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): BomRevision
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
     * @return BomRevision
     */
    public function setInternalId(string $internalId): BomRevision
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
     * @return BomRevision
     */
    public function setExternalId(string $externalId): BomRevision
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
