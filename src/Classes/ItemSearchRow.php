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

class ItemSearchRow extends SearchRow {
    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $basic;

    /**
     * @var RevRecTemplateSearchRowBasic
     */
    protected RevRecTemplateSearchRowBasic $accountingBookRevRecScheduleJoin;

    /**
     * @var AssemblyItemBomSearchRowBasic
     */
    protected AssemblyItemBomSearchRowBasic $assemblyItemBillOfMaterialsJoin;

    /**
     * @var BinSearchRowBasic
     */
    protected BinSearchRowBasic $binNumberJoin;

    /**
     * @var ItemBinNumberSearchRowBasic
     */
    protected ItemBinNumberSearchRowBasic $binOnHandJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $correlatedItemJoin;

    /**
     * @var ItemRevisionSearchRowBasic
     */
    protected ItemRevisionSearchRowBasic $effectiveRevisionJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var MerchandiseHierarchyNodeSearchRowBasic
     */
    protected MerchandiseHierarchyNodeSearchRowBasic $hierarchyNodeJoin;

    /**
     * @var InventoryDetailSearchRowBasic
     */
    protected InventoryDetailSearchRowBasic $inventoryDetailJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $inventoryLocationJoin;

    /**
     * @var InventoryNumberSearchRowBasic
     */
    protected InventoryNumberSearchRowBasic $inventoryNumberJoin;

    /**
     * @var InventoryNumberBinSearchRowBasic
     */
    protected InventoryNumberBinSearchRowBasic $inventoryNumberBinOnHandJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $memberItemJoin;

    /**
     * @var ItemRevisionSearchRowBasic
     */
    protected ItemRevisionSearchRowBasic $obsoleteRevisionJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $parentJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $preferredLocationJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $preferredVendorJoin;

    /**
     * @var PricingSearchRowBasic
     */
    protected PricingSearchRowBasic $pricingJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $shopperJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var NoteSearchRowBasic
     */
    protected NoteSearchRowBasic $userNotesJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $vendorJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ItemSearchRowBasic",
        "accountingBookRevRecScheduleJoin" => "RevRecTemplateSearchRowBasic",
        "assemblyItemBillOfMaterialsJoin" => "AssemblyItemBomSearchRowBasic",
        "binNumberJoin" => "BinSearchRowBasic",
        "binOnHandJoin" => "ItemBinNumberSearchRowBasic",
        "correlatedItemJoin" => "ItemSearchRowBasic",
        "effectiveRevisionJoin" => "ItemRevisionSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hierarchyNodeJoin" => "MerchandiseHierarchyNodeSearchRowBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
        "inventoryLocationJoin" => "LocationSearchRowBasic",
        "inventoryNumberJoin" => "InventoryNumberSearchRowBasic",
        "inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchRowBasic",
        "memberItemJoin" => "ItemSearchRowBasic",
        "obsoleteRevisionJoin" => "ItemRevisionSearchRowBasic",
        "parentJoin" => "ItemSearchRowBasic",
        "preferredLocationJoin" => "LocationSearchRowBasic",
        "preferredVendorJoin" => "VendorSearchRowBasic",
        "pricingJoin" => "PricingSearchRowBasic",
        "shopperJoin" => "CustomerSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ItemSearchRowBasic $basic
     * @return ItemSearchRow
     */
    public function setBasic(ItemSearchRowBasic $basic): ItemSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getBasic(): ItemSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param RevRecTemplateSearchRowBasic $accountingBookRevRecScheduleJoin
     * @return ItemSearchRow
     */
    public function setAccountingBookRevRecScheduleJoin(RevRecTemplateSearchRowBasic $accountingBookRevRecScheduleJoin): ItemSearchRow
    {
        $this->accountingBookRevRecScheduleJoin = $accountingBookRevRecScheduleJoin;
        return $this;
    }

    /**
     * @return RevRecTemplateSearchRowBasic
     */
    public function getAccountingBookRevRecScheduleJoin(): RevRecTemplateSearchRowBasic
    {
        return $this->accountingBookRevRecScheduleJoin;
    }

