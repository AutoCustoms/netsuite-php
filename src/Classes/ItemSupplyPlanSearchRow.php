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

class ItemSupplyPlanSearchRow extends SearchRow {
    /**
     * @var ItemSupplyPlanSearchRowBasic
     */
    protected ItemSupplyPlanSearchRowBasic $basic;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $locationJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ItemSupplyPlanSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ItemSupplyPlanSearchRowBasic $basic
     * @return ItemSupplyPlanSearchRow
     */
    public function setBasic(ItemSupplyPlanSearchRowBasic $basic): ItemSupplyPlanSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function getBasic(): ItemSupplyPlanSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return ItemSupplyPlanSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): ItemSupplyPlanSearchRow
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
     * @param LocationSearchRowBasic $locationJoin
     * @return ItemSupplyPlanSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): ItemSupplyPlanSearchRow
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin(): LocationSearchRowBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ItemSupplyPlanSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ItemSupplyPlanSearchRow
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

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return ItemSupplyPlanSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ItemSupplyPlanSearchRow
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
