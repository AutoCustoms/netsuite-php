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

class ManufacturingOperationTaskSearchAdvanced extends SearchRecord {
    /**
     * @var ManufacturingOperationTaskSearch
     */
    protected ManufacturingOperationTaskSearch $criteria;

    /**
     * @var ManufacturingOperationTaskSearchRow
     */
    protected ManufacturingOperationTaskSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ManufacturingOperationTaskSearch",
        "columns" => "ManufacturingOperationTaskSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ManufacturingOperationTaskSearch $criteria
     * @return ManufacturingOperationTaskSearchAdvanced
     */
    public function setCriteria(ManufacturingOperationTaskSearch $criteria): ManufacturingOperationTaskSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearch
     */
    public function getCriteria(): ManufacturingOperationTaskSearch
    {
        return $this->criteria;
    }

    /**
     * @param ManufacturingOperationTaskSearchRow $columns
     * @return ManufacturingOperationTaskSearchAdvanced
     */
    public function setColumns(ManufacturingOperationTaskSearchRow $columns): ManufacturingOperationTaskSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchRow
     */
    public function getColumns(): ManufacturingOperationTaskSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ManufacturingOperationTaskSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ManufacturingOperationTaskSearchAdvanced
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
     * @return ManufacturingOperationTaskSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ManufacturingOperationTaskSearchAdvanced
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