    /**
     * @param AssemblyItemBomSearchRowBasic $assemblyItemBillOfMaterialsJoin
     * @return ItemSearchRow
     */
    public function setAssemblyItemBillOfMaterialsJoin(AssemblyItemBomSearchRowBasic $assemblyItemBillOfMaterialsJoin): ItemSearchRow
    {
        $this->assemblyItemBillOfMaterialsJoin = $assemblyItemBillOfMaterialsJoin;
        return $this;
    }

    /**
     * @return AssemblyItemBomSearchRowBasic
     */
    public function getAssemblyItemBillOfMaterialsJoin(): AssemblyItemBomSearchRowBasic
    {
        return $this->assemblyItemBillOfMaterialsJoin;
    }

    /**
     * @param BinSearchRowBasic $binNumberJoin
     * @return ItemSearchRow
     */
    public function setBinNumberJoin(BinSearchRowBasic $binNumberJoin): ItemSearchRow
    {
        $this->binNumberJoin = $binNumberJoin;
        return $this;
    }

    /**
     * @return BinSearchRowBasic
     */
    public function getBinNumberJoin(): BinSearchRowBasic
    {
        return $this->binNumberJoin;
    }

    /**
     * @param ItemBinNumberSearchRowBasic $binOnHandJoin
     * @return ItemSearchRow
     */
    public function setBinOnHandJoin(ItemBinNumberSearchRowBasic $binOnHandJoin): ItemSearchRow
    {
        $this->binOnHandJoin = $binOnHandJoin;
        return $this;
    }

    /**
     * @return ItemBinNumberSearchRowBasic
     */
    public function getBinOnHandJoin(): ItemBinNumberSearchRowBasic
    {
        return $this->binOnHandJoin;
    }

