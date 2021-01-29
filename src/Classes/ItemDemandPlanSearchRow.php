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

class ItemDemandPlanSearchRow extends SearchRow {
    /**
     * @var ItemDemandPlanSearchRowBasic
     */
    protected ItemDemandPlanSearchRowBasic $basic;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $lastAlternateSourceItemJoin;

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
        "basic" => "ItemDemandPlanSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "lastAlternateSourceItemJoin" => "ItemSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ItemDemandPlanSearchRowBasic $basic
     * @return ItemDemandPlanSearchRow
     */
    public function setBasic(ItemDemandPlanSearchRowBasic $basic): ItemDemandPlanSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemDemandPlanSearchRowBasic
     */
    public function getBasic(): ItemDemandPlanSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return ItemDemandPlanSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): ItemDemandPlanSearchRow
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
     * @param ItemSearchRowBasic $lastAlternateSourceItemJoin
     * @return ItemDemandPlanSearchRow
     */
    public function setLastAlternateSourceItemJoin(ItemSearchRowBasic $lastAlternateSourceItemJoin): ItemDemandPlanSearchRow
    {
        $this->lastAlternateSourceItemJoin = $lastAlternateSourceItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getLastAlternateSourceItemJoin(): ItemSearchRowBasic
    {
        return $this->lastAlternateSourceItemJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return ItemDemandPlanSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): ItemDemandPlanSearchRow
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
     * @return ItemDemandPlanSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ItemDemandPlanSearchRow
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
     * @return ItemDemandPlanSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ItemDemandPlanSearchRow
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
