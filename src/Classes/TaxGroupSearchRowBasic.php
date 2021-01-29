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

class TaxGroupSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $city;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $county;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $includeChildren;

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
     * @var SearchColumnStringField[]
     */
    protected array $itemId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $piggyBack;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $rate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $state;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $stateDisplayName;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiaryNoHierarchy;

    protected $taxItem1;
    protected $taxItem2;
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxType;

    protected $unitPrice1;
    protected $unitPrice2;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $zip;

    static $paramtypesmap = array(
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "county" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "includeChildren" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefault" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "itemId" => "SearchColumnStringField[]",
        "piggyBack" => "SearchColumnBooleanField[]",
        "rate" => "SearchColumnDoubleField[]",
        "state" => "SearchColumnSelectField[]",
        "stateDisplayName" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subsidiaryNoHierarchy" => "SearchColumnSelectField[]",
        "taxItem1" => "SearchColumnSelectField[]",
        "taxItem2" => "SearchColumnSelectField[]",
        "taxType" => "SearchColumnSelectField[]",
        "unitPrice1" => "SearchColumnDoubleField[]",
        "unitPrice2" => "SearchColumnDoubleField[]",
        "zip" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnStringField[] $city
     * @return TaxGroupSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): TaxGroupSearchRowBasic
    {
        $this->city[] = $city;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCity(): array
    {
        return $this->city;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return TaxGroupSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): TaxGroupSearchRowBasic
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
     * @param SearchColumnStringField[] $county
     * @return TaxGroupSearchRowBasic
     */
    public function setCounty(SearchColumnStringField $county): TaxGroupSearchRowBasic
    {
        $this->county[] = $county;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCounty(): array
    {
        return $this->county;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return TaxGroupSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): TaxGroupSearchRowBasic
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
     * @param SearchColumnBooleanField[] $includeChildren
     * @return TaxGroupSearchRowBasic
     */
    public function setIncludeChildren(SearchColumnBooleanField $includeChildren): TaxGroupSearchRowBasic
    {
        $this->includeChildren[] = $includeChildren;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeChildren(): array
    {
        return $this->includeChildren;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return TaxGroupSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): TaxGroupSearchRowBasic
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
     * @return TaxGroupSearchRowBasic
     */
    public function setIsDefault(SearchColumnBooleanField $isDefault): TaxGroupSearchRowBasic
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
     * @return TaxGroupSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): TaxGroupSearchRowBasic
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
     * @param SearchColumnStringField[] $itemId
     * @return TaxGroupSearchRowBasic
     */
    public function setItemId(SearchColumnStringField $itemId): TaxGroupSearchRowBasic
    {
        $this->itemId[] = $itemId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemId(): array
    {
        return $this->itemId;
    }

    /**
     * @param SearchColumnBooleanField[] $piggyBack
     * @return TaxGroupSearchRowBasic
     */
    public function setPiggyBack(SearchColumnBooleanField $piggyBack): TaxGroupSearchRowBasic
    {
        $this->piggyBack[] = $piggyBack;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPiggyBack(): array
    {
        return $this->piggyBack;
    }

    /**
     * @param SearchColumnDoubleField[] $rate
     * @return TaxGroupSearchRowBasic
     */
    public function setRate(SearchColumnDoubleField $rate): TaxGroupSearchRowBasic
    {
        $this->rate[] = $rate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getRate(): array
    {
        return $this->rate;
    }

    /**
     * @param SearchColumnSelectField[] $state
     * @return TaxGroupSearchRowBasic
     */
    public function setState(SearchColumnSelectField $state): TaxGroupSearchRowBasic
    {
        $this->state[] = $state;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getState(): array
    {
        return $this->state;
    }

    /**
     * @param SearchColumnStringField[] $stateDisplayName
     * @return TaxGroupSearchRowBasic
     */
    public function setStateDisplayName(SearchColumnStringField $stateDisplayName): TaxGroupSearchRowBasic
    {
        $this->stateDisplayName[] = $stateDisplayName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getStateDisplayName(): array
    {
        return $this->stateDisplayName;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return TaxGroupSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): TaxGroupSearchRowBasic
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
     * @param SearchColumnSelectField[] $subsidiaryNoHierarchy
     * @return TaxGroupSearchRowBasic
     */
    public function setSubsidiaryNoHierarchy(SearchColumnSelectField $subsidiaryNoHierarchy): TaxGroupSearchRowBasic
    {
        $this->subsidiaryNoHierarchy[] = $subsidiaryNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiaryNoHierarchy(): array
    {
        return $this->subsidiaryNoHierarchy;
    }

    /**
     * @param SearchColumnSelectField[] $taxType
     * @return TaxGroupSearchRowBasic
     */
    public function setTaxType(SearchColumnSelectField $taxType): TaxGroupSearchRowBasic
    {
        $this->taxType[] = $taxType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxType(): array
    {
        return $this->taxType;
    }

    /**
     * @param SearchColumnStringField[] $zip
     * @return TaxGroupSearchRowBasic
     */
    public function setZip(SearchColumnStringField $zip): TaxGroupSearchRowBasic
    {
        $this->zip[] = $zip;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZip(): array
    {
        return $this->zip;
    }

}
