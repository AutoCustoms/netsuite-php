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

class ItemRevisionSearchRow extends SearchRow {
    /**
     * @var ItemRevisionSearchRowBasic
     */
    protected ItemRevisionSearchRowBasic $basic;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "ItemRevisionSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param ItemRevisionSearchRowBasic $basic
     * @return ItemRevisionSearchRow
     */
    public function setBasic(ItemRevisionSearchRowBasic $basic): ItemRevisionSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemRevisionSearchRowBasic
     */
    public function getBasic(): ItemRevisionSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return ItemRevisionSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): ItemRevisionSearchRow
    {
        $this->itemJoin = $itemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin(): ItemSearchRowBasic
    {
        return $this->itemJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ItemRevisionSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ItemRevisionSearchRow
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin(): EmployeeSearchRowBasic
    {
        return $this->userJoin;
    }

}
