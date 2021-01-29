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

class SearchMoreWithIdRequest {
    /**
     * @var string
     */
    protected string $searchId;

    /**
     * @var int
     */
    protected int $pageIndex;

    static $paramtypesmap = array(
        "searchId" => "string",
        "pageIndex" => "integer",
    );

    /**
     * @param string $searchId
     * @return SearchMoreWithIdRequest
     */
    public function setSearchId(string $searchId): SearchMoreWithIdRequest
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
     * @param int $pageIndex
     * @return SearchMoreWithIdRequest
     */
    public function setPageIndex(int $pageIndex): SearchMoreWithIdRequest
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

}
