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

class ItemOptionCustomFieldFilterList {
    /**
     * @var ItemOptionCustomFieldFilter[]
     */
    protected array $filter;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "filter" => "ItemOptionCustomFieldFilter[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param ItemOptionCustomFieldFilter[] $filter
     * @return ItemOptionCustomFieldFilterList
     */
    public function setFilter(ItemOptionCustomFieldFilter $filter): ItemOptionCustomFieldFilterList
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * @return ItemOptionCustomFieldFilter[]
     */
    public function getFilter(): array
    {
        return $this->filter;
    }

    /**
     * @param bool $replaceAll
     * @return ItemOptionCustomFieldFilterList
     */
    public function setReplaceAll(bool $replaceAll): ItemOptionCustomFieldFilterList
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
