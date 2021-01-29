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

class ItemRevision extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $effectiveDate;

    /**
     * @var string
     */
    protected string $obsoleteDate;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var bool
     */
    protected bool $inactive;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "name" => "string",
        "effectiveDate" => "dateTime",
        "obsoleteDate" => "dateTime",
        "memo" => "string",
        "inactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $item
     * @return ItemRevision
     */
    public function setItem(RecordRef $item): ItemRevision
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param string $name
     * @return ItemRevision
     */
    public function setName(string $name): ItemRevision
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
     * @param string $effectiveDate
     * @return ItemRevision
     */
    public function setEffectiveDate(string $effectiveDate): ItemRevision
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    /**
     * @param string $obsoleteDate
     * @return ItemRevision
     */
    public function setObsoleteDate(string $obsoleteDate): ItemRevision
    {
        $this->obsoleteDate = $obsoleteDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getObsoleteDate(): string
    {
        return $this->obsoleteDate;
    }

    /**
     * @param string $memo
     * @return ItemRevision
     */
    public function setMemo(string $memo): ItemRevision
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
     * @param bool $inactive
     * @return ItemRevision
     */
    public function setInactive(bool $inactive): ItemRevision
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInactive(): bool
    {
        return $this->inactive;
    }

    /**
     * @param string $internalId
     * @return ItemRevision
     */
    public function setInternalId(string $internalId): ItemRevision
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
     * @return ItemRevision
     */
    public function setExternalId(string $externalId): ItemRevision
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
