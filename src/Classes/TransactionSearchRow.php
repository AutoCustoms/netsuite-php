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

class TransactionSearchRow extends SearchRow {
    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $basic;

    /**
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $accountJoin;

    /**
     * @var AccountingPeriodSearchRowBasic
     */
    protected AccountingPeriodSearchRowBasic $accountingPeriodJoin;

    /**
     * @var AccountingTransactionSearchRowBasic
     */
    protected AccountingTransactionSearchRowBasic $accountingTransactionJoin;

    /**
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $advanceToApplyAccountJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $appliedToTransactionJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $applyingTransactionJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $assemblyJoin;

    /**
     * @var AddressSearchRowBasic
     */
    protected AddressSearchRowBasic $billingAddressJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $billingTransactionJoin;

    /**
     * @var BinSearchRowBasic
     */
    protected BinSearchRowBasic $binNumberJoin;

    /**
     * @var BomSearchRowBasic
     */
    protected BomSearchRowBasic $bomJoin;

    /**
     * @var BomRevisionSearchRowBasic
     */
    protected BomRevisionSearchRowBasic $bomRevisionJoin;

    /**
     * @var PhoneCallSearchRowBasic
     */
    protected PhoneCallSearchRowBasic $callJoin;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var ClassificationSearchRowBasic
     */
    protected ClassificationSearchRowBasic $classJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $cogsPurchaseJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $cogsSaleJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactPrimaryJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $createdFromJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerMainJoin;

    /**
     * @var DepartmentSearchRowBasic
     */
    protected DepartmentSearchRowBasic $departmentJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $depositTransactionJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var CalendarEventSearchRowBasic
     */
    protected CalendarEventSearchRowBasic $eventJoin;

    /**
     * @var ExpenseCategorySearchRowBasic
     */
    protected ExpenseCategorySearchRowBasic $expenseCategoryJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $fromLocationJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $fulfillingTransactionJoin;

    /**
     * @var BillingAccountSearchRowBasic
     */
    protected BillingAccountSearchRowBasic $headerBillingAccountJoin;

    /**
     * @var InstallmentSearchRowBasic
     */
    protected InstallmentSearchRowBasic $installmentJoin;

    /**
     * @var InventoryDetailSearchRowBasic
     */
    protected InventoryDetailSearchRowBasic $inventoryDetailJoin;

    /**
     * @var ItemSearchRowBasic
     */
    protected ItemSearchRowBasic $itemJoin;

    /**
     * @var InventoryNumberSearchRowBasic
     */
    protected InventoryNumberSearchRowBasic $itemNumberJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobJoin;

    /**
     * @var JobSearchRowBasic
     */
    protected JobSearchRowBasic $jobMainJoin;

    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $leadSourceJoin;

    /**
     * @var BillingAccountSearchRowBasic
     */
    protected BillingAccountSearchRowBasic $lineBillingAccountJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $lineFileJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $locationJoin;

    /**
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    protected ManufacturingOperationTaskSearchRowBasic $manufacturingOperationTaskJoin;

    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $messagesJoin;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $nextApproverJoin;

    /**
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $opportunityJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $outsourcingVendorJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $paidTransactionJoin;

    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $partnerJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $payingTransactionJoin;

    /**
     * @var PaymentInstrumentSearchRowBasic
     */
    protected PaymentInstrumentSearchRowBasic $paymentInstrumentJoin;

    /**
     * @var PaymentOptionSearchRowBasic
     */
    protected PaymentOptionSearchRowBasic $paymentOptionJoin;

    /**
     * @var PayrollItemSearchRowBasic
     */
    protected PayrollItemSearchRowBasic $payrollItemJoin;

    /**
     * @var ProjectTaskSearchRowBasic
     */
    protected ProjectTaskSearchRowBasic $projectTaskJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $purchaseOrderJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $requestorJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $revCommittingTransactionJoin;

    /**
     * @var ItemRevisionSearchRowBasic
     */
    protected ItemRevisionSearchRowBasic $revisionJoin;

    /**
     * @var RevRecScheduleSearchRowBasic
     */
    protected RevRecScheduleSearchRowBasic $revRecScheduleJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $rgPostingTransactionJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $salesOrderJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $salesRepJoin;

    /**
     * @var AddressSearchRowBasic
     */
    protected AddressSearchRowBasic $shippingAddressJoin;

