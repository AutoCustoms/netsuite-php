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

class GetSelectValueResult {
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
    protected int $totalPages;

    /**
     * @var BaseRefList
     */
    protected BaseRefList $baseRefList;

    static $paramtypesmap = array(
        "status" => "Status",
        "totalRecords" => "integer",
        "totalPages" => "integer",
        "baseRefList" => "BaseRefList",
    );

    /**
     * @param Status $status
     * @return GetSelectValueResult
     */
    public function setStatus(Status $status): GetSelectValueResult
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
     * @return GetSelectValueResult
     */
    public function setTotalRecords(int $totalRecords): GetSelectValueResult
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
     * @param int $totalPages
     * @return GetSelectValueResult
     */
    public function setTotalPages(int $totalPages): GetSelectValueResult
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
     * @param BaseRefList $baseRefList
     * @return GetSelectValueResult
     */
    public function setBaseRefList(BaseRefList $baseRefList): GetSelectValueResult
    {
        $this->baseRefList = $baseRefList;
        return $this;
    }

    /**
     * @return BaseRefList
     */
    public function getBaseRefList(): BaseRefList
    {
        return $this->baseRefList;
    }

}
