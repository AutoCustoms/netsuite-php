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

class CustomSearchJoin {
    /**
     * @var CustomizationRef
     */
    protected CustomizationRef $customizationRef;

    /**
     * @var SearchRecordBasic
     */
    protected SearchRecordBasic $searchRecordBasic;

    static $paramtypesmap = array(
        "customizationRef" => "CustomizationRef",
        "searchRecordBasic" => "SearchRecordBasic",
    );

    /**
     * @param CustomizationRef $customizationRef
     * @return CustomSearchJoin
     */
    public function setCustomizationRef(CustomizationRef $customizationRef): CustomSearchJoin
    {
        $this->customizationRef = $customizationRef;
        return $this;
    }

    /**
     * @return CustomizationRef
     */
    public function getCustomizationRef(): CustomizationRef
    {
        return $this->customizationRef;
    }

    /**
     * @param SearchRecordBasic $searchRecordBasic
     * @return CustomSearchJoin
     */
    public function setSearchRecordBasic(SearchRecordBasic $searchRecordBasic): CustomSearchJoin
    {
        $this->searchRecordBasic = $searchRecordBasic;
        return $this;
    }

    /**
     * @return SearchRecordBasic
     */
    public function getSearchRecordBasic(): SearchRecordBasic
    {
        return $this->searchRecordBasic;
    }

}
