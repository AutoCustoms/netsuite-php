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

class ItemBinNumberSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $binNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityAvailable;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantityOnHand;

    static $paramtypesmap = array(
        "binNumber" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "quantityAvailable" => "SearchDoubleField",
        "quantityOnHand" => "SearchDoubleField",
    );

    /**
     * @param SearchMultiSelectField $binNumber
     * @return ItemBinNumberSearchBasic
     */
    public function setBinNumber(SearchMultiSelectField $binNumber): ItemBinNumberSearchBasic
    {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBinNumber(): SearchMultiSelectField
    {
        return $this->binNumber;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return ItemBinNumberSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): ItemBinNumberSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchDoubleField $quantityAvailable
     * @return ItemBinNumberSearchBasic
     */
    public function setQuantityAvailable(SearchDoubleField $quantityAvailable): ItemBinNumberSearchBasic
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityAvailable(): SearchDoubleField
    {
        return $this->quantityAvailable;
    }

    /**
     * @param SearchDoubleField $quantityOnHand
     * @return ItemBinNumberSearchBasic
     */
    public function setQuantityOnHand(SearchDoubleField $quantityOnHand): ItemBinNumberSearchBasic
    {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantityOnHand(): SearchDoubleField
    {
        return $this->quantityOnHand;
    }

}