    /**
     * @var SubsidiarySearchRowBasic
     */
    protected SubsidiarySearchRowBasic $subsidiaryJoin;

    /**
     * @var TaskSearchRowBasic
     */
    protected TaskSearchRowBasic $taskJoin;

    /**
     * @var SalesTaxItemSearchRowBasic
     */
    protected SalesTaxItemSearchRowBasic $taxCodeJoin;

    /**
     * @var TaxDetailSearchRowBasic
     */
    protected TaxDetailSearchRowBasic $taxDetailJoin;

    /**
     * @var SalesTaxItemSearchRowBasic
     */
    protected SalesTaxItemSearchRowBasic $taxItemJoin;

    /**
     * @var TimeBillSearchRowBasic
     */
    protected TimeBillSearchRowBasic $timeJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $toLocationJoin;

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
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $vendorLineJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "TransactionSearchRowBasic",
        "accountJoin" => "AccountSearchRowBasic",
        "accountingPeriodJoin" => "AccountingPeriodSearchRowBasic",
        "accountingTransactionJoin" => "AccountingTransactionSearchRowBasic",
        "advanceToApplyAccountJoin" => "AccountSearchRowBasic",
        "appliedToTransactionJoin" => "TransactionSearchRowBasic",
        "applyingTransactionJoin" => "TransactionSearchRowBasic",
        "assemblyJoin" => "ItemSearchRowBasic",
        "billingAddressJoin" => "AddressSearchRowBasic",
        "billingTransactionJoin" => "TransactionSearchRowBasic",
        "binNumberJoin" => "BinSearchRowBasic",
        "bomJoin" => "BomSearchRowBasic",
        "bomRevisionJoin" => "BomRevisionSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "classJoin" => "ClassificationSearchRowBasic",
        "cogsPurchaseJoin" => "TransactionSearchRowBasic",
        "cogsSaleJoin" => "TransactionSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "createdFromJoin" => "TransactionSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "customerMainJoin" => "CustomerSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "depositTransactionJoin" => "TransactionSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "expenseCategoryJoin" => "ExpenseCategorySearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "fromLocationJoin" => "LocationSearchRowBasic",
        "fulfillingTransactionJoin" => "TransactionSearchRowBasic",
        "headerBillingAccountJoin" => "BillingAccountSearchRowBasic",
        "installmentJoin" => "InstallmentSearchRowBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "itemNumberJoin" => "InventoryNumberSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "jobMainJoin" => "JobSearchRowBasic",
        "leadSourceJoin" => "CampaignSearchRowBasic",
        "lineBillingAccountJoin" => "BillingAccountSearchRowBasic",
        "lineFileJoin" => "FileSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "nextApproverJoin" => "EntitySearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "outsourcingVendorJoin" => "VendorSearchRowBasic",
        "paidTransactionJoin" => "TransactionSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "payingTransactionJoin" => "TransactionSearchRowBasic",
        "paymentInstrumentJoin" => "PaymentInstrumentSearchRowBasic",
        "paymentOptionJoin" => "PaymentOptionSearchRowBasic",
        "payrollItemJoin" => "PayrollItemSearchRowBasic",
        "projectTaskJoin" => "ProjectTaskSearchRowBasic",
        "purchaseOrderJoin" => "TransactionSearchRowBasic",
        "requestorJoin" => "EmployeeSearchRowBasic",
        "revCommittingTransactionJoin" => "TransactionSearchRowBasic",
        "revisionJoin" => "ItemRevisionSearchRowBasic",
        "revRecScheduleJoin" => "RevRecScheduleSearchRowBasic",
        "rgPostingTransactionJoin" => "TransactionSearchRowBasic",
        "salesOrderJoin" => "TransactionSearchRowBasic",
        "salesRepJoin" => "EmployeeSearchRowBasic",
        "shippingAddressJoin" => "AddressSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "taxCodeJoin" => "SalesTaxItemSearchRowBasic",
        "taxDetailJoin" => "TaxDetailSearchRowBasic",
        "taxItemJoin" => "SalesTaxItemSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "toLocationJoin" => "LocationSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "vendorLineJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param TransactionSearchRowBasic $basic
     * @return TransactionSearchRow
     */
    public function setBasic(TransactionSearchRowBasic $basic): TransactionSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getBasic(): TransactionSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param AccountSearchRowBasic $accountJoin
     * @return TransactionSearchRow
     */
    public function setAccountJoin(AccountSearchRowBasic $accountJoin): TransactionSearchRow
    {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getAccountJoin(): AccountSearchRowBasic
    {
        return $this->accountJoin;
    }

    /**
     * @param AccountingPeriodSearchRowBasic $accountingPeriodJoin
     * @return TransactionSearchRow
     */
    public function setAccountingPeriodJoin(AccountingPeriodSearchRowBasic $accountingPeriodJoin): TransactionSearchRow
    {
        $this->accountingPeriodJoin = $accountingPeriodJoin;
        return $this;
    }

    /**
     * @return AccountingPeriodSearchRowBasic
     */
    public function getAccountingPeriodJoin(): AccountingPeriodSearchRowBasic
    {
        return $this->accountingPeriodJoin;
    }

    /**
     * @param AccountingTransactionSearchRowBasic $accountingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setAccountingTransactionJoin(AccountingTransactionSearchRowBasic $accountingTransactionJoin): TransactionSearchRow
    {
        $this->accountingTransactionJoin = $accountingTransactionJoin;
        return $this;
    }

    /**
     * @return AccountingTransactionSearchRowBasic
     */
    public function getAccountingTransactionJoin(): AccountingTransactionSearchRowBasic
    {
        return $this->accountingTransactionJoin;
    }

    /**
     * @param AccountSearchRowBasic $advanceToApplyAccountJoin
     * @return TransactionSearchRow
     */
    public function setAdvanceToApplyAccountJoin(AccountSearchRowBasic $advanceToApplyAccountJoin): TransactionSearchRow
    {
        $this->advanceToApplyAccountJoin = $advanceToApplyAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getAdvanceToApplyAccountJoin(): AccountSearchRowBasic
    {
        return $this->advanceToApplyAccountJoin;
    }

    /**
     * @param TransactionSearchRowBasic $appliedToTransactionJoin
     * @return TransactionSearchRow
     */
    public function setAppliedToTransactionJoin(TransactionSearchRowBasic $appliedToTransactionJoin): TransactionSearchRow
    {
        $this->appliedToTransactionJoin = $appliedToTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getAppliedToTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->appliedToTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $applyingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setApplyingTransactionJoin(TransactionSearchRowBasic $applyingTransactionJoin): TransactionSearchRow
    {
        $this->applyingTransactionJoin = $applyingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getApplyingTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->applyingTransactionJoin;
    }

    /**
     * @param ItemSearchRowBasic $assemblyJoin
     * @return TransactionSearchRow
     */
    public function setAssemblyJoin(ItemSearchRowBasic $assemblyJoin): TransactionSearchRow
    {
        $this->assemblyJoin = $assemblyJoin;
        return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getAssemblyJoin(): ItemSearchRowBasic
    {
        return $this->assemblyJoin;
    }

    /**
     * @param AddressSearchRowBasic $billingAddressJoin
     * @return TransactionSearchRow
     */
    public function setBillingAddressJoin(AddressSearchRowBasic $billingAddressJoin): TransactionSearchRow
    {
        $this->billingAddressJoin = $billingAddressJoin;
        return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getBillingAddressJoin(): AddressSearchRowBasic
    {
        return $this->billingAddressJoin;
    }

    /**
     * @param TransactionSearchRowBasic $billingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setBillingTransactionJoin(TransactionSearchRowBasic $billingTransactionJoin): TransactionSearchRow
    {
        $this->billingTransactionJoin = $billingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getBillingTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->billingTransactionJoin;
    }

    /**
     * @param BinSearchRowBasic $binNumberJoin
     * @return TransactionSearchRow
     */
    public function setBinNumberJoin(BinSearchRowBasic $binNumberJoin): TransactionSearchRow
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
     * @param BomSearchRowBasic $bomJoin
     * @return TransactionSearchRow
     */
    public function setBomJoin(BomSearchRowBasic $bomJoin): TransactionSearchRow
    {
        $this->bomJoin = $bomJoin;
        return $this;
    }

    /**
     * @return BomSearchRowBasic
     */
    public function getBomJoin(): BomSearchRowBasic
    {
        return $this->bomJoin;
    }

    /**
     * @param BomRevisionSearchRowBasic $bomRevisionJoin
     * @return TransactionSearchRow
     */
    public function setBomRevisionJoin(BomRevisionSearchRowBasic $bomRevisionJoin): TransactionSearchRow
    {
        $this->bomRevisionJoin = $bomRevisionJoin;
        return $this;
    }

    /**
     * @return BomRevisionSearchRowBasic
     */
    public function getBomRevisionJoin(): BomRevisionSearchRowBasic
    {
        return $this->bomRevisionJoin;
    }

    /**
     * @param PhoneCallSearchRowBasic $callJoin
     * @return TransactionSearchRow
     */
    public function setCallJoin(PhoneCallSearchRowBasic $callJoin): TransactionSearchRow
    {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * @return PhoneCallSearchRowBasic
     */
    public function getCallJoin(): PhoneCallSearchRowBasic
    {
        return $this->callJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return TransactionSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): TransactionSearchRow
    {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * @return SupportCaseSearchRowBasic
     */
    public function getCaseJoin(): SupportCaseSearchRowBasic
    {
        return $this->caseJoin;
    }

    /**
     * @param ClassificationSearchRowBasic $classJoin
     * @return TransactionSearchRow
     */
    public function setClassJoin(ClassificationSearchRowBasic $classJoin): TransactionSearchRow
    {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin(): ClassificationSearchRowBasic
    {
        return $this->classJoin;
    }

    /**
     * @param TransactionSearchRowBasic $cogsPurchaseJoin
     * @return TransactionSearchRow
     */
    public function setCogsPurchaseJoin(TransactionSearchRowBasic $cogsPurchaseJoin): TransactionSearchRow
    {
        $this->cogsPurchaseJoin = $cogsPurchaseJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getCogsPurchaseJoin(): TransactionSearchRowBasic
    {
        return $this->cogsPurchaseJoin;
    }

    /**
     * @param TransactionSearchRowBasic $cogsSaleJoin
     * @return TransactionSearchRow
     */
    public function setCogsSaleJoin(TransactionSearchRowBasic $cogsSaleJoin): TransactionSearchRow
    {
        $this->cogsSaleJoin = $cogsSaleJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getCogsSaleJoin(): TransactionSearchRowBasic
    {
        return $this->cogsSaleJoin;
    }

    /**
     * @param ContactSearchRowBasic $contactPrimaryJoin
     * @return TransactionSearchRow
     */
    public function setContactPrimaryJoin(ContactSearchRowBasic $contactPrimaryJoin): TransactionSearchRow
    {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactPrimaryJoin(): ContactSearchRowBasic
    {
        return $this->contactPrimaryJoin;
    }

    /**
     * @param TransactionSearchRowBasic $createdFromJoin
     * @return TransactionSearchRow
     */
    public function setCreatedFromJoin(TransactionSearchRowBasic $createdFromJoin): TransactionSearchRow
    {
        $this->createdFromJoin = $createdFromJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getCreatedFromJoin(): TransactionSearchRowBasic
    {
        return $this->createdFromJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return TransactionSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): TransactionSearchRow
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin(): CustomerSearchRowBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerMainJoin
     * @return TransactionSearchRow
     */
    public function setCustomerMainJoin(CustomerSearchRowBasic $customerMainJoin): TransactionSearchRow
    {
        $this->customerMainJoin = $customerMainJoin;
        return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerMainJoin(): CustomerSearchRowBasic
    {
        return $this->customerMainJoin;
    }

    /**
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return TransactionSearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin): TransactionSearchRow
    {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin(): DepartmentSearchRowBasic
    {
        return $this->departmentJoin;
    }

    /**
     * @param TransactionSearchRowBasic $depositTransactionJoin
     * @return TransactionSearchRow
     */
    public function setDepositTransactionJoin(TransactionSearchRowBasic $depositTransactionJoin): TransactionSearchRow
    {
        $this->depositTransactionJoin = $depositTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getDepositTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->depositTransactionJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return TransactionSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): TransactionSearchRow
    {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getEmployeeJoin(): EmployeeSearchRowBasic
    {
        return $this->employeeJoin;
    }

    /**
     * @param CalendarEventSearchRowBasic $eventJoin
     * @return TransactionSearchRow
     */
    public function setEventJoin(CalendarEventSearchRowBasic $eventJoin): TransactionSearchRow
    {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * @return CalendarEventSearchRowBasic
     */
    public function getEventJoin(): CalendarEventSearchRowBasic
    {
        return $this->eventJoin;
    }

    /**
     * @param ExpenseCategorySearchRowBasic $expenseCategoryJoin
     * @return TransactionSearchRow
     */
    public function setExpenseCategoryJoin(ExpenseCategorySearchRowBasic $expenseCategoryJoin): TransactionSearchRow
    {
        $this->expenseCategoryJoin = $expenseCategoryJoin;
        return $this;
    }

    /**
     * @return ExpenseCategorySearchRowBasic
     */
    public function getExpenseCategoryJoin(): ExpenseCategorySearchRowBasic
    {
        return $this->expenseCategoryJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return TransactionSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): TransactionSearchRow
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
     * @param LocationSearchRowBasic $fromLocationJoin
     * @return TransactionSearchRow
     */
    public function setFromLocationJoin(LocationSearchRowBasic $fromLocationJoin): TransactionSearchRow
    {
        $this->fromLocationJoin = $fromLocationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getFromLocationJoin(): LocationSearchRowBasic
    {
        return $this->fromLocationJoin;
    }

    /**
     * @param TransactionSearchRowBasic $fulfillingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setFulfillingTransactionJoin(TransactionSearchRowBasic $fulfillingTransactionJoin): TransactionSearchRow
    {
        $this->fulfillingTransactionJoin = $fulfillingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getFulfillingTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->fulfillingTransactionJoin;
    }

    /**
     * @param BillingAccountSearchRowBasic $headerBillingAccountJoin
     * @return TransactionSearchRow
     */
    public function setHeaderBillingAccountJoin(BillingAccountSearchRowBasic $headerBillingAccountJoin): TransactionSearchRow
    {
        $this->headerBillingAccountJoin = $headerBillingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getHeaderBillingAccountJoin(): BillingAccountSearchRowBasic
    {
        return $this->headerBillingAccountJoin;
    }

    /**
     * @param InstallmentSearchRowBasic $installmentJoin
     * @return TransactionSearchRow
     */
    public function setInstallmentJoin(InstallmentSearchRowBasic $installmentJoin): TransactionSearchRow
    {
        $this->installmentJoin = $installmentJoin;
        return $this;
    }

    /**
     * @return InstallmentSearchRowBasic
     */
    public function getInstallmentJoin(): InstallmentSearchRowBasic
    {
        return $this->installmentJoin;
    }

    /**
     * @param InventoryDetailSearchRowBasic $inventoryDetailJoin
     * @return TransactionSearchRow
     */
    public function setInventoryDetailJoin(InventoryDetailSearchRowBasic $inventoryDetailJoin): TransactionSearchRow
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
     * @return TransactionSearchRow
     */
    public function setItemJoin(ItemSearchRowBasic $itemJoin): TransactionSearchRow
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
     * @param InventoryNumberSearchRowBasic $itemNumberJoin
     * @return TransactionSearchRow
     */
    public function setItemNumberJoin(InventoryNumberSearchRowBasic $itemNumberJoin): TransactionSearchRow
    {
        $this->itemNumberJoin = $itemNumberJoin;
        return $this;
    }

    /**
     * @return InventoryNumberSearchRowBasic
     */
    public function getItemNumberJoin(): InventoryNumberSearchRowBasic
    {
        return $this->itemNumberJoin;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return TransactionSearchRow
     */
    public function setJobJoin(JobSearchRowBasic $jobJoin): TransactionSearchRow
    {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobJoin(): JobSearchRowBasic
    {
        return $this->jobJoin;
    }

    /**
     * @param JobSearchRowBasic $jobMainJoin
     * @return TransactionSearchRow
     */
    public function setJobMainJoin(JobSearchRowBasic $jobMainJoin): TransactionSearchRow
    {
        $this->jobMainJoin = $jobMainJoin;
        return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobMainJoin(): JobSearchRowBasic
    {
        return $this->jobMainJoin;
    }

    /**
     * @param CampaignSearchRowBasic $leadSourceJoin
     * @return TransactionSearchRow
     */
    public function setLeadSourceJoin(CampaignSearchRowBasic $leadSourceJoin): TransactionSearchRow
    {
        $this->leadSourceJoin = $leadSourceJoin;
        return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getLeadSourceJoin(): CampaignSearchRowBasic
    {
        return $this->leadSourceJoin;
    }

    /**
     * @param BillingAccountSearchRowBasic $lineBillingAccountJoin
     * @return TransactionSearchRow
     */
    public function setLineBillingAccountJoin(BillingAccountSearchRowBasic $lineBillingAccountJoin): TransactionSearchRow
    {
        $this->lineBillingAccountJoin = $lineBillingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getLineBillingAccountJoin(): BillingAccountSearchRowBasic
    {
        return $this->lineBillingAccountJoin;
    }

    /**
     * @param FileSearchRowBasic $lineFileJoin
     * @return TransactionSearchRow
     */
    public function setLineFileJoin(FileSearchRowBasic $lineFileJoin): TransactionSearchRow
    {
        $this->lineFileJoin = $lineFileJoin;
        return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getLineFileJoin(): FileSearchRowBasic
    {
        return $this->lineFileJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return TransactionSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): TransactionSearchRow
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin(): LocationSearchRowBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param ManufacturingOperationTaskSearchRowBasic $manufacturingOperationTaskJoin
     * @return TransactionSearchRow
     */
    public function setManufacturingOperationTaskJoin(ManufacturingOperationTaskSearchRowBasic $manufacturingOperationTaskJoin): TransactionSearchRow
    {
        $this->manufacturingOperationTaskJoin = $manufacturingOperationTaskJoin;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getManufacturingOperationTaskJoin(): ManufacturingOperationTaskSearchRowBasic
    {
        return $this->manufacturingOperationTaskJoin;
    }

    /**
     * @param MessageSearchRowBasic $messagesJoin
     * @return TransactionSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): TransactionSearchRow
    {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getMessagesJoin(): MessageSearchRowBasic
    {
        return $this->messagesJoin;
    }

    /**
     * @param EntitySearchRowBasic $nextApproverJoin
     * @return TransactionSearchRow
     */
    public function setNextApproverJoin(EntitySearchRowBasic $nextApproverJoin): TransactionSearchRow
    {
        $this->nextApproverJoin = $nextApproverJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getNextApproverJoin(): EntitySearchRowBasic
    {
        return $this->nextApproverJoin;
    }

    /**
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return TransactionSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): TransactionSearchRow
    {
        $this->opportunityJoin = $opportunityJoin;
        return $this;
    }

    /**
     * @return OpportunitySearchRowBasic
     */
    public function getOpportunityJoin(): OpportunitySearchRowBasic
    {
        return $this->opportunityJoin;
    }

    /**
     * @param VendorSearchRowBasic $outsourcingVendorJoin
     * @return TransactionSearchRow
     */
    public function setOutsourcingVendorJoin(VendorSearchRowBasic $outsourcingVendorJoin): TransactionSearchRow
    {
        $this->outsourcingVendorJoin = $outsourcingVendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getOutsourcingVendorJoin(): VendorSearchRowBasic
    {
        return $this->outsourcingVendorJoin;
    }

    /**
     * @param TransactionSearchRowBasic $paidTransactionJoin
     * @return TransactionSearchRow
     */
    public function setPaidTransactionJoin(TransactionSearchRowBasic $paidTransactionJoin): TransactionSearchRow
    {
        $this->paidTransactionJoin = $paidTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getPaidTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->paidTransactionJoin;
    }

    /**
     * @param PartnerSearchRowBasic $partnerJoin
     * @return TransactionSearchRow
     */
    public function setPartnerJoin(PartnerSearchRowBasic $partnerJoin): TransactionSearchRow
    {
        $this->partnerJoin = $partnerJoin;
        return $this;
    }

    /**
     * @return PartnerSearchRowBasic
     */
    public function getPartnerJoin(): PartnerSearchRowBasic
    {
        return $this->partnerJoin;
    }

    /**
     * @param TransactionSearchRowBasic $payingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setPayingTransactionJoin(TransactionSearchRowBasic $payingTransactionJoin): TransactionSearchRow
    {
        $this->payingTransactionJoin = $payingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getPayingTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->payingTransactionJoin;
    }

    /**
     * @param PaymentInstrumentSearchRowBasic $paymentInstrumentJoin
     * @return TransactionSearchRow
     */
    public function setPaymentInstrumentJoin(PaymentInstrumentSearchRowBasic $paymentInstrumentJoin): TransactionSearchRow
    {
        $this->paymentInstrumentJoin = $paymentInstrumentJoin;
        return $this;
    }

    /**
     * @return PaymentInstrumentSearchRowBasic
     */
    public function getPaymentInstrumentJoin(): PaymentInstrumentSearchRowBasic
    {
        return $this->paymentInstrumentJoin;
    }

    /**
     * @param PaymentOptionSearchRowBasic $paymentOptionJoin
     * @return TransactionSearchRow
     */
    public function setPaymentOptionJoin(PaymentOptionSearchRowBasic $paymentOptionJoin): TransactionSearchRow
    {
        $this->paymentOptionJoin = $paymentOptionJoin;
        return $this;
    }

    /**
     * @return PaymentOptionSearchRowBasic
     */
    public function getPaymentOptionJoin(): PaymentOptionSearchRowBasic
    {
        return $this->paymentOptionJoin;
    }

    /**
     * @param PayrollItemSearchRowBasic $payrollItemJoin
     * @return TransactionSearchRow
     */
    public function setPayrollItemJoin(PayrollItemSearchRowBasic $payrollItemJoin): TransactionSearchRow
    {
        $this->payrollItemJoin = $payrollItemJoin;
        return $this;
    }

    /**
     * @return PayrollItemSearchRowBasic
     */
    public function getPayrollItemJoin(): PayrollItemSearchRowBasic
    {
        return $this->payrollItemJoin;
    }

    /**
     * @param ProjectTaskSearchRowBasic $projectTaskJoin
     * @return TransactionSearchRow
     */
    public function setProjectTaskJoin(ProjectTaskSearchRowBasic $projectTaskJoin): TransactionSearchRow
    {
        $this->projectTaskJoin = $projectTaskJoin;
        return $this;
    }

    /**
     * @return ProjectTaskSearchRowBasic
     */
    public function getProjectTaskJoin(): ProjectTaskSearchRowBasic
    {
        return $this->projectTaskJoin;
    }

    /**
     * @param TransactionSearchRowBasic $purchaseOrderJoin
     * @return TransactionSearchRow
     */
    public function setPurchaseOrderJoin(TransactionSearchRowBasic $purchaseOrderJoin): TransactionSearchRow
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
     * @param EmployeeSearchRowBasic $requestorJoin
     * @return TransactionSearchRow
     */
    public function setRequestorJoin(EmployeeSearchRowBasic $requestorJoin): TransactionSearchRow
    {
        $this->requestorJoin = $requestorJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getRequestorJoin(): EmployeeSearchRowBasic
    {
        return $this->requestorJoin;
    }

    /**
     * @param TransactionSearchRowBasic $revCommittingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setRevCommittingTransactionJoin(TransactionSearchRowBasic $revCommittingTransactionJoin): TransactionSearchRow
    {
        $this->revCommittingTransactionJoin = $revCommittingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getRevCommittingTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->revCommittingTransactionJoin;
    }

    /**
     * @param ItemRevisionSearchRowBasic $revisionJoin
     * @return TransactionSearchRow
     */
    public function setRevisionJoin(ItemRevisionSearchRowBasic $revisionJoin): TransactionSearchRow
    {
        $this->revisionJoin = $revisionJoin;
        return $this;
    }

    /**
     * @return ItemRevisionSearchRowBasic
     */
    public function getRevisionJoin(): ItemRevisionSearchRowBasic
    {
        return $this->revisionJoin;
    }

    /**
     * @param RevRecScheduleSearchRowBasic $revRecScheduleJoin
     * @return TransactionSearchRow
     */
    public function setRevRecScheduleJoin(RevRecScheduleSearchRowBasic $revRecScheduleJoin): TransactionSearchRow
    {
        $this->revRecScheduleJoin = $revRecScheduleJoin;
        return $this;
    }

    /**
     * @return RevRecScheduleSearchRowBasic
     */
    public function getRevRecScheduleJoin(): RevRecScheduleSearchRowBasic
    {
        return $this->revRecScheduleJoin;
    }

    /**
     * @param TransactionSearchRowBasic $rgPostingTransactionJoin
     * @return TransactionSearchRow
     */
    public function setRgPostingTransactionJoin(TransactionSearchRowBasic $rgPostingTransactionJoin): TransactionSearchRow
    {
        $this->rgPostingTransactionJoin = $rgPostingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getRgPostingTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->rgPostingTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $salesOrderJoin
     * @return TransactionSearchRow
     */
    public function setSalesOrderJoin(TransactionSearchRowBasic $salesOrderJoin): TransactionSearchRow
    {
        $this->salesOrderJoin = $salesOrderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getSalesOrderJoin(): TransactionSearchRowBasic
    {
        return $this->salesOrderJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $salesRepJoin
     * @return TransactionSearchRow
     */
    public function setSalesRepJoin(EmployeeSearchRowBasic $salesRepJoin): TransactionSearchRow
    {
        $this->salesRepJoin = $salesRepJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getSalesRepJoin(): EmployeeSearchRowBasic
    {
        return $this->salesRepJoin;
    }

    /**
     * @param AddressSearchRowBasic $shippingAddressJoin
     * @return TransactionSearchRow
     */
    public function setShippingAddressJoin(AddressSearchRowBasic $shippingAddressJoin): TransactionSearchRow
    {
        $this->shippingAddressJoin = $shippingAddressJoin;
        return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getShippingAddressJoin(): AddressSearchRowBasic
    {
        return $this->shippingAddressJoin;
    }

    /**
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return TransactionSearchRow
     */
    public function setSubsidiaryJoin(SubsidiarySearchRowBasic $subsidiaryJoin): TransactionSearchRow
    {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin(): SubsidiarySearchRowBasic
    {
        return $this->subsidiaryJoin;
    }

    /**
     * @param TaskSearchRowBasic $taskJoin
     * @return TransactionSearchRow
     */
    public function setTaskJoin(TaskSearchRowBasic $taskJoin): TransactionSearchRow
    {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * @return TaskSearchRowBasic
     */
    public function getTaskJoin(): TaskSearchRowBasic
    {
        return $this->taskJoin;
    }

    /**
     * @param SalesTaxItemSearchRowBasic $taxCodeJoin
     * @return TransactionSearchRow
     */
    public function setTaxCodeJoin(SalesTaxItemSearchRowBasic $taxCodeJoin): TransactionSearchRow
    {
        $this->taxCodeJoin = $taxCodeJoin;
        return $this;
    }

    /**
     * @return SalesTaxItemSearchRowBasic
     */
    public function getTaxCodeJoin(): SalesTaxItemSearchRowBasic
    {
        return $this->taxCodeJoin;
    }

    /**
     * @param TaxDetailSearchRowBasic $taxDetailJoin
     * @return TransactionSearchRow
     */
    public function setTaxDetailJoin(TaxDetailSearchRowBasic $taxDetailJoin): TransactionSearchRow
    {
        $this->taxDetailJoin = $taxDetailJoin;
        return $this;
    }

    /**
     * @return TaxDetailSearchRowBasic
     */
    public function getTaxDetailJoin(): TaxDetailSearchRowBasic
    {
        return $this->taxDetailJoin;
    }

    /**
     * @param SalesTaxItemSearchRowBasic $taxItemJoin
     * @return TransactionSearchRow
     */
    public function setTaxItemJoin(SalesTaxItemSearchRowBasic $taxItemJoin): TransactionSearchRow
    {
        $this->taxItemJoin = $taxItemJoin;
        return $this;
    }

    /**
     * @return SalesTaxItemSearchRowBasic
     */
    public function getTaxItemJoin(): SalesTaxItemSearchRowBasic
    {
        return $this->taxItemJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return TransactionSearchRow
     */
    public function setTimeJoin(TimeBillSearchRowBasic $timeJoin): TransactionSearchRow
    {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin(): TimeBillSearchRowBasic
    {
        return $this->timeJoin;
    }

    /**
     * @param LocationSearchRowBasic $toLocationJoin
     * @return TransactionSearchRow
     */
    public function setToLocationJoin(LocationSearchRowBasic $toLocationJoin): TransactionSearchRow
    {
        $this->toLocationJoin = $toLocationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getToLocationJoin(): LocationSearchRowBasic
    {
        return $this->toLocationJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return TransactionSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): TransactionSearchRow
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
     * @return TransactionSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): TransactionSearchRow
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
     * @return TransactionSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): TransactionSearchRow
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
     * @param VendorSearchRowBasic $vendorLineJoin
     * @return TransactionSearchRow
     */
    public function setVendorLineJoin(VendorSearchRowBasic $vendorLineJoin): TransactionSearchRow
    {
        $this->vendorLineJoin = $vendorLineJoin;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorLineJoin(): VendorSearchRowBasic
    {
        return $this->vendorLineJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return TransactionSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): TransactionSearchRow
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
