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

class PurchaseRequisitionExpenseList {
    /**
     * @var PurchaseRequisitionExpense[]
     */
    protected array $purchaseRequisitionExpense;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "purchaseRequisitionExpense" => "PurchaseRequisitionExpense[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param PurchaseRequisitionExpense[] $purchaseRequisitionExpense
     * @return PurchaseRequisitionExpenseList
     */
    public function setPurchaseRequisitionExpense(PurchaseRequisitionExpense $purchaseRequisitionExpense): PurchaseRequisitionExpenseList
    {
        $this->purchaseRequisitionExpense[] = $purchaseRequisitionExpense;
        return $this;
    }

    /**
     * @return PurchaseRequisitionExpense[]
     */
    public function getPurchaseRequisitionExpense(): array
    {
        return $this->purchaseRequisitionExpense;
    }

    /**
     * @param bool $replaceAll
     * @return PurchaseRequisitionExpenseList
     */
    public function setReplaceAll(bool $replaceAll): PurchaseRequisitionExpenseList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
