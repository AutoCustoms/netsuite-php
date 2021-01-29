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

class InboundShipmentSearch extends SearchRecord {
    /**
     * @var InboundShipmentSearchBasic
     */
    protected InboundShipmentSearchBasic $basic;

    /**
     * @var InventoryDetailSearchBasic
     */
    protected InventoryDetailSearchBasic $inventoryDetailJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $itemReceiptJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $purchaseOrderJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $vendorJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "InboundShipmentSearchBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "itemReceiptJoin" => "TransactionSearchBasic",
        "purchaseOrderJoin" => "TransactionSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param InboundShipmentSearchBasic $basic
     * @return InboundShipmentSearch
     */
    public function setBasic(InboundShipmentSearchBasic $basic): InboundShipmentSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return InboundShipmentSearchBasic
     */
    public function getBasic(): InboundShipmentSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param InventoryDetailSearchBasic $inventoryDetailJoin
     * @return InboundShipmentSearch
     */
    public function setInventoryDetailJoin(InventoryDetailSearchBasic $inventoryDetailJoin): InboundShipmentSearch
    {
        $this->inventoryDetailJoin = $inventoryDetailJoin;
        return $this;
    }

    /**
     * @return InventoryDetailSearchBasic
     */
    public function getInventoryDetailJoin(): InventoryDetailSearchBasic
    {
        return $this->inventoryDetailJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return InboundShipmentSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): InboundShipmentSearch
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
     * @param TransactionSearchBasic $itemReceiptJoin
     * @return InboundShipmentSearch
     */
    public function setItemReceiptJoin(TransactionSearchBasic $itemReceiptJoin): InboundShipmentSearch
    {
        $this->itemReceiptJoin = $itemReceiptJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getItemReceiptJoin(): TransactionSearchBasic
    {
        return $this->itemReceiptJoin;
    }

    /**
     * @param TransactionSearchBasic $purchaseOrderJoin
     * @return InboundShipmentSearch
     */
    public function setPurchaseOrderJoin(TransactionSearchBasic $purchaseOrderJoin): InboundShipmentSearch
    {
        $this->purchaseOrderJoin = $purchaseOrderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getPurchaseOrderJoin(): TransactionSearchBasic
    {
        return $this->purchaseOrderJoin;
    }

    /**
     * @param VendorSearchBasic $vendorJoin
     * @return InboundShipmentSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): InboundShipmentSearch
    {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorJoin(): VendorSearchBasic
    {
        return $this->vendorJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return InboundShipmentSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): InboundShipmentSearch
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