    /**
     * @param ItemSearchRowBasic $correlatedItemJoin
     * @return ItemSearchRow
     */
    public function setCorrelatedItemJoin(ItemSearchRowBasic $correlatedItemJoin): ItemSearchRow
    {
        $this->correlatedItemJoin = $correlatedItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getCorrelatedItemJoin(): ItemSearchRowBasic
    {
        return $this->correlatedItemJoin;
    }

    /**
     * @param ItemRevisionSearchRowBasic $effectiveRevisionJoin
     * @return ItemSearchRow
     */
    public function setEffectiveRevisionJoin(ItemRevisionSearchRowBasic $effectiveRevisionJoin): ItemSearchRow
    {
        $this->effectiveRevisionJoin = $effectiveRevisionJoin;
        return $this;
    }

    /**
     * @return ItemRevisionSearchRowBasic
     */
    public function getEffectiveRevisionJoin(): ItemRevisionSearchRowBasic
    {
        return $this->effectiveRevisionJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return ItemSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): ItemSearchRow
    {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getFileJoin(): FileSearchRowBasic
    {
        return $this->fileJoin;
    }

    /**
     * @param MerchandiseHierarchyNodeSearchRowBasic $hierarchyNodeJoin
     * @return ItemSearchRow
     */
    public function setHierarchyNodeJoin(MerchandiseHierarchyNodeSearchRowBasic $hierarchyNodeJoin): ItemSearchRow
    {
        $this->hierarchyNodeJoin = $hierarchyNodeJoin;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeSearchRowBasic
     */
    public function getHierarchyNodeJoin(): MerchandiseHierarchyNodeSearchRowBasic
    {
        return $this->hierarchyNodeJoin;
    }

    /**
     * @param InventoryDetailSearchRowBasic $inventoryDetailJoin
     * @return ItemSearchRow
     */
    public function setInventoryDetailJoin(InventoryDetailSearchRowBasic $inventoryDetailJoin): ItemSearchRow
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
     * @param LocationSearchRowBasic $inventoryLocationJoin
     * @return ItemSearchRow
     */
    public function setInventoryLocationJoin(LocationSearchRowBasic $inventoryLocationJoin): ItemSearchRow
    {
        $this->inventoryLocationJoin = $inventoryLocationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getInventoryLocationJoin(): LocationSearchRowBasic
    {
        return $this->inventoryLocationJoin;
    }

    /**
     * @param InventoryNumberSearchRowBasic $inventoryNumberJoin
     * @return ItemSearchRow
     */
    public function setInventoryNumberJoin(InventoryNumberSearchRowBasic $inventoryNumberJoin): ItemSearchRow
    {
        $this->inventoryNumberJoin = $inventoryNumberJoin;
        return $this;
    }

    /**
     * @return InventoryNumberSearchRowBasic
     */
    public function getInventoryNumberJoin(): InventoryNumberSearchRowBasic
    {
        return $this->inventoryNumberJoin;
    }

    /**
     * @param InventoryNumberBinSearchRowBasic $inventoryNumberBinOnHandJoin
     * @return ItemSearchRow
     */
    public function setInventoryNumberBinOnHandJoin(InventoryNumberBinSearchRowBasic $inventoryNumberBinOnHandJoin): ItemSearchRow
    {
        $this->inventoryNumberBinOnHandJoin = $inventoryNumberBinOnHandJoin;
        return $this;
    }

    /**
     * @return InventoryNumberBinSearchRowBasic
     */
    public function getInventoryNumberBinOnHandJoin(): InventoryNumberBinSearchRowBasic
    {
        return $this->inventoryNumberBinOnHandJoin;
    }

    /**
     * @param ItemSearchRowBasic $memberItemJoin
     * @return ItemSearchRow
     */
    public function setMemberItemJoin(ItemSearchRowBasic $memberItemJoin): ItemSearchRow
    {
        $this->memberItemJoin = $memberItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getMemberItemJoin(): ItemSearchRowBasic
    {
        return $this->memberItemJoin;
    }

    /**
     * @param ItemRevisionSearchRowBasic $obsoleteRevisionJoin
     * @return ItemSearchRow
     */
    public function setObsoleteRevisionJoin(ItemRevisionSearchRowBasic $obsoleteRevisionJoin): ItemSearchRow
    {
        $this->obsoleteRevisionJoin = $obsoleteRevisionJoin;
        return $this;
    }

    /**
     * @return ItemRevisionSearchRowBasic
     */
    public function getObsoleteRevisionJoin(): ItemRevisionSearchRowBasic
    {
        return $this->obsoleteRevisionJoin;
    }

    /**
     * @param ItemSearchRowBasic $parentJoin
     * @return ItemSearchRow
     */
    public function setParentJoin(ItemSearchRowBasic $parentJoin): ItemSearchRow
    {
        $this->parentJoin = $parentJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getParentJoin(): ItemSearchRowBasic
    {
        return $this->parentJoin;
    }

    /**
     * @param LocationSearchRowBasic $preferredLocationJoin
     * @return ItemSearchRow
     */
    public function setPreferredLocationJoin(LocationSearchRowBasic $preferredLocationJoin): ItemSearchRow
    {
        $this->preferredLocationJoin = $preferredLocationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getPreferredLocationJoin(): LocationSearchRowBasic
    {
        return $this->preferredLocationJoin;
    }

    /**
     * @param VendorSearchRowBasic $preferredVendorJoin
     * @return ItemSearchRow
     */
    public function setPreferredVendorJoin(VendorSearchRowBasic $preferredVendorJoin): ItemSearchRow
    {
        $this->preferredVendorJoin = $preferredVendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getPreferredVendorJoin(): VendorSearchRowBasic
    {
        return $this->preferredVendorJoin;
    }

    /**
     * @param PricingSearchRowBasic $pricingJoin
     * @return ItemSearchRow
     */
    public function setPricingJoin(PricingSearchRowBasic $pricingJoin): ItemSearchRow
    {
        $this->pricingJoin = $pricingJoin;
        return $this;
    }

    /**
     * @return PricingSearchRowBasic
     */
    public function getPricingJoin(): PricingSearchRowBasic
    {
        return $this->pricingJoin;
    }

    /**
     * @param CustomerSearchRowBasic $shopperJoin
     * @return ItemSearchRow
     */
    public function setShopperJoin(CustomerSearchRowBasic $shopperJoin): ItemSearchRow
    {
        $this->shopperJoin = $shopperJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getShopperJoin(): CustomerSearchRowBasic
    {
        return $this->shopperJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return ItemSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): ItemSearchRow
    {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->transactionJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ItemSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ItemSearchRow
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
     * @param NoteSearchRowBasic $userNotesJoin
     * @return ItemSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): ItemSearchRow
    {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * @return NoteSearchRowBasic
     */
    public function getUserNotesJoin(): NoteSearchRowBasic
    {
        return $this->userNotesJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return ItemSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): ItemSearchRow
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
     * @return ItemSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ItemSearchRow
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
