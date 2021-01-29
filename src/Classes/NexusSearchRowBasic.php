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

class NexusSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

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
     * @var SearchColumnSelectField[]
     */
    protected array $parentNexus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $state;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxAgency;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $taxDateFromFulfillment;

    static $paramtypesmap = array(
        "country" => "SearchColumnEnumSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "parentNexus" => "SearchColumnSelectField[]",
        "state" => "SearchColumnSelectField[]",
        "taxAgency" => "SearchColumnSelectField[]",
        "taxDateFromFulfillment" => "SearchColumnBooleanField[]",
    );

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return NexusSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): NexusSearchRowBasic
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
     * @return NexusSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): NexusSearchRowBasic
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
     * @param SearchColumnSelectField[] $externalId
     * @return NexusSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): NexusSearchRowBasic
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
     * @return NexusSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): NexusSearchRowBasic
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
     * @return NexusSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): NexusSearchRowBasic
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
     * @param SearchColumnSelectField[] $parentNexus
     * @return NexusSearchRowBasic
     */
    public function setParentNexus(SearchColumnSelectField $parentNexus): NexusSearchRowBasic
    {
        $this->parentNexus[] = $parentNexus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParentNexus(): array
    {
        return $this->parentNexus;
    }

    /**
     * @param SearchColumnSelectField[] $state
     * @return NexusSearchRowBasic
     */
    public function setState(SearchColumnSelectField $state): NexusSearchRowBasic
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
     * @param SearchColumnSelectField[] $taxAgency
     * @return NexusSearchRowBasic
     */
    public function setTaxAgency(SearchColumnSelectField $taxAgency): NexusSearchRowBasic
    {
        $this->taxAgency[] = $taxAgency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxAgency(): array
    {
        return $this->taxAgency;
    }

    /**
     * @param SearchColumnBooleanField[] $taxDateFromFulfillment
     * @return NexusSearchRowBasic
     */
    public function setTaxDateFromFulfillment(SearchColumnBooleanField $taxDateFromFulfillment): NexusSearchRowBasic
    {
        $this->taxDateFromFulfillment[] = $taxDateFromFulfillment;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getTaxDateFromFulfillment(): array
    {
        return $this->taxDateFromFulfillment;
    }

}
