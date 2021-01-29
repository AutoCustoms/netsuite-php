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

class ClassificationSearchAdvanced extends SearchRecord {
    /**
     * @var ClassificationSearch
     */
    protected ClassificationSearch $criteria;

    /**
     * @var ClassificationSearchRow
     */
    protected ClassificationSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ClassificationSearch",
        "columns" => "ClassificationSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ClassificationSearch $criteria
     * @return ClassificationSearchAdvanced
     */
    public function setCriteria(ClassificationSearch $criteria): ClassificationSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ClassificationSearch
     */
    public function getCriteria(): ClassificationSearch
    {
        return $this->criteria;
    }

    /**
     * @param ClassificationSearchRow $columns
     * @return ClassificationSearchAdvanced
     */
    public function setColumns(ClassificationSearchRow $columns): ClassificationSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ClassificationSearchRow
     */
    public function getColumns(): ClassificationSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ClassificationSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ClassificationSearchAdvanced
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
     * @return ClassificationSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ClassificationSearchAdvanced
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
