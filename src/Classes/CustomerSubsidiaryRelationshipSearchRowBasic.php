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

class CustomerSubsidiaryRelationshipSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $balance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $depositbalance;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $entity;

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
    protected array $isprimarysub;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $primaryCurrency;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unbilledorders;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "balance" => "SearchColumnDoubleField[]",
        "depositbalance" => "SearchColumnDoubleField[]",
        "entity" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isprimarysub" => "SearchColumnBooleanField[]",
        "primaryCurrency" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "unbilledorders" => "SearchColumnDoubleField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDoubleField[] $balance
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setBalance(SearchColumnDoubleField $balance): CustomerSubsidiaryRelationshipSearchRowBasic
    {
        $this->balance[] = $balance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBalance(): array
    {
        return $this->balance;
    }

    /**
     * @param SearchColumnDoubleField[] $depositbalance
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setDepositbalance(SearchColumnDoubleField $depositbalance): CustomerSubsidiaryRelationshipSearchRowBasic
    {
        $this->depositbalance[] = $depositbalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDepositbalance(): array
    {
        return $this->depositbalance;
    }

    /**
     * @param SearchColumnSelectField[] $entity
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setEntity(SearchColumnSelectField $entity): CustomerSubsidiaryRelationshipSearchRowBasic
    {
        $this->entity[] = $entity;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntity(): array
    {
        return $this->entity;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): CustomerSubsidiaryRelationshipSearchRowBasic
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
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CustomerSubsidiaryRelationshipSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isprimarysub
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setIsprimarysub(SearchColumnBooleanField $isprimarysub): CustomerSubsidiaryRelationshipSearchRowBasic
    {
        $this->isprimarysub[] = $isprimarysub;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsprimarysub(): array
    {
        return $this->isprimarysub;
    }

    /**
     * @param SearchColumnSelectField[] $primaryCurrency
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setPrimaryCurrency(SearchColumnSelectField $primaryCurrency): CustomerSubsidiaryRelationshipSearchRowBasic
    {
        $this->primaryCurrency[] = $primaryCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPrimaryCurrency(): array
    {
        return $this->primaryCurrency;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): CustomerSubsidiaryRelationshipSearchRowBasic
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
     * @param SearchColumnDoubleField[] $unbilledorders
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setUnbilledorders(SearchColumnDoubleField $unbilledorders): CustomerSubsidiaryRelationshipSearchRowBasic
    {
        $this->unbilledorders[] = $unbilledorders;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnbilledorders(): array
    {
        return $this->unbilledorders;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return CustomerSubsidiaryRelationshipSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): CustomerSubsidiaryRelationshipSearchRowBasic
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
