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

class SearchDoubleField {
    /**
     * @var float
     */
    protected float $searchValue;

    protected $searchValue2;
    /**
     * @var SearchDoubleFieldOperator
     */
    protected SearchDoubleFieldOperator $operator;

    static $paramtypesmap = array(
        "searchValue" => "float",
        "searchValue2" => "float",
        "operator" => "SearchDoubleFieldOperator",
    );

    /**
     * @param float $searchValue
     * @return SearchDoubleField
     */
    public function setSearchValue(float $searchValue): SearchDoubleField
    {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getSearchValue(): float
    {
        return $this->searchValue;
    }

    /**
     * @param SearchDoubleFieldOperator $operator
     * @return SearchDoubleField
     */
    public function setOperator(SearchDoubleFieldOperator $operator): SearchDoubleField
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return SearchDoubleFieldOperator
     */
    public function getOperator(): SearchDoubleFieldOperator
    {
        return $this->operator;
    }

}
