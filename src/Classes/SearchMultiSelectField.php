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

class SearchMultiSelectField {
    /**
     * @var RecordRef[]
     */
    protected array $searchValue;

    /**
     * @var SearchMultiSelectFieldOperator
     */
    protected SearchMultiSelectFieldOperator $operator;

    static $paramtypesmap = array(
        "searchValue" => "RecordRef[]",
        "operator" => "SearchMultiSelectFieldOperator",
    );

    /**
     * @param RecordRef[] $searchValue
     * @return SearchMultiSelectField
     */
    public function setSearchValue(RecordRef $searchValue): SearchMultiSelectField
    {
        $this->searchValue[] = $searchValue;
        return $this;
    }

    /**
     * @return RecordRef[]
     */
    public function getSearchValue(): array
    {
        return $this->searchValue;
    }

    /**
     * @param SearchMultiSelectFieldOperator $operator
     * @return SearchMultiSelectField
     */
    public function setOperator(SearchMultiSelectFieldOperator $operator): SearchMultiSelectField
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return SearchMultiSelectFieldOperator
     */
    public function getOperator(): SearchMultiSelectFieldOperator
    {
        return $this->operator;
    }

}
