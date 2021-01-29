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

class ItemAvailabilityFilter {
    /**
     * @var RecordRefList
     */
    protected RecordRefList $item;

    /**
     * @var string
     */
    protected string $lastQtyAvailableChange;

    static $paramtypesmap = array(
        "item" => "RecordRefList",
        "lastQtyAvailableChange" => "dateTime",
    );

    /**
     * @param RecordRefList $item
     * @return ItemAvailabilityFilter
     */
    public function setItem(RecordRefList $item): ItemAvailabilityFilter
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItem(): RecordRefList
    {
        return $this->item;
    }

    /**
     * @param string $lastQtyAvailableChange
     * @return ItemAvailabilityFilter
     */
    public function setLastQtyAvailableChange(string $lastQtyAvailableChange): ItemAvailabilityFilter
    {
        $this->lastQtyAvailableChange = $lastQtyAvailableChange;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastQtyAvailableChange(): string
    {
        return $this->lastQtyAvailableChange;
    }

}
