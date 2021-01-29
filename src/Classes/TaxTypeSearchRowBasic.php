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

class TaxTypeSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $doesNotAddToTotal;

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
    protected array $name;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $nexus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $payablesAccount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $postToItemCost;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $receivablesAccount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $reverseCharge;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $taxInNetAmount;

    static $paramtypesmap = array(
        "country" => "SearchColumnEnumSelectField[]",
        "description" => "SearchColumnStringField[]",
        "doesNotAddToTotal" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "nexus" => "SearchColumnSelectField[]",
        "payablesAccount" => "SearchColumnSelectField[]",
        "postToItemCost" => "SearchColumnBooleanField[]",
        "receivablesAccount" => "SearchColumnSelectField[]",
        "reverseCharge" => "SearchColumnBooleanField[]",
        "taxInNetAmount" => "SearchColumnBooleanField[]",
    );

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return TaxTypeSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): TaxTypeSearchRowBasic
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountry(): array
    {
        return $this->country;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return TaxTypeSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): TaxTypeSearchRowBasic
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
     * @param SearchColumnBooleanField[] $doesNotAddToTotal
     * @return TaxTypeSearchRowBasic
     */
    public function setDoesNotAddToTotal(SearchColumnBooleanField $doesNotAddToTotal): TaxTypeSearchRowBasic
    {
        $this->doesNotAddToTotal[] = $doesNotAddToTotal;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDoesNotAddToTotal(): array
    {
        return $this->doesNotAddToTotal;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return TaxTypeSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): TaxTypeSearchRowBasic
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
     * @return TaxTypeSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): TaxTypeSearchRowBasic
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
     * @return TaxTypeSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): TaxTypeSearchRowBasic
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
     * @param SearchColumnStringField[] $name
     * @return TaxTypeSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): TaxTypeSearchRowBasic
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
     * @param SearchColumnSelectField[] $nexus
     * @return TaxTypeSearchRowBasic
     */
    public function setNexus(SearchColumnSelectField $nexus): TaxTypeSearchRowBasic
    {
        $this->nexus[] = $nexus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNexus(): array
    {
        return $this->nexus;
    }

    /**
     * @param SearchColumnSelectField[] $payablesAccount
     * @return TaxTypeSearchRowBasic
     */
    public function setPayablesAccount(SearchColumnSelectField $payablesAccount): TaxTypeSearchRowBasic
    {
        $this->payablesAccount[] = $payablesAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPayablesAccount(): array
    {
        return $this->payablesAccount;
    }

    /**
     * @param SearchColumnBooleanField[] $postToItemCost
     * @return TaxTypeSearchRowBasic
     */
    public function setPostToItemCost(SearchColumnBooleanField $postToItemCost): TaxTypeSearchRowBasic
    {
        $this->postToItemCost[] = $postToItemCost;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPostToItemCost(): array
    {
        return $this->postToItemCost;
    }

    /**
     * @param SearchColumnSelectField[] $receivablesAccount
     * @return TaxTypeSearchRowBasic
     */
    public function setReceivablesAccount(SearchColumnSelectField $receivablesAccount): TaxTypeSearchRowBasic
    {
        $this->receivablesAccount[] = $receivablesAccount;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReceivablesAccount(): array
    {
        return $this->receivablesAccount;
    }

    /**
     * @param SearchColumnBooleanField[] $reverseCharge
     * @return TaxTypeSearchRowBasic
     */
    public function setReverseCharge(SearchColumnBooleanField $reverseCharge): TaxTypeSearchRowBasic
    {
        $this->reverseCharge[] = $reverseCharge;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getReverseCharge(): array
    {
        return $this->reverseCharge;
    }

    /**
     * @param SearchColumnBooleanField[] $taxInNetAmount
     * @return TaxTypeSearchRowBasic
     */
    public function setTaxInNetAmount(SearchColumnBooleanField $taxInNetAmount): TaxTypeSearchRowBasic
    {
        $this->taxInNetAmount[] = $taxInNetAmount;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTaxInNetAmount(): array
    {
        return $this->taxInNetAmount;
    }

}
