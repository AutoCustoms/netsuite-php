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

class GetPostingTransactionSummaryResult {
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
    protected string $operationId;

    /**
     * @var PostingTransactionSummaryList
     */
    protected PostingTransactionSummaryList $postingTransactionSummaryList;

    static $paramtypesmap = array(
        "status" => "Status",
        "totalRecords" => "integer",
        "pageSize" => "integer",
        "totalPages" => "integer",
        "pageIndex" => "integer",
        "operationId" => "string",
        "postingTransactionSummaryList" => "PostingTransactionSummaryList",
    );

    /**
     * @param Status $status
     * @return GetPostingTransactionSummaryResult
     */
    public function setStatus(Status $status): GetPostingTransactionSummaryResult
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
     * @return GetPostingTransactionSummaryResult
     */
    public function setTotalRecords(int $totalRecords): GetPostingTransactionSummaryResult
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
     * @return GetPostingTransactionSummaryResult
     */
    public function setPageSize(int $pageSize): GetPostingTransactionSummaryResult
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
     * @return GetPostingTransactionSummaryResult
     */
    public function setTotalPages(int $totalPages): GetPostingTransactionSummaryResult
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
     * @return GetPostingTransactionSummaryResult
     */
    public function setPageIndex(int $pageIndex): GetPostingTransactionSummaryResult
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
     * @param string $operationId
     * @return GetPostingTransactionSummaryResult
     */
    public function setOperationId(string $operationId): GetPostingTransactionSummaryResult
    {
        $this->operationId = $operationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperationId(): string
    {
        return $this->operationId;
    }

    /**
     * @param PostingTransactionSummaryList $postingTransactionSummaryList
     * @return GetPostingTransactionSummaryResult
     */
    public function setPostingTransactionSummaryList(PostingTransactionSummaryList $postingTransactionSummaryList): GetPostingTransactionSummaryResult
    {
        $this->postingTransactionSummaryList = $postingTransactionSummaryList;
        return $this;
    }

    /**
     * @return PostingTransactionSummaryList
     */
    public function getPostingTransactionSummaryList(): PostingTransactionSummaryList
    {
        return $this->postingTransactionSummaryList;
    }

}
