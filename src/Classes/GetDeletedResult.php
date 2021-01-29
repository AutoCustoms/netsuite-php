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

class GetDeletedResult {
    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var int
     */
    protected int $totalRecords;

    /**
     * @var int
     */
    protected int $pageSize;

    /**
     * @var int
     */
    protected int $totalPages;

    /**
     * @var int
     */
    protected int $pageIndex;

    /**
     * @var DeletedRecordList
     */
    protected DeletedRecordList $deletedRecordList;

    static $paramtypesmap = array(
        "status" => "Status",
        "totalRecords" => "integer",
        "pageSize" => "integer",
        "totalPages" => "integer",
        "pageIndex" => "integer",
        "deletedRecordList" => "DeletedRecordList",
    );

    /**
     * @param Status $status
     * @return GetDeletedResult
     */
    public function setStatus(Status $status): GetDeletedResult
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
     * @return GetDeletedResult
     */
    public function setTotalRecords(int $totalRecords): GetDeletedResult
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
     * @param int $pageSize
     * @return GetDeletedResult
     */
    public function setPageSize(int $pageSize): GetDeletedResult
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $totalPages
     * @return GetDeletedResult
     */
    public function setTotalPages(int $totalPages): GetDeletedResult
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @param int $pageIndex
     * @return GetDeletedResult
     */
    public function setPageIndex(int $pageIndex): GetDeletedResult
    {
        $this->pageIndex = $pageIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageIndex(): int
    {
        return $this->pageIndex;
    }

    /**
     * @param DeletedRecordList $deletedRecordList
     * @return GetDeletedResult
     */
    public function setDeletedRecordList(DeletedRecordList $deletedRecordList): GetDeletedResult
    {
        $this->deletedRecordList = $deletedRecordList;
        return $this;
    }

    /**
     * @return DeletedRecordList
     */
    public function getDeletedRecordList(): DeletedRecordList
    {
        return $this->deletedRecordList;
    }

}
