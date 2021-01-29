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

class PaycheckSearchAdvanced extends SearchRecord {
    /**
     * @var PaycheckSearch
     */
    protected PaycheckSearch $criteria;

    /**
     * @var PaycheckSearchRow
     */
    protected PaycheckSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PaycheckSearch",
        "columns" => "PaycheckSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PaycheckSearch $criteria
     * @return PaycheckSearchAdvanced
     */
    public function setCriteria(PaycheckSearch $criteria): PaycheckSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PaycheckSearch
     */
    public function getCriteria(): PaycheckSearch
    {
        return $this->criteria;
    }

    /**
     * @param PaycheckSearchRow $columns
     * @return PaycheckSearchAdvanced
     */
    public function setColumns(PaycheckSearchRow $columns): PaycheckSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PaycheckSearchRow
     */
    public function getColumns(): PaycheckSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PaycheckSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PaycheckSearchAdvanced
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
     * @return PaycheckSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PaycheckSearchAdvanced
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
