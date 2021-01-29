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

class ItemRevisionSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDateField[]
     */
    protected array $effectiveDate;

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
    protected array $item;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $obsoleteDate;

    static $paramtypesmap = array(
        "effectiveDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "obsoleteDate" => "SearchColumnDateField[]",
    );

    /**
     * @param SearchColumnDateField[] $effectiveDate
     * @return ItemRevisionSearchRowBasic
     */
    public function setEffectiveDate(SearchColumnDateField $effectiveDate): ItemRevisionSearchRowBasic
    {
        $this->effectiveDate[] = $effectiveDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveDate(): array
    {
        return $this->effectiveDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ItemRevisionSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ItemRevisionSearchRowBasic
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
     * @return ItemRevisionSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ItemRevisionSearchRowBasic
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
     * @return ItemRevisionSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): ItemRevisionSearchRowBasic
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
     * @param SearchColumnSelectField[] $item
     * @return ItemRevisionSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): ItemRevisionSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return ItemRevisionSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): ItemRevisionSearchRowBasic
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
     * @param SearchColumnStringField[] $name
     * @return ItemRevisionSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): ItemRevisionSearchRowBasic
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
     * @param SearchColumnDateField[] $obsoleteDate
     * @return ItemRevisionSearchRowBasic
     */
    public function setObsoleteDate(SearchColumnDateField $obsoleteDate): ItemRevisionSearchRowBasic
    {
        $this->obsoleteDate[] = $obsoleteDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getObsoleteDate(): array
    {
        return $this->obsoleteDate;
    }

}
