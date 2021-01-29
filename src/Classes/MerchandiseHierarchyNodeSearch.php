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

class MerchandiseHierarchyNodeSearch extends SearchRecord {
    /**
     * @var MerchandiseHierarchyNodeSearchBasic
     */
    protected MerchandiseHierarchyNodeSearchBasic $basic;

    /**
     * @var MerchandiseHierarchyNodeSearchBasic
     */
    protected MerchandiseHierarchyNodeSearchBasic $parentNodeJoin;

    static $paramtypesmap = array(
        "basic" => "MerchandiseHierarchyNodeSearchBasic",
        "parentNodeJoin" => "MerchandiseHierarchyNodeSearchBasic",
    );

    /**
     * @param MerchandiseHierarchyNodeSearchBasic $basic
     * @return MerchandiseHierarchyNodeSearch
     */
    public function setBasic(MerchandiseHierarchyNodeSearchBasic $basic): MerchandiseHierarchyNodeSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function getBasic(): MerchandiseHierarchyNodeSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param MerchandiseHierarchyNodeSearchBasic $parentNodeJoin
     * @return MerchandiseHierarchyNodeSearch
     */
    public function setParentNodeJoin(MerchandiseHierarchyNodeSearchBasic $parentNodeJoin): MerchandiseHierarchyNodeSearch
    {
        $this->parentNodeJoin = $parentNodeJoin;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function getParentNodeJoin(): MerchandiseHierarchyNodeSearchBasic
    {
        return $this->parentNodeJoin;
    }

}
