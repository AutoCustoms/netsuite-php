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

class ItemDemandPlanSearch extends SearchRecord {
    /**
     * @var ItemDemandPlanSearchBasic
     */
    protected ItemDemandPlanSearchBasic $basic;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $lastAlternateSourceItemJoin;

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
        "basic" => "ItemDemandPlanSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "lastAlternateSourceItemJoin" => "ItemSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ItemDemandPlanSearchBasic $basic
     * @return ItemDemandPlanSearch
     */
    public function setBasic(ItemDemandPlanSearchBasic $basic): ItemDemandPlanSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemDemandPlanSearchBasic
     */
    public function getBasic(): ItemDemandPlanSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return ItemDemandPlanSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): ItemDemandPlanSearch
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
     * @param ItemSearchBasic $lastAlternateSourceItemJoin
     * @return ItemDemandPlanSearch
     */
    public function setLastAlternateSourceItemJoin(ItemSearchBasic $lastAlternateSourceItemJoin): ItemDemandPlanSearch
    {
        $this->lastAlternateSourceItemJoin = $lastAlternateSourceItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getLastAlternateSourceItemJoin(): ItemSearchBasic
    {
        return $this->lastAlternateSourceItemJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return ItemDemandPlanSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin): ItemDemandPlanSearch
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
     * @return ItemDemandPlanSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ItemDemandPlanSearch
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
     * @return ItemDemandPlanSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ItemDemandPlanSearch
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
