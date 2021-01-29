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

class InventoryDetail extends Record {
    /**
     * @var InventoryAssignmentList
     */
    protected InventoryAssignmentList $inventoryAssignmentList;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    static $paramtypesmap = array(
        "inventoryAssignmentList" => "InventoryAssignmentList",
        "customForm" => "RecordRef",
    );

    /**
     * @param InventoryAssignmentList $inventoryAssignmentList
     * @return InventoryDetail
     */
    public function setInventoryAssignmentList(InventoryAssignmentList $inventoryAssignmentList): InventoryDetail
    {
        $this->inventoryAssignmentList = $inventoryAssignmentList;
        return $this;
    }

    /**
     * @return InventoryAssignmentList
     */
    public function getInventoryAssignmentList(): InventoryAssignmentList
    {
        return $this->inventoryAssignmentList;
    }

    /**
     * @param RecordRef $customForm
     * @return InventoryDetail
     */
    public function setCustomForm(RecordRef $customForm): InventoryDetail
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

}
