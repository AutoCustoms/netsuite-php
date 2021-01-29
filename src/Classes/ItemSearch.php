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

class ItemSearch extends SearchRecord {
    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $basic;

    /**
     * @var RevRecTemplateSearchBasic
     */
    protected RevRecTemplateSearchBasic $accountingBookRevRecScheduleJoin;

    /**
     * @var AssemblyItemBomSearchBasic
     */
    protected AssemblyItemBomSearchBasic $assemblyItemBillOfMaterialsJoin;

    /**
     * @var BinSearchBasic
     */
    protected BinSearchBasic $binNumberJoin;

    /**
     * @var ItemBinNumberSearchBasic
     */
    protected ItemBinNumberSearchBasic $binOnHandJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $correlatedItemJoin;

    /**
     * @var ItemRevisionSearchBasic
     */
    protected ItemRevisionSearchBasic $effectiveRevisionJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var MerchandiseHierarchyNodeSearchBasic
     */
    protected MerchandiseHierarchyNodeSearchBasic $hierarchyNodeJoin;

    /**
     * @var InventoryDetailSearchBasic
     */
    protected InventoryDetailSearchBasic $inventoryDetailJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $inventoryLocationJoin;

    /**
     * @var InventoryNumberSearchBasic
     */
    protected InventoryNumberSearchBasic $inventoryNumberJoin;

    /**
     * @var InventoryNumberBinSearchBasic
     */
    protected InventoryNumberBinSearchBasic $inventoryNumberBinOnHandJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $memberItemJoin;

    /**
     * @var ItemRevisionSearchBasic
     */
    protected ItemRevisionSearchBasic $obsoleteRevisionJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $parentJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $preferredLocationJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $preferredVendorJoin;

    /**
     * @var PricingSearchBasic
     */
    protected PricingSearchBasic $pricingJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $shopperJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var NoteSearchBasic
     */
    protected NoteSearchBasic $userNotesJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $vendorJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ItemSearchBasic",
        "accountingBookRevRecScheduleJoin" => "RevRecTemplateSearchBasic",
        "assemblyItemBillOfMaterialsJoin" => "AssemblyItemBomSearchBasic",
        "binNumberJoin" => "BinSearchBasic",
        "binOnHandJoin" => "ItemBinNumberSearchBasic",
        "correlatedItemJoin" => "ItemSearchBasic",
        "effectiveRevisionJoin" => "ItemRevisionSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "hierarchyNodeJoin" => "MerchandiseHierarchyNodeSearchBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchBasic",
        "inventoryLocationJoin" => "LocationSearchBasic",
        "inventoryNumberJoin" => "InventoryNumberSearchBasic",
        "inventoryNumberBinOnHandJoin" => "InventoryNumberBinSearchBasic",
        "memberItemJoin" => "ItemSearchBasic",
        "obsoleteRevisionJoin" => "ItemRevisionSearchBasic",
        "parentJoin" => "ItemSearchBasic",
        "preferredLocationJoin" => "LocationSearchBasic",
        "preferredVendorJoin" => "VendorSearchBasic",
        "pricingJoin" => "PricingSearchBasic",
        "shopperJoin" => "CustomerSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ItemSearchBasic $basic
     * @return ItemSearch
     */
    public function setBasic(ItemSearchBasic $basic): ItemSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getBasic(): ItemSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param RevRecTemplateSearchBasic $accountingBookRevRecScheduleJoin
     * @return ItemSearch
     */
    public function setAccountingBookRevRecScheduleJoin(RevRecTemplateSearchBasic $accountingBookRevRecScheduleJoin): ItemSearch
    {
        $this->accountingBookRevRecScheduleJoin = $accountingBookRevRecScheduleJoin;
        return $this;
    }

    /**
     * @return RevRecTemplateSearchBasic
     */
    public function getAccountingBookRevRecScheduleJoin(): RevRecTemplateSearchBasic
    {
        return $this->accountingBookRevRecScheduleJoin;
    }

