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

class MerchandiseHierarchyNodeSearchRow extends SearchRow {
    /**
     * @var MerchandiseHierarchyNodeSearchRowBasic
     */
    protected MerchandiseHierarchyNodeSearchRowBasic $basic;

    /**
     * @var MerchandiseHierarchyNodeSearchRowBasic
     */
    protected MerchandiseHierarchyNodeSearchRowBasic $parentNodeJoin;

    static $paramtypesmap = array(
        "basic" => "MerchandiseHierarchyNodeSearchRowBasic",
        "parentNodeJoin" => "MerchandiseHierarchyNodeSearchRowBasic",
    );

    /**
     * @param MerchandiseHierarchyNodeSearchRowBasic $basic
     * @return MerchandiseHierarchyNodeSearchRow
     */
    public function setBasic(MerchandiseHierarchyNodeSearchRowBasic $basic): MerchandiseHierarchyNodeSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function getBasic(): MerchandiseHierarchyNodeSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param MerchandiseHierarchyNodeSearchRowBasic $parentNodeJoin
     * @return MerchandiseHierarchyNodeSearchRow
     */
    public function setParentNodeJoin(MerchandiseHierarchyNodeSearchRowBasic $parentNodeJoin): MerchandiseHierarchyNodeSearchRow
    {
        $this->parentNodeJoin = $parentNodeJoin;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function getParentNodeJoin(): MerchandiseHierarchyNodeSearchRowBasic
    {
        return $this->parentNodeJoin;
    }

}
