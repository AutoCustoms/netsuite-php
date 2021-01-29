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

class ItemMember {
    /**
     * @var string
     */
    protected string $memberDescr;

    /**
     * @var float
     */
    protected float $componentYield;

    /**
     * @var float
     */
    protected float $bomQuantity;

    /**
     * @var ItemSource
     */
    protected ItemSource $itemSource;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $memberUnit;

    /**
     * @var VsoeDeferral
     */
    protected VsoeDeferral $vsoeDeferral;

    /**
     * @var VsoePermitDiscount
     */
    protected VsoePermitDiscount $vsoePermitDiscount;

    /**
     * @var bool
     */
    protected bool $vsoeDelivered;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxSchedule;

    /**
     * @var string
     */
    protected string $taxcode;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var float
     */
    protected float $taxrate;

    /**
     * @var string
     */
    protected string $effectiveDate;

    /**
     * @var string
     */
    protected string $obsoleteDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $effectiveRevision;

    /**
     * @var RecordRef
     */
    protected RecordRef $obsoleteRevision;

    /**
     * @var int
     */
    protected int $lineNumber;

    /**
     * @var string
     */
    protected string $memberKey;

    static $paramtypesmap = array(
        "memberDescr" => "string",
        "componentYield" => "float",
        "bomQuantity" => "float",
        "itemSource" => "ItemSource",
        "quantity" => "float",
        "memberUnit" => "RecordRef",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "taxSchedule" => "RecordRef",
        "taxcode" => "string",
        "item" => "RecordRef",
        "taxrate" => "float",
        "effectiveDate" => "dateTime",
        "obsoleteDate" => "dateTime",
        "effectiveRevision" => "RecordRef",
        "obsoleteRevision" => "RecordRef",
        "lineNumber" => "integer",
        "memberKey" => "string",
    );

    /**
     * @param string $memberDescr
     * @return ItemMember
     */
    public function setMemberDescr(string $memberDescr): ItemMember
    {
        $this->memberDescr = $memberDescr;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberDescr(): string
    {
        return $this->memberDescr;
    }

    /**
     * @param float $componentYield
     * @return ItemMember
     */
    public function setComponentYield(float $componentYield): ItemMember
    {
        $this->componentYield = $componentYield;
        return $this;
    }

    /**
     * @return float
     */
    public function getComponentYield(): float
    {
        return $this->componentYield;
    }

    /**
     * @param float $bomQuantity
     * @return ItemMember
     */
    public function setBomQuantity(float $bomQuantity): ItemMember
    {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getBomQuantity(): float
    {
        return $this->bomQuantity;
    }

    /**
     * @param ItemSource $itemSource
     * @return ItemMember
     */
    public function setItemSource(ItemSource $itemSource): ItemMember
    {
        $this->itemSource = $itemSource;
        return $this;
    }

    /**
     * @return ItemSource
     */
    public function getItemSource(): ItemSource
    {
        return $this->itemSource;
    }

    /**
     * @param float $quantity
     * @return ItemMember
     */
    public function setQuantity(float $quantity): ItemMember
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param RecordRef $memberUnit
     * @return ItemMember
     */
    public function setMemberUnit(RecordRef $memberUnit): ItemMember
    {
        $this->memberUnit = $memberUnit;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMemberUnit(): RecordRef
    {
        return $this->memberUnit;
    }

    /**
     * @param VsoeDeferral $vsoeDeferral
     * @return ItemMember
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral): ItemMember
    {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * @return VsoeDeferral
     */
    public function getVsoeDeferral(): VsoeDeferral
    {
        return $this->vsoeDeferral;
    }

    /**
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return ItemMember
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount): ItemMember
    {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount(): VsoePermitDiscount
    {
        return $this->vsoePermitDiscount;
    }

    /**
     * @param bool $vsoeDelivered
     * @return ItemMember
     */
    public function setVsoeDelivered(bool $vsoeDelivered): ItemMember
    {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * @return bool
     */
    public function getVsoeDelivered(): bool
    {
        return $this->vsoeDelivered;
    }

    /**
     * @param RecordRef $taxSchedule
     * @return ItemMember
     */
    public function setTaxSchedule(RecordRef $taxSchedule): ItemMember
    {
        $this->taxSchedule = $taxSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxSchedule(): RecordRef
    {
        return $this->taxSchedule;
    }

    /**
     * @param string $taxcode
     * @return ItemMember
     */
    public function setTaxcode(string $taxcode): ItemMember
    {
        $this->taxcode = $taxcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxcode(): string
    {
        return $this->taxcode;
    }

    /**
     * @param RecordRef $item
     * @return ItemMember
     */
    public function setItem(RecordRef $item): ItemMember
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
     * @param float $taxrate
     * @return ItemMember
     */
    public function setTaxrate(float $taxrate): ItemMember
    {
        $this->taxrate = $taxrate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxrate(): float
    {
        return $this->taxrate;
    }

    /**
     * @param string $effectiveDate
     * @return ItemMember
     */
    public function setEffectiveDate(string $effectiveDate): ItemMember
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
     * @return ItemMember
     */
    public function setObsoleteDate(string $obsoleteDate): ItemMember
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
     * @param RecordRef $effectiveRevision
     * @return ItemMember
     */
    public function setEffectiveRevision(RecordRef $effectiveRevision): ItemMember
    {
        $this->effectiveRevision = $effectiveRevision;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEffectiveRevision(): RecordRef
    {
        return $this->effectiveRevision;
    }

    /**
     * @param RecordRef $obsoleteRevision
     * @return ItemMember
     */
    public function setObsoleteRevision(RecordRef $obsoleteRevision): ItemMember
    {
        $this->obsoleteRevision = $obsoleteRevision;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getObsoleteRevision(): RecordRef
    {
        return $this->obsoleteRevision;
    }

    /**
     * @param int $lineNumber
     * @return ItemMember
     */
    public function setLineNumber(int $lineNumber): ItemMember
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber(): int
    {
        return $this->lineNumber;
    }

    /**
     * @param string $memberKey
     * @return ItemMember
     */
    public function setMemberKey(string $memberKey): ItemMember
    {
        $this->memberKey = $memberKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberKey(): string
    {
        return $this->memberKey;
    }

}
