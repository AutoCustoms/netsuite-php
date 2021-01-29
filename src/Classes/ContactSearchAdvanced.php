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

class ContactSearchAdvanced extends SearchRecord {
    /**
     * @var ContactSearch
     */
    protected ContactSearch $criteria;

    /**
     * @var ContactSearchRow
     */
    protected ContactSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ContactSearch",
        "columns" => "ContactSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ContactSearch $criteria
     * @return ContactSearchAdvanced
     */
    public function setCriteria(ContactSearch $criteria): ContactSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ContactSearch
     */
    public function getCriteria(): ContactSearch
    {
        return $this->criteria;
    }

    /**
     * @param ContactSearchRow $columns
     * @return ContactSearchAdvanced
     */
    public function setColumns(ContactSearchRow $columns): ContactSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ContactSearchRow
     */
    public function getColumns(): ContactSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ContactSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ContactSearchAdvanced
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
     * @return ContactSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ContactSearchAdvanced
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
