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

class SearchResult {
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
     * @var string
     */
    protected string $searchId;

    /**
     * @var RecordList
     */
    protected RecordList $recordList;

    /**
     * @var SearchRowList
     */
    protected SearchRowList $searchRowList;

    static $paramtypesmap = array(
        "status" => "Status",
        "totalRecords" => "integer",
        "pageSize" => "integer",
        "totalPages" => "integer",
        "pageIndex" => "integer",
        "searchId" => "string",
        "recordList" => "RecordList",
        "searchRowList" => "SearchRowList",
    );

    /**
     * @param Status $status
     * @return SearchResult
     */
    public function setStatus(Status $status): SearchResult
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
     * @return SearchResult
     */
    public function setTotalRecords(int $totalRecords): SearchResult
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
     * @return SearchResult
     */
    public function setPageSize(int $pageSize): SearchResult
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
     * @return SearchResult
     */
    public function setTotalPages(int $totalPages): SearchResult
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
     * @return SearchResult
     */
    public function setPageIndex(int $pageIndex): SearchResult
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
     * @param string $searchId
     * @return SearchResult
     */
    public function setSearchId(string $searchId): SearchResult
    {
        $this->searchId = $searchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchId(): string
    {
        return $this->searchId;
    }

    /**
     * @param RecordList $recordList
     * @return SearchResult
     */
    public function setRecordList(RecordList $recordList): SearchResult
    {
        $this->recordList = $recordList;
        return $this;
    }

    /**
     * @return RecordList
     */
    public function getRecordList(): RecordList
    {
        return $this->recordList;
    }

    /**
     * @param SearchRowList $searchRowList
     * @return SearchResult
     */
    public function setSearchRowList(SearchRowList $searchRowList): SearchResult
    {
        $this->searchRowList = $searchRowList;
        return $this;
    }

    /**
     * @return SearchRowList
     */
    public function getSearchRowList(): SearchRowList
    {
        return $this->searchRowList;
    }

}
