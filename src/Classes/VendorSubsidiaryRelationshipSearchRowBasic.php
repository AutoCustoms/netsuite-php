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

class VendorSubsidiaryRelationshipSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $balance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $balancebase;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $baseCurrency;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $creditlimit;

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
     * @var SearchColumnDoubleField[]
     */
    protected array $inTransitBalance;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $inTransitBalanceBase;

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
     * @var SearchColumnSelectField[]
     */
    protected array $taxitem;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unbilledorders;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $unbilledordersbase;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "balance" => "SearchColumnDoubleField[]",
        "balancebase" => "SearchColumnDoubleField[]",
        "baseCurrency" => "SearchColumnSelectField[]",
        "creditlimit" => "SearchColumnDoubleField[]",
        "entity" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inTransitBalance" => "SearchColumnDoubleField[]",
        "inTransitBalanceBase" => "SearchColumnDoubleField[]",
        "isprimarysub" => "SearchColumnBooleanField[]",
        "primaryCurrency" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "taxitem" => "SearchColumnSelectField[]",
        "unbilledorders" => "SearchColumnDoubleField[]",
        "unbilledordersbase" => "SearchColumnDoubleField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDoubleField[] $balance
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setBalance(SearchColumnDoubleField $balance): VendorSubsidiaryRelationshipSearchRowBasic
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
     * @param SearchColumnDoubleField[] $balancebase
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setBalancebase(SearchColumnDoubleField $balancebase): VendorSubsidiaryRelationshipSearchRowBasic
    {
        $this->balancebase[] = $balancebase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBalancebase(): array
    {
        return $this->balancebase;
    }

    /**
     * @param SearchColumnSelectField[] $baseCurrency
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setBaseCurrency(SearchColumnSelectField $baseCurrency): VendorSubsidiaryRelationshipSearchRowBasic
    {
        $this->baseCurrency[] = $baseCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBaseCurrency(): array
    {
        return $this->baseCurrency;
    }

    /**
     * @param SearchColumnDoubleField[] $creditlimit
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setCreditlimit(SearchColumnDoubleField $creditlimit): VendorSubsidiaryRelationshipSearchRowBasic
    {
        $this->creditlimit[] = $creditlimit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getCreditlimit(): array
    {
        return $this->creditlimit;
    }

    /**
     * @param SearchColumnSelectField[] $entity
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setEntity(SearchColumnSelectField $entity): VendorSubsidiaryRelationshipSearchRowBasic
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
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): VendorSubsidiaryRelationshipSearchRowBasic
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
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): VendorSubsidiaryRelationshipSearchRowBasic
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
     * @param SearchColumnDoubleField[] $inTransitBalance
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setInTransitBalance(SearchColumnDoubleField $inTransitBalance): VendorSubsidiaryRelationshipSearchRowBasic
    {
        $this->inTransitBalance[] = $inTransitBalance;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getInTransitBalance(): array
    {
        return $this->inTransitBalance;
    }

    /**
     * @param SearchColumnDoubleField[] $inTransitBalanceBase
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setInTransitBalanceBase(SearchColumnDoubleField $inTransitBalanceBase): VendorSubsidiaryRelationshipSearchRowBasic
    {
        $this->inTransitBalanceBase[] = $inTransitBalanceBase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getInTransitBalanceBase(): array
    {
        return $this->inTransitBalanceBase;
    }

    /**
     * @param SearchColumnBooleanField[] $isprimarysub
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setIsprimarysub(SearchColumnBooleanField $isprimarysub): VendorSubsidiaryRelationshipSearchRowBasic
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
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setPrimaryCurrency(SearchColumnSelectField $primaryCurrency): VendorSubsidiaryRelationshipSearchRowBasic
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
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): VendorSubsidiaryRelationshipSearchRowBasic
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
     * @param SearchColumnSelectField[] $taxitem
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setTaxitem(SearchColumnSelectField $taxitem): VendorSubsidiaryRelationshipSearchRowBasic
    {
        $this->taxitem[] = $taxitem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxitem(): array
    {
        return $this->taxitem;
    }

    /**
     * @param SearchColumnDoubleField[] $unbilledorders
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setUnbilledorders(SearchColumnDoubleField $unbilledorders): VendorSubsidiaryRelationshipSearchRowBasic
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
     * @param SearchColumnDoubleField[] $unbilledordersbase
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setUnbilledordersbase(SearchColumnDoubleField $unbilledordersbase): VendorSubsidiaryRelationshipSearchRowBasic
    {
        $this->unbilledordersbase[] = $unbilledordersbase;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getUnbilledordersbase(): array
    {
        return $this->unbilledordersbase;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): VendorSubsidiaryRelationshipSearchRowBasic
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
