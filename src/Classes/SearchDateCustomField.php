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

class SearchDateCustomField extends SearchCustomField {
    /**
     * @var SearchDate
     */
    protected SearchDate $predefinedSearchValue;

    /**
     * @var string
     */
    protected string $searchValue;

    protected $searchValue2;
    /**
     * @var SearchDateFieldOperator
     */
    protected SearchDateFieldOperator $operator;

    static $paramtypesmap = array(
        "predefinedSearchValue" => "SearchDate",
        "searchValue" => "dateTime",
        "searchValue2" => "dateTime",
        "operator" => "SearchDateFieldOperator",
    );

    /**
     * @param SearchDate $predefinedSearchValue
     * @return SearchDateCustomField
     */
    public function setPredefinedSearchValue(SearchDate $predefinedSearchValue): SearchDateCustomField
    {
        $this->predefinedSearchValue = $predefinedSearchValue;
        return $this;
    }

    /**
     * @return SearchDate
     */
    public function getPredefinedSearchValue(): SearchDate
    {
        return $this->predefinedSearchValue;
    }

    /**
     * @param string $searchValue
     * @return SearchDateCustomField
     */
    public function setSearchValue(string $searchValue): SearchDateCustomField
    {
        $this->searchValue = $searchValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchValue(): string
    {
        return $this->searchValue;
    }

    /**
     * @param SearchDateFieldOperator $operator
     * @return SearchDateCustomField
     */
    public function setOperator(SearchDateFieldOperator $operator): SearchDateCustomField
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return SearchDateFieldOperator
     */
    public function getOperator(): SearchDateFieldOperator
    {
        return $this->operator;
    }

}
