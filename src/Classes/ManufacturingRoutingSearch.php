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

class ManufacturingRoutingSearch extends SearchRecord {
    /**
     * @var ManufacturingRoutingSearchBasic
     */
    protected ManufacturingRoutingSearchBasic $basic;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $locationJoin;

    /**
     * @var ManufacturingCostTemplateSearchBasic
     */
    protected ManufacturingCostTemplateSearchBasic $manufacturingCostTemplateJoin;

    /**
     * @var EntityGroupSearchBasic
     */
    protected EntityGroupSearchBasic $manufacturingWorkCenterJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ManufacturingRoutingSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "manufacturingCostTemplateJoin" => "ManufacturingCostTemplateSearchBasic",
        "manufacturingWorkCenterJoin" => "EntityGroupSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ManufacturingRoutingSearchBasic $basic
     * @return ManufacturingRoutingSearch
     */
    public function setBasic(ManufacturingRoutingSearchBasic $basic): ManufacturingRoutingSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ManufacturingRoutingSearchBasic
     */
    public function getBasic(): ManufacturingRoutingSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return ManufacturingRoutingSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): ManufacturingRoutingSearch
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
     * @return ManufacturingRoutingSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin): ManufacturingRoutingSearch
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
     * @param ManufacturingCostTemplateSearchBasic $manufacturingCostTemplateJoin
     * @return ManufacturingRoutingSearch
     */
    public function setManufacturingCostTemplateJoin(ManufacturingCostTemplateSearchBasic $manufacturingCostTemplateJoin): ManufacturingRoutingSearch
    {
        $this->manufacturingCostTemplateJoin = $manufacturingCostTemplateJoin;
        return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearchBasic
     */
    public function getManufacturingCostTemplateJoin(): ManufacturingCostTemplateSearchBasic
    {
        return $this->manufacturingCostTemplateJoin;
    }

    /**
     * @param EntityGroupSearchBasic $manufacturingWorkCenterJoin
     * @return ManufacturingRoutingSearch
     */
    public function setManufacturingWorkCenterJoin(EntityGroupSearchBasic $manufacturingWorkCenterJoin): ManufacturingRoutingSearch
    {
        $this->manufacturingWorkCenterJoin = $manufacturingWorkCenterJoin;
        return $this;
    }

    /**
     * @return EntityGroupSearchBasic
     */
    public function getManufacturingWorkCenterJoin(): EntityGroupSearchBasic
    {
        return $this->manufacturingWorkCenterJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ManufacturingRoutingSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ManufacturingRoutingSearch
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
     * @return ManufacturingRoutingSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ManufacturingRoutingSearch
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
