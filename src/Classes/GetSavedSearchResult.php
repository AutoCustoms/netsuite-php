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

class GetSavedSearchResult {
    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var int
     */
    protected int $totalRecords;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $recordRefList;

    static $paramtypesmap = array(
        "status" => "Status",
        "totalRecords" => "integer",
        "recordRefList" => "RecordRefList",
    );

    /**
     * @param Status $status
     * @return GetSavedSearchResult
     */
    public function setStatus(Status $status): GetSavedSearchResult
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param int $totalRecords
     * @return GetSavedSearchResult
     */
    public function setTotalRecords(int $totalRecords): GetSavedSearchResult
    {
        $this->totalRecords = $totalRecords;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecords(): int
    {
        return $this->totalRecords;
    }

    /**
     * @param RecordRefList $recordRefList
     * @return GetSavedSearchResult
     */
    public function setRecordRefList(RecordRefList $recordRefList): GetSavedSearchResult
    {
        $this->recordRefList = $recordRefList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getRecordRefList(): RecordRefList
    {
        return $this->recordRefList;
    }

}
