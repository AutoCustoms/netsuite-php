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

class SearchPreferences {
    /**
     * @var bool
     */
    protected bool $bodyFieldsOnly;

    /**
     * @var bool
     */
    protected bool $returnSearchColumns;

    /**
     * @var int
     */
    protected int $pageSize;

    static $paramtypesmap = array(
        "bodyFieldsOnly" => "boolean",
        "returnSearchColumns" => "boolean",
        "pageSize" => "integer",
    );

    /**
     * @param bool $bodyFieldsOnly
     * @return SearchPreferences
     */
    public function setBodyFieldsOnly(bool $bodyFieldsOnly): SearchPreferences
    {
        $this->bodyFieldsOnly = $bodyFieldsOnly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBodyFieldsOnly(): bool
    {
        return $this->bodyFieldsOnly;
    }

    /**
     * @param bool $returnSearchColumns
     * @return SearchPreferences
     */
    public function setReturnSearchColumns(bool $returnSearchColumns): SearchPreferences
    {
        $this->returnSearchColumns = $returnSearchColumns;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReturnSearchColumns(): bool
    {
        return $this->returnSearchColumns;
    }

    /**
     * @param int $pageSize
     * @return SearchPreferences
     */
    public function setPageSize(int $pageSize): SearchPreferences
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

}
