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

class ContactRoleSearchAdvanced extends SearchRecord {
    /**
     * @var ContactRoleSearch
     */
    protected ContactRoleSearch $criteria;

    /**
     * @var ContactRoleSearchRow
     */
    protected ContactRoleSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ContactRoleSearch",
        "columns" => "ContactRoleSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ContactRoleSearch $criteria
     * @return ContactRoleSearchAdvanced
     */
    public function setCriteria(ContactRoleSearch $criteria): ContactRoleSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ContactRoleSearch
     */
    public function getCriteria(): ContactRoleSearch
    {
        return $this->criteria;
    }

    /**
     * @param ContactRoleSearchRow $columns
     * @return ContactRoleSearchAdvanced
     */
    public function setColumns(ContactRoleSearchRow $columns): ContactRoleSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ContactRoleSearchRow
     */
    public function getColumns(): ContactRoleSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ContactRoleSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ContactRoleSearchAdvanced
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
     * @return ContactRoleSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ContactRoleSearchAdvanced
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
