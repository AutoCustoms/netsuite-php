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

class AccountSearchAdvanced extends SearchRecord {
    /**
     * @var AccountSearch
     */
    protected AccountSearch $criteria;

    /**
     * @var AccountSearchRow
     */
    protected AccountSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "AccountSearch",
        "columns" => "AccountSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param AccountSearch $criteria
     * @return AccountSearchAdvanced
     */
    public function setCriteria(AccountSearch $criteria): AccountSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return AccountSearch
     */
    public function getCriteria(): AccountSearch
    {
        return $this->criteria;
    }

    /**
     * @param AccountSearchRow $columns
     * @return AccountSearchAdvanced
     */
    public function setColumns(AccountSearchRow $columns): AccountSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return AccountSearchRow
     */
    public function getColumns(): AccountSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return AccountSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): AccountSearchAdvanced
    {
        $this->savedSearchId = $savedSearchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchId(): string
    {
        return $this->savedSearchId;
    }

    /**
     * @param string $savedSearchScriptId
     * @return AccountSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): AccountSearchAdvanced
    {
        $this->savedSearchScriptId = $savedSearchScriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchScriptId(): string
    {
        return $this->savedSearchScriptId;
    }

}
