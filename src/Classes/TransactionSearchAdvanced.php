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

class TransactionSearchAdvanced extends SearchRecord {
    /**
     * @var TransactionSearch
     */
    protected TransactionSearch $criteria;

    /**
     * @var TransactionSearchRow
     */
    protected TransactionSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "TransactionSearch",
        "columns" => "TransactionSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param TransactionSearch $criteria
     * @return TransactionSearchAdvanced
     */
    public function setCriteria(TransactionSearch $criteria): TransactionSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return TransactionSearch
     */
    public function getCriteria(): TransactionSearch
    {
        return $this->criteria;
    }

    /**
     * @param TransactionSearchRow $columns
     * @return TransactionSearchAdvanced
     */
    public function setColumns(TransactionSearchRow $columns): TransactionSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return TransactionSearchRow
     */
    public function getColumns(): TransactionSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return TransactionSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): TransactionSearchAdvanced
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
     * @return TransactionSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): TransactionSearchAdvanced
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
