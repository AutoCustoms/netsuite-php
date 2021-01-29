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

class GetPostingTransactionSummaryRequest {
    /**
     * @var PostingTransactionSummaryField
     */
    protected PostingTransactionSummaryField $fields;

    /**
     * @var PostingTransactionSummaryFilter
     */
    protected PostingTransactionSummaryFilter $filters;

    /**
     * @var int
     */
    protected int $pageIndex;

    /**
     * @var string
     */
    protected string $operationId;

    static $paramtypesmap = array(
        "fields" => "PostingTransactionSummaryField",
        "filters" => "PostingTransactionSummaryFilter",
        "pageIndex" => "integer",
        "operationId" => "string",
    );

    /**
     * @param PostingTransactionSummaryField $fields
     * @return GetPostingTransactionSummaryRequest
     */
    public function setFields(PostingTransactionSummaryField $fields): GetPostingTransactionSummaryRequest
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return PostingTransactionSummaryField
     */
    public function getFields(): PostingTransactionSummaryField
    {
        return $this->fields;
    }

    /**
     * @param PostingTransactionSummaryFilter $filters
     * @return GetPostingTransactionSummaryRequest
     */
    public function setFilters(PostingTransactionSummaryFilter $filters): GetPostingTransactionSummaryRequest
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @return PostingTransactionSummaryFilter
     */
    public function getFilters(): PostingTransactionSummaryFilter
    {
        return $this->filters;
    }

    /**
     * @param int $pageIndex
     * @return GetPostingTransactionSummaryRequest
     */
    public function setPageIndex(int $pageIndex): GetPostingTransactionSummaryRequest
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
     * @return GetPostingTransactionSummaryRequest
     */
    public function setOperationId(string $operationId): GetPostingTransactionSummaryRequest
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

}
