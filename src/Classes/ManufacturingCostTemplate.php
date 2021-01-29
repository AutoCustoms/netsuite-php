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

class ManufacturingCostTemplate extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var ManufacturingCostDetailList
     */
    protected ManufacturingCostDetailList $costDetailList;

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
        "name" => "string",
        "memo" => "string",
        "isInactive" => "boolean",
        "costDetailList" => "ManufacturingCostDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return ManufacturingCostTemplate
     */
    public function setCustomForm(RecordRef $customForm): ManufacturingCostTemplate
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
     * @return ManufacturingCostTemplate
     */
    public function setSubsidiary(RecordRef $subsidiary): ManufacturingCostTemplate
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
     * @param string $name
     * @return ManufacturingCostTemplate
     */
    public function setName(string $name): ManufacturingCostTemplate
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
     * @param string $memo
     * @return ManufacturingCostTemplate
     */
    public function setMemo(string $memo): ManufacturingCostTemplate
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
     * @return ManufacturingCostTemplate
     */
    public function setIsInactive(bool $isInactive): ManufacturingCostTemplate
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
     * @param ManufacturingCostDetailList $costDetailList
     * @return ManufacturingCostTemplate
     */
    public function setCostDetailList(ManufacturingCostDetailList $costDetailList): ManufacturingCostTemplate
    {
        $this->costDetailList = $costDetailList;
        return $this;
    }

    /**
     * @return ManufacturingCostDetailList
     */
    public function getCostDetailList(): ManufacturingCostDetailList
    {
        return $this->costDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ManufacturingCostTemplate
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ManufacturingCostTemplate
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
     * @return ManufacturingCostTemplate
     */
    public function setInternalId(string $internalId): ManufacturingCostTemplate
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
     * @return ManufacturingCostTemplate
     */
    public function setExternalId(string $externalId): ManufacturingCostTemplate
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
