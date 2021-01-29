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

class BinSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $binNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $inactive;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "binNumber" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "inactive" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "location" => "SearchColumnStringField[]",
        "memo" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $binNumber
     * @return BinSearchRowBasic
     */
    public function setBinNumber(SearchColumnStringField $binNumber): BinSearchRowBasic
    {
        $this->binNumber[] = $binNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBinNumber(): array
    {
        return $this->binNumber;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return BinSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): BinSearchRowBasic
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
     * @param SearchColumnBooleanField[] $inactive
     * @return BinSearchRowBasic
     */
    public function setInactive(SearchColumnBooleanField $inactive): BinSearchRowBasic
    {
        $this->inactive[] = $inactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInactive(): array
    {
        return $this->inactive;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return BinSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): BinSearchRowBasic
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
     * @param SearchColumnStringField[] $location
     * @return BinSearchRowBasic
     */
    public function setLocation(SearchColumnStringField $location): BinSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return BinSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): BinSearchRowBasic
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
     * @param SearchColumnCustomFieldList $customFieldList
     * @return BinSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): BinSearchRowBasic
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
