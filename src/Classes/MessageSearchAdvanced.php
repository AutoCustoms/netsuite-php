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

class MessageSearchAdvanced extends SearchRecord {
    /**
     * @var MessageSearch
     */
    protected MessageSearch $criteria;

    /**
     * @var MessageSearchRow
     */
    protected MessageSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "MessageSearch",
        "columns" => "MessageSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param MessageSearch $criteria
     * @return MessageSearchAdvanced
     */
    public function setCriteria(MessageSearch $criteria): MessageSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return MessageSearch
     */
    public function getCriteria(): MessageSearch
    {
        return $this->criteria;
    }

    /**
     * @param MessageSearchRow $columns
     * @return MessageSearchAdvanced
     */
    public function setColumns(MessageSearchRow $columns): MessageSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return MessageSearchRow
     */
    public function getColumns(): MessageSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return MessageSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): MessageSearchAdvanced
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
     * @return MessageSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): MessageSearchAdvanced
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
