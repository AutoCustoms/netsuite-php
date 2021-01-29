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

class PriceLevelSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $discountPct;

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
     * @var SearchColumnBooleanField[]
     */
    protected array $isOnline;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    static $paramtypesmap = array(
        "discountPct" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isOnline" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnDoubleField[] $discountPct
     * @return PriceLevelSearchRowBasic
     */
    public function setDiscountPct(SearchColumnDoubleField $discountPct): PriceLevelSearchRowBasic
    {
        $this->discountPct[] = $discountPct;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDiscountPct(): array
    {
        return $this->discountPct;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return PriceLevelSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): PriceLevelSearchRowBasic
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
     * @return PriceLevelSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): PriceLevelSearchRowBasic
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
     * @return PriceLevelSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): PriceLevelSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isOnline
     * @return PriceLevelSearchRowBasic
     */
    public function setIsOnline(SearchColumnBooleanField $isOnline): PriceLevelSearchRowBasic
    {
        $this->isOnline[] = $isOnline;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOnline(): array
    {
        return $this->isOnline;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return PriceLevelSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): PriceLevelSearchRowBasic
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

}
