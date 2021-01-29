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

class InventoryNumberSearchRow extends SearchRow {
    /**
     * @var InventoryNumberSearchRowBasic
     */
    protected InventoryNumberSearchRowBasic $basic;

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
        "basic" => "InventoryNumberSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param InventoryNumberSearchRowBasic $basic
     * @return InventoryNumberSearchRow
     */
    public function setBasic(InventoryNumberSearchRowBasic $basic): InventoryNumberSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return InventoryNumberSearchRowBasic
     */
    public function getBasic(): InventoryNumberSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return InventoryNumberSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): InventoryNumberSearchRow
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
     * @return InventoryNumberSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): InventoryNumberSearchRow
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
     * @return InventoryNumberSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): InventoryNumberSearchRow
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
