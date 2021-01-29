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

class AccountingTransactionSearchAdvanced extends SearchRecord {
    /**
     * @var AccountingTransactionSearch
     */
    protected AccountingTransactionSearch $criteria;

    /**
     * @var AccountingTransactionSearchRow
     */
    protected AccountingTransactionSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "AccountingTransactionSearch",
        "columns" => "AccountingTransactionSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param AccountingTransactionSearch $criteria
     * @return AccountingTransactionSearchAdvanced
     */
    public function setCriteria(AccountingTransactionSearch $criteria): AccountingTransactionSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return AccountingTransactionSearch
     */
    public function getCriteria(): AccountingTransactionSearch
    {
        return $this->criteria;
    }

    /**
     * @param AccountingTransactionSearchRow $columns
     * @return AccountingTransactionSearchAdvanced
     */
    public function setColumns(AccountingTransactionSearchRow $columns): AccountingTransactionSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return AccountingTransactionSearchRow
     */
    public function getColumns(): AccountingTransactionSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return AccountingTransactionSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): AccountingTransactionSearchAdvanced
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
     * @return AccountingTransactionSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): AccountingTransactionSearchAdvanced
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
