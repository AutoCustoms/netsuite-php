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

class CrmCustomFieldFilterList {
    /**
     * @var CrmCustomFieldFilter[]
     */
    protected array $filter;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "filter" => "CrmCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param CrmCustomFieldFilter[] $filter
     * @return CrmCustomFieldFilterList
     */
    public function setFilter(CrmCustomFieldFilter $filter): CrmCustomFieldFilterList
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * @return CrmCustomFieldFilter[]
     */
    public function getFilter(): array
    {
        return $this->filter;
    }

    /**
     * @param bool $replaceAll
     * @return CrmCustomFieldFilterList
     */
    public function setReplaceAll(bool $replaceAll): CrmCustomFieldFilterList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
