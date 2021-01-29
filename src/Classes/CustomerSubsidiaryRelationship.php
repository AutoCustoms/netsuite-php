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

class CustomerSubsidiaryRelationship extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var bool
     */
    protected bool $isPrimarySub;

    /**
     * @var RecordRef
     */
    protected RecordRef $primaryCurrency;

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
        "entity" => "RecordRef",
        "subsidiary" => "RecordRef",
        "isPrimarySub" => "boolean",
        "primaryCurrency" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $entity
     * @return CustomerSubsidiaryRelationship
     */
    public function setEntity(RecordRef $entity): CustomerSubsidiaryRelationship
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param RecordRef $subsidiary
     * @return CustomerSubsidiaryRelationship
     */
    public function setSubsidiary(RecordRef $subsidiary): CustomerSubsidiaryRelationship
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
     * @param bool $isPrimarySub
     * @return CustomerSubsidiaryRelationship
     */
    public function setIsPrimarySub(bool $isPrimarySub): CustomerSubsidiaryRelationship
    {
        $this->isPrimarySub = $isPrimarySub;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrimarySub(): bool
    {
        return $this->isPrimarySub;
    }

    /**
     * @param RecordRef $primaryCurrency
     * @return CustomerSubsidiaryRelationship
     */
    public function setPrimaryCurrency(RecordRef $primaryCurrency): CustomerSubsidiaryRelationship
    {
        $this->primaryCurrency = $primaryCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPrimaryCurrency(): RecordRef
    {
        return $this->primaryCurrency;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return CustomerSubsidiaryRelationship
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): CustomerSubsidiaryRelationship
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
     * @return CustomerSubsidiaryRelationship
     */
    public function setInternalId(string $internalId): CustomerSubsidiaryRelationship
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
     * @return CustomerSubsidiaryRelationship
     */
    public function setExternalId(string $externalId): CustomerSubsidiaryRelationship
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
