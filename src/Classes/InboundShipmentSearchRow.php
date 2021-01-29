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

class InboundShipmentSearchRow extends SearchRow {
    /**
     * @var InboundShipmentSearchRowBasic
     */
    protected InboundShipmentSearchRowBasic $basic;

    /**
     * @var InventoryDetailSearchRowBasic
     */
    protected InventoryDetailSearchRowBasic $inventoryDetailJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $itemReceiptJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $purchaseOrderJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $vendorJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "InboundShipmentSearchRowBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "itemReceiptJoin" => "TransactionSearchRowBasic",
        "purchaseOrderJoin" => "TransactionSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param InboundShipmentSearchRowBasic $basic
     * @return InboundShipmentSearchRow
     */
    public function setBasic(InboundShipmentSearchRowBasic $basic): InboundShipmentSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return InboundShipmentSearchRowBasic
     */
    public function getBasic(): InboundShipmentSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param InventoryDetailSearchRowBasic $inventoryDetailJoin
     * @return InboundShipmentSearchRow
     */
    public function setInventoryDetailJoin(InventoryDetailSearchRowBasic $inventoryDetailJoin): InboundShipmentSearchRow
    {
        $this->inventoryDetailJoin = $inventoryDetailJoin;
        return $this;
    }

    /**
     * @return InventoryDetailSearchRowBasic
     */
    public function getInventoryDetailJoin(): InventoryDetailSearchRowBasic
    {
        return $this->inventoryDetailJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return InboundShipmentSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): InboundShipmentSearchRow
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
     * @param TransactionSearchRowBasic $itemReceiptJoin
     * @return InboundShipmentSearchRow
     */
    public function setItemReceiptJoin(TransactionSearchRowBasic $itemReceiptJoin): InboundShipmentSearchRow
    {
        $this->itemReceiptJoin = $itemReceiptJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getItemReceiptJoin(): TransactionSearchRowBasic
    {
        return $this->itemReceiptJoin;
    }

    /**
     * @param TransactionSearchRowBasic $purchaseOrderJoin
     * @return InboundShipmentSearchRow
     */
    public function setPurchaseOrderJoin(TransactionSearchRowBasic $purchaseOrderJoin): InboundShipmentSearchRow
    {
        $this->purchaseOrderJoin = $purchaseOrderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getPurchaseOrderJoin(): TransactionSearchRowBasic
    {
        return $this->purchaseOrderJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return InboundShipmentSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): InboundShipmentSearchRow
    {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin(): VendorSearchRowBasic
    {
        return $this->vendorJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return InboundShipmentSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): InboundShipmentSearchRow
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
