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

class ItemSupplyPlanSearch extends SearchRecord {
    /**
     * @var ItemSupplyPlanSearchBasic
     */
    protected ItemSupplyPlanSearchBasic $basic;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $locationJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ItemSupplyPlanSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ItemSupplyPlanSearchBasic $basic
     * @return ItemSupplyPlanSearch
     */
    public function setBasic(ItemSupplyPlanSearchBasic $basic): ItemSupplyPlanSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemSupplyPlanSearchBasic
     */
    public function getBasic(): ItemSupplyPlanSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return ItemSupplyPlanSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): ItemSupplyPlanSearch
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
     * @param LocationSearchBasic $locationJoin
     * @return ItemSupplyPlanSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin): ItemSupplyPlanSearch
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin(): LocationSearchBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ItemSupplyPlanSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ItemSupplyPlanSearch
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

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return ItemSupplyPlanSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ItemSupplyPlanSearch
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
