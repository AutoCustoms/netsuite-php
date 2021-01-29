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

class ItemRevisionSearch extends SearchRecord {
    /**
     * @var ItemRevisionSearchBasic
     */
    protected ItemRevisionSearchBasic $basic;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "ItemRevisionSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );

    /**
     * @param ItemRevisionSearchBasic $basic
     * @return ItemRevisionSearch
     */
    public function setBasic(ItemRevisionSearchBasic $basic): ItemRevisionSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemRevisionSearchBasic
     */
    public function getBasic(): ItemRevisionSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return ItemRevisionSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): ItemRevisionSearch
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin(): ItemSearchBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ItemRevisionSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ItemRevisionSearch
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin(): EmployeeSearchBasic
    {
        return $this->userJoin;
    }

}
