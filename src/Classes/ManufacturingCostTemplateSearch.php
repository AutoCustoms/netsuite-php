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

class ManufacturingCostTemplateSearch extends SearchRecord {
    /**
     * @var ManufacturingCostTemplateSearchBasic
     */
    protected ManufacturingCostTemplateSearchBasic $basic;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ManufacturingCostTemplateSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ManufacturingCostTemplateSearchBasic $basic
     * @return ManufacturingCostTemplateSearch
     */
    public function setBasic(ManufacturingCostTemplateSearchBasic $basic): ManufacturingCostTemplateSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearchBasic
     */
    public function getBasic(): ManufacturingCostTemplateSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return ManufacturingCostTemplateSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): ManufacturingCostTemplateSearch
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
     * @return ManufacturingCostTemplateSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ManufacturingCostTemplateSearch
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
     * @return ManufacturingCostTemplateSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ManufacturingCostTemplateSearch
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