    /**
     * @param AssemblyItemBomSearchBasic $assemblyItemBillOfMaterialsJoin
     * @return ItemSearch
     */
    public function setAssemblyItemBillOfMaterialsJoin(AssemblyItemBomSearchBasic $assemblyItemBillOfMaterialsJoin): ItemSearch
    {
        $this->assemblyItemBillOfMaterialsJoin = $assemblyItemBillOfMaterialsJoin;
        return $this;
    }

    /**
     * @return AssemblyItemBomSearchBasic
     */
    public function getAssemblyItemBillOfMaterialsJoin(): AssemblyItemBomSearchBasic
    {
        return $this->assemblyItemBillOfMaterialsJoin;
    }

    /**
     * @param BinSearchBasic $binNumberJoin
     * @return ItemSearch
     */
    public function setBinNumberJoin(BinSearchBasic $binNumberJoin): ItemSearch
    {
        $this->binNumberJoin = $binNumberJoin;
        return $this;
    }

    /**
     * @return BinSearchBasic
     */
    public function getBinNumberJoin(): BinSearchBasic
    {
        return $this->binNumberJoin;
    }

    /**
     * @param ItemBinNumberSearchBasic $binOnHandJoin
     * @return ItemSearch
     */
    public function setBinOnHandJoin(ItemBinNumberSearchBasic $binOnHandJoin): ItemSearch
    {
        $this->binOnHandJoin = $binOnHandJoin;
        return $this;
    }

    /**
     * @return ItemBinNumberSearchBasic
     */
    public function getBinOnHandJoin(): ItemBinNumberSearchBasic
    {
        return $this->binOnHandJoin;
    }

