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

class ManufacturingCostTemplateSearchRow extends SearchRow {
    /**
     * @var ManufacturingCostTemplateSearchRowBasic
     */
    protected ManufacturingCostTemplateSearchRowBasic $basic;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ManufacturingCostTemplateSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ManufacturingCostTemplateSearchRowBasic $basic
     * @return ManufacturingCostTemplateSearchRow
     */
    public function setBasic(ManufacturingCostTemplateSearchRowBasic $basic): ManufacturingCostTemplateSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ManufacturingCostTemplateSearchRowBasic
     */
    public function getBasic(): ManufacturingCostTemplateSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return ManufacturingCostTemplateSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): ManufacturingCostTemplateSearchRow
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
     * @return ManufacturingCostTemplateSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ManufacturingCostTemplateSearchRow
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
     * @return ManufacturingCostTemplateSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ManufacturingCostTemplateSearchRow
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
