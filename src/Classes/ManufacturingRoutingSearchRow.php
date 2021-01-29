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

class ManufacturingRoutingSearchRow extends SearchRow {
    /**
     * @var ManufacturingRoutingSearchRowBasic
     */
    protected ManufacturingRoutingSearchRowBasic $basic;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $locationJoin;

    /**
     * @var ManufacturingCostTemplateSearchRowBasic
     */
    protected ManufacturingCostTemplateSearchRowBasic $manufacturingCostTemplateJoin;

    /**
     * @var EntityGroupSearchRowBasic
     */
    protected EntityGroupSearchRowBasic $manufacturingWorkCenterJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ManufacturingRoutingSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "manufacturingCostTemplateJoin" => "ManufacturingCostTemplateSearchRowBasic",
        "manufacturingWorkCenterJoin" => "EntityGroupSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ManufacturingRoutingSearchRowBasic $basic
     * @return ManufacturingRoutingSearchRow
     */
    public function setBasic(ManufacturingRoutingSearchRowBasic $basic): ManufacturingRoutingSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ManufacturingRoutingSearchRowBasic
     */
    public function getBasic(): ManufacturingRoutingSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return ManufacturingRoutingSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): ManufacturingRoutingSearchRow
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
     * @return ManufacturingRoutingSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): ManufacturingRoutingSearchRow
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
     * @param ManufacturingCostTemplateSearchRowBasic $manufacturingCostTemplateJoin
     * @return ManufacturingRoutingSearchRow
     */
    public function setManufacturingCostTemplateJoin(ManufacturingCostTemplateSearchRowBasic $manufacturingCostTemplateJoin): ManufacturingRoutingSearchRow
    {
        $this->manufacturingCostTemplateJoin = $manufacturingCostTemplateJoin;
        return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearchRowBasic
     */
    public function getManufacturingCostTemplateJoin(): ManufacturingCostTemplateSearchRowBasic
    {
        return $this->manufacturingCostTemplateJoin;
    }

    /**
     * @param EntityGroupSearchRowBasic $manufacturingWorkCenterJoin
     * @return ManufacturingRoutingSearchRow
     */
    public function setManufacturingWorkCenterJoin(EntityGroupSearchRowBasic $manufacturingWorkCenterJoin): ManufacturingRoutingSearchRow
    {
        $this->manufacturingWorkCenterJoin = $manufacturingWorkCenterJoin;
        return $this;
    }

    /**
     * @return EntityGroupSearchRowBasic
     */
    public function getManufacturingWorkCenterJoin(): EntityGroupSearchRowBasic
    {
        return $this->manufacturingWorkCenterJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ManufacturingRoutingSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ManufacturingRoutingSearchRow
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
     * @return ManufacturingRoutingSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ManufacturingRoutingSearchRow
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