    /**
     * @param ItemSearchBasic $correlatedItemJoin
     * @return ItemSearch
     */
    public function setCorrelatedItemJoin(ItemSearchBasic $correlatedItemJoin): ItemSearch
    {
        $this->correlatedItemJoin = $correlatedItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getCorrelatedItemJoin(): ItemSearchBasic
    {
        return $this->correlatedItemJoin;
    }

    /**
     * @param ItemRevisionSearchBasic $effectiveRevisionJoin
     * @return ItemSearch
     */
    public function setEffectiveRevisionJoin(ItemRevisionSearchBasic $effectiveRevisionJoin): ItemSearch
    {
        $this->effectiveRevisionJoin = $effectiveRevisionJoin;
        return $this;
    }

    /**
     * @return ItemRevisionSearchBasic
     */
    public function getEffectiveRevisionJoin(): ItemRevisionSearchBasic
    {
        return $this->effectiveRevisionJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return ItemSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): ItemSearch
    {
        $this->fileJoin = $fileJoin;
        return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getFileJoin(): FileSearchBasic
    {
        return $this->fileJoin;
    }

    /**
     * @param MerchandiseHierarchyNodeSearchBasic $hierarchyNodeJoin
     * @return ItemSearch
     */
    public function setHierarchyNodeJoin(MerchandiseHierarchyNodeSearchBasic $hierarchyNodeJoin): ItemSearch
    {
        $this->hierarchyNodeJoin = $hierarchyNodeJoin;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function getHierarchyNodeJoin(): MerchandiseHierarchyNodeSearchBasic
    {
        return $this->hierarchyNodeJoin;
    }

    /**
     * @param InventoryDetailSearchBasic $inventoryDetailJoin
     * @return ItemSearch
     */
    public function setInventoryDetailJoin(InventoryDetailSearchBasic $inventoryDetailJoin): ItemSearch
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
     * @param LocationSearchBasic $inventoryLocationJoin
     * @return ItemSearch
     */
    public function setInventoryLocationJoin(LocationSearchBasic $inventoryLocationJoin): ItemSearch
    {
        $this->inventoryLocationJoin = $inventoryLocationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getInventoryLocationJoin(): LocationSearchBasic
    {
        return $this->inventoryLocationJoin;
    }

    /**
     * @param InventoryNumberSearchBasic $inventoryNumberJoin
     * @return ItemSearch
     */
    public function setInventoryNumberJoin(InventoryNumberSearchBasic $inventoryNumberJoin): ItemSearch
    {
        $this->inventoryNumberJoin = $inventoryNumberJoin;
        return $this;
    }

    /**
     * @return InventoryNumberSearchBasic
     */
    public function getInventoryNumberJoin(): InventoryNumberSearchBasic
    {
        return $this->inventoryNumberJoin;
    }

    /**
     * @param InventoryNumberBinSearchBasic $inventoryNumberBinOnHandJoin
     * @return ItemSearch
     */
    public function setInventoryNumberBinOnHandJoin(InventoryNumberBinSearchBasic $inventoryNumberBinOnHandJoin): ItemSearch
    {
        $this->inventoryNumberBinOnHandJoin = $inventoryNumberBinOnHandJoin;
        return $this;
    }

    /**
     * @return InventoryNumberBinSearchBasic
     */
    public function getInventoryNumberBinOnHandJoin(): InventoryNumberBinSearchBasic
    {
        return $this->inventoryNumberBinOnHandJoin;
    }

    /**
     * @param ItemSearchBasic $memberItemJoin
     * @return ItemSearch
     */
    public function setMemberItemJoin(ItemSearchBasic $memberItemJoin): ItemSearch
    {
        $this->memberItemJoin = $memberItemJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getMemberItemJoin(): ItemSearchBasic
    {
        return $this->memberItemJoin;
    }

    /**
     * @param ItemRevisionSearchBasic $obsoleteRevisionJoin
     * @return ItemSearch
     */
    public function setObsoleteRevisionJoin(ItemRevisionSearchBasic $obsoleteRevisionJoin): ItemSearch
    {
        $this->obsoleteRevisionJoin = $obsoleteRevisionJoin;
        return $this;
    }

    /**
     * @return ItemRevisionSearchBasic
     */
    public function getObsoleteRevisionJoin(): ItemRevisionSearchBasic
    {
        return $this->obsoleteRevisionJoin;
    }

    /**
     * @param ItemSearchBasic $parentJoin
     * @return ItemSearch
     */
    public function setParentJoin(ItemSearchBasic $parentJoin): ItemSearch
    {
        $this->parentJoin = $parentJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getParentJoin(): ItemSearchBasic
    {
        return $this->parentJoin;
    }

    /**
     * @param LocationSearchBasic $preferredLocationJoin
     * @return ItemSearch
     */
    public function setPreferredLocationJoin(LocationSearchBasic $preferredLocationJoin): ItemSearch
    {
        $this->preferredLocationJoin = $preferredLocationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getPreferredLocationJoin(): LocationSearchBasic
    {
        return $this->preferredLocationJoin;
    }

    /**
     * @param VendorSearchBasic $preferredVendorJoin
     * @return ItemSearch
     */
    public function setPreferredVendorJoin(VendorSearchBasic $preferredVendorJoin): ItemSearch
    {
        $this->preferredVendorJoin = $preferredVendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getPreferredVendorJoin(): VendorSearchBasic
    {
        return $this->preferredVendorJoin;
    }

    /**
     * @param PricingSearchBasic $pricingJoin
     * @return ItemSearch
     */
    public function setPricingJoin(PricingSearchBasic $pricingJoin): ItemSearch
    {
        $this->pricingJoin = $pricingJoin;
        return $this;
    }

    /**
     * @return PricingSearchBasic
     */
    public function getPricingJoin(): PricingSearchBasic
    {
        return $this->pricingJoin;
    }

    /**
     * @param CustomerSearchBasic $shopperJoin
     * @return ItemSearch
     */
    public function setShopperJoin(CustomerSearchBasic $shopperJoin): ItemSearch
    {
        $this->shopperJoin = $shopperJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getShopperJoin(): CustomerSearchBasic
    {
        return $this->shopperJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return ItemSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): ItemSearch
    {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin(): TransactionSearchBasic
    {
        return $this->transactionJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ItemSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ItemSearch
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
     * @param NoteSearchBasic $userNotesJoin
     * @return ItemSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): ItemSearch
    {
        $this->userNotesJoin = $userNotesJoin;
        return $this;
    }

    /**
     * @return NoteSearchBasic
     */
    public function getUserNotesJoin(): NoteSearchBasic
    {
        return $this->userNotesJoin;
    }

    /**
     * @param VendorSearchBasic $vendorJoin
     * @return ItemSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): ItemSearch
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
     * @return ItemSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ItemSearch
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
