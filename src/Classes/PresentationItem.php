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

class PresentationItem {
    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var PresentationItemType
     */
    protected PresentationItemType $itemType;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var float
     */
    protected float $onlinePrice;

    /**
     * @var float
     */
    protected float $basePrice;

    static $paramtypesmap = array(
        "item" => "RecordRef",
        "itemType" => "PresentationItemType",
        "description" => "string",
        "onlinePrice" => "float",
        "basePrice" => "float",
    );

    /**
     * @param RecordRef $item
     * @return PresentationItem
     */
    public function setItem(RecordRef $item): PresentationItem
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
     * @param PresentationItemType $itemType
     * @return PresentationItem
     */
    public function setItemType(PresentationItemType $itemType): PresentationItem
    {
        $this->itemType = $itemType;
        return $this;
    }

    /**
     * @return PresentationItemType
     */
    public function getItemType(): PresentationItemType
    {
        return $this->itemType;
    }

    /**
     * @param string $description
     * @return PresentationItem
     */
    public function setDescription(string $description): PresentationItem
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param float $onlinePrice
     * @return PresentationItem
     */
    public function setOnlinePrice(float $onlinePrice): PresentationItem
    {
        $this->onlinePrice = $onlinePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getOnlinePrice(): float
    {
        return $this->onlinePrice;
    }

    /**
     * @param float $basePrice
     * @return PresentationItem
     */
    public function setBasePrice(float $basePrice): PresentationItem
    {
        $this->basePrice = $basePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice(): float
    {
        return $this->basePrice;
    }

}
