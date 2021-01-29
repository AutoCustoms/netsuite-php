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

class PhoneCallSearchAdvanced extends SearchRecord {
    /**
     * @var PhoneCallSearch
     */
    protected PhoneCallSearch $criteria;

    /**
     * @var PhoneCallSearchRow
     */
    protected PhoneCallSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PhoneCallSearch",
        "columns" => "PhoneCallSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PhoneCallSearch $criteria
     * @return PhoneCallSearchAdvanced
     */
    public function setCriteria(PhoneCallSearch $criteria): PhoneCallSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PhoneCallSearch
     */
    public function getCriteria(): PhoneCallSearch
    {
        return $this->criteria;
    }

    /**
     * @param PhoneCallSearchRow $columns
     * @return PhoneCallSearchAdvanced
     */
    public function setColumns(PhoneCallSearchRow $columns): PhoneCallSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PhoneCallSearchRow
     */
    public function getColumns(): PhoneCallSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PhoneCallSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PhoneCallSearchAdvanced
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
     * @return PhoneCallSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PhoneCallSearchAdvanced
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
