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

class TransactionSearch extends SearchRecord {
    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $basic;

    /**
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $accountJoin;

    /**
     * @var AccountingPeriodSearchBasic
     */
    protected AccountingPeriodSearchBasic $accountingPeriodJoin;

    /**
     * @var AccountingTransactionSearchBasic
     */
    protected AccountingTransactionSearchBasic $accountingTransactionJoin;

    /**
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $advanceToApplyAccountJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $appliedToTransactionJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $applyingTransactionJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $assemblyJoin;

    /**
     * @var AddressSearchBasic
     */
    protected AddressSearchBasic $billingAddressJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $billingTransactionJoin;

    /**
     * @var BinSearchBasic
     */
    protected BinSearchBasic $binNumberJoin;

    /**
     * @var BomSearchBasic
     */
    protected BomSearchBasic $bomJoin;

    /**
     * @var BomRevisionSearchBasic
     */
    protected BomRevisionSearchBasic $bomRevisionJoin;

    /**
     * @var PhoneCallSearchBasic
     */
    protected PhoneCallSearchBasic $callJoin;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var ClassificationSearchBasic
     */
    protected ClassificationSearchBasic $classJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $cogsPurchaseJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $cogsSaleJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactPrimaryJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $createdFromJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerMainJoin;

    /**
     * @var DepartmentSearchBasic
     */
    protected DepartmentSearchBasic $departmentJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $depositTransactionJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var CalendarEventSearchBasic
     */
    protected CalendarEventSearchBasic $eventJoin;

    /**
     * @var ExpenseCategorySearchBasic
     */
    protected ExpenseCategorySearchBasic $expenseCategoryJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $fromLocationJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $fulfillingTransactionJoin;

    /**
     * @var BillingAccountSearchBasic
     */
    protected BillingAccountSearchBasic $headerBillingAccountJoin;

    /**
     * @var InstallmentSearchBasic
     */
    protected InstallmentSearchBasic $installmentJoin;

    /**
     * @var InventoryDetailSearchBasic
     */
    protected InventoryDetailSearchBasic $inventoryDetailJoin;

    /**
     * @var ItemSearchBasic
     */
    protected ItemSearchBasic $itemJoin;

    /**
     * @var InventoryNumberSearchBasic
     */
    protected InventoryNumberSearchBasic $itemNumberJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobJoin;

    /**
     * @var JobSearchBasic
     */
    protected JobSearchBasic $jobMainJoin;

    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $leadSourceJoin;

    /**
     * @var BillingAccountSearchBasic
     */
    protected BillingAccountSearchBasic $lineBillingAccountJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $lineFileJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $locationJoin;

    /**
     * @var ManufacturingOperationTaskSearchBasic
     */
    protected ManufacturingOperationTaskSearchBasic $manufacturingOperationTaskJoin;

    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $messagesJoin;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $nextApproverJoin;

    /**
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $opportunityJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $outsourcingVendorJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $paidTransactionJoin;

    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $partnerJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $payingTransactionJoin;

    /**
     * @var PaymentInstrumentSearchBasic
     */
    protected PaymentInstrumentSearchBasic $paymentInstrumentJoin;

    /**
     * @var PaymentOptionSearchBasic
     */
    protected PaymentOptionSearchBasic $paymentOptionJoin;

    /**
     * @var PayrollItemSearchBasic
     */
    protected PayrollItemSearchBasic $payrollItemJoin;

    /**
     * @var ProjectTaskSearchBasic
     */
    protected ProjectTaskSearchBasic $projectTaskJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $purchaseOrderJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $requestorJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $revCommittingTransactionJoin;

    /**
     * @var ItemRevisionSearchBasic
     */
    protected ItemRevisionSearchBasic $revisionJoin;

    /**
     * @var RevRecScheduleSearchBasic
     */
    protected RevRecScheduleSearchBasic $revRecScheduleJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $rgPostingTransactionJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $salesOrderJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $salesRepJoin;

    /**
     * @var AddressSearchBasic
     */
    protected AddressSearchBasic $shippingAddressJoin;

    /**
     * @var SubsidiarySearchBasic
     */
    protected SubsidiarySearchBasic $subsidiaryJoin;

    /**
     * @var TaskSearchBasic
     */
    protected TaskSearchBasic $taskJoin;

    /**
     * @var SalesTaxItemSearchBasic
     */
    protected SalesTaxItemSearchBasic $taxCodeJoin;

    /**
     * @var TaxDetailSearchBasic
     */
    protected TaxDetailSearchBasic $taxDetailJoin;

    /**
     * @var SalesTaxItemSearchBasic
     */
    protected SalesTaxItemSearchBasic $taxItemJoin;

    /**
     * @var TimeBillSearchBasic
     */
    protected TimeBillSearchBasic $timeJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $toLocationJoin;

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
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $vendorLineJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "TransactionSearchBasic",
        "accountJoin" => "AccountSearchBasic",
        "accountingPeriodJoin" => "AccountingPeriodSearchBasic",
        "accountingTransactionJoin" => "AccountingTransactionSearchBasic",
        "advanceToApplyAccountJoin" => "AccountSearchBasic",
        "appliedToTransactionJoin" => "TransactionSearchBasic",
        "applyingTransactionJoin" => "TransactionSearchBasic",
        "assemblyJoin" => "ItemSearchBasic",
        "billingAddressJoin" => "AddressSearchBasic",
        "billingTransactionJoin" => "TransactionSearchBasic",
        "binNumberJoin" => "BinSearchBasic",
        "bomJoin" => "BomSearchBasic",
        "bomRevisionJoin" => "BomRevisionSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "classJoin" => "ClassificationSearchBasic",
        "cogsPurchaseJoin" => "TransactionSearchBasic",
        "cogsSaleJoin" => "TransactionSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "createdFromJoin" => "TransactionSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "customerMainJoin" => "CustomerSearchBasic",
        "departmentJoin" => "DepartmentSearchBasic",
        "depositTransactionJoin" => "TransactionSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "expenseCategoryJoin" => "ExpenseCategorySearchBasic",
        "fileJoin" => "FileSearchBasic",
        "fromLocationJoin" => "LocationSearchBasic",
        "fulfillingTransactionJoin" => "TransactionSearchBasic",
        "headerBillingAccountJoin" => "BillingAccountSearchBasic",
        "installmentJoin" => "InstallmentSearchBasic",
        "inventoryDetailJoin" => "InventoryDetailSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "itemNumberJoin" => "InventoryNumberSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "jobMainJoin" => "JobSearchBasic",
        "leadSourceJoin" => "CampaignSearchBasic",
        "lineBillingAccountJoin" => "BillingAccountSearchBasic",
        "lineFileJoin" => "FileSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "manufacturingOperationTaskJoin" => "ManufacturingOperationTaskSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "nextApproverJoin" => "EntitySearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "outsourcingVendorJoin" => "VendorSearchBasic",
        "paidTransactionJoin" => "TransactionSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "payingTransactionJoin" => "TransactionSearchBasic",
        "paymentInstrumentJoin" => "PaymentInstrumentSearchBasic",
        "paymentOptionJoin" => "PaymentOptionSearchBasic",
        "payrollItemJoin" => "PayrollItemSearchBasic",
        "projectTaskJoin" => "ProjectTaskSearchBasic",
        "purchaseOrderJoin" => "TransactionSearchBasic",
        "requestorJoin" => "EmployeeSearchBasic",
        "revCommittingTransactionJoin" => "TransactionSearchBasic",
        "revisionJoin" => "ItemRevisionSearchBasic",
        "revRecScheduleJoin" => "RevRecScheduleSearchBasic",
        "rgPostingTransactionJoin" => "TransactionSearchBasic",
        "salesOrderJoin" => "TransactionSearchBasic",
        "salesRepJoin" => "EmployeeSearchBasic",
        "shippingAddressJoin" => "AddressSearchBasic",
        "subsidiaryJoin" => "SubsidiarySearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "taxCodeJoin" => "SalesTaxItemSearchBasic",
        "taxDetailJoin" => "TaxDetailSearchBasic",
        "taxItemJoin" => "SalesTaxItemSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "toLocationJoin" => "LocationSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "vendorLineJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param TransactionSearchBasic $basic
     * @return TransactionSearch
     */
    public function setBasic(TransactionSearchBasic $basic): TransactionSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getBasic(): TransactionSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param AccountSearchBasic $accountJoin
     * @return TransactionSearch
     */
    public function setAccountJoin(AccountSearchBasic $accountJoin): TransactionSearch
    {
        $this->accountJoin = $accountJoin;
        return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getAccountJoin(): AccountSearchBasic
    {
        return $this->accountJoin;
    }

    /**
     * @param AccountingPeriodSearchBasic $accountingPeriodJoin
     * @return TransactionSearch
     */
    public function setAccountingPeriodJoin(AccountingPeriodSearchBasic $accountingPeriodJoin): TransactionSearch
    {
        $this->accountingPeriodJoin = $accountingPeriodJoin;
        return $this;
    }

    /**
     * @return AccountingPeriodSearchBasic
     */
    public function getAccountingPeriodJoin(): AccountingPeriodSearchBasic
    {
        return $this->accountingPeriodJoin;
    }

    /**
     * @param AccountingTransactionSearchBasic $accountingTransactionJoin
     * @return TransactionSearch
     */
    public function setAccountingTransactionJoin(AccountingTransactionSearchBasic $accountingTransactionJoin): TransactionSearch
    {
        $this->accountingTransactionJoin = $accountingTransactionJoin;
        return $this;
    }

    /**
     * @return AccountingTransactionSearchBasic
     */
    public function getAccountingTransactionJoin(): AccountingTransactionSearchBasic
    {
        return $this->accountingTransactionJoin;
    }

    /**
     * @param AccountSearchBasic $advanceToApplyAccountJoin
     * @return TransactionSearch
     */
    public function setAdvanceToApplyAccountJoin(AccountSearchBasic $advanceToApplyAccountJoin): TransactionSearch
    {
        $this->advanceToApplyAccountJoin = $advanceToApplyAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getAdvanceToApplyAccountJoin(): AccountSearchBasic
    {
        return $this->advanceToApplyAccountJoin;
    }

    /**
     * @param TransactionSearchBasic $appliedToTransactionJoin
     * @return TransactionSearch
     */
    public function setAppliedToTransactionJoin(TransactionSearchBasic $appliedToTransactionJoin): TransactionSearch
    {
        $this->appliedToTransactionJoin = $appliedToTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getAppliedToTransactionJoin(): TransactionSearchBasic
    {
        return $this->appliedToTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $applyingTransactionJoin
     * @return TransactionSearch
     */
    public function setApplyingTransactionJoin(TransactionSearchBasic $applyingTransactionJoin): TransactionSearch
    {
        $this->applyingTransactionJoin = $applyingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getApplyingTransactionJoin(): TransactionSearchBasic
    {
        return $this->applyingTransactionJoin;
    }

    /**
     * @param ItemSearchBasic $assemblyJoin
     * @return TransactionSearch
     */
    public function setAssemblyJoin(ItemSearchBasic $assemblyJoin): TransactionSearch
    {
        $this->assemblyJoin = $assemblyJoin;
        return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getAssemblyJoin(): ItemSearchBasic
    {
        return $this->assemblyJoin;
    }

    /**
     * @param AddressSearchBasic $billingAddressJoin
     * @return TransactionSearch
     */
    public function setBillingAddressJoin(AddressSearchBasic $billingAddressJoin): TransactionSearch
    {
        $this->billingAddressJoin = $billingAddressJoin;
        return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getBillingAddressJoin(): AddressSearchBasic
    {
        return $this->billingAddressJoin;
    }

    /**
     * @param TransactionSearchBasic $billingTransactionJoin
     * @return TransactionSearch
     */
    public function setBillingTransactionJoin(TransactionSearchBasic $billingTransactionJoin): TransactionSearch
    {
        $this->billingTransactionJoin = $billingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getBillingTransactionJoin(): TransactionSearchBasic
    {
        return $this->billingTransactionJoin;
    }

    /**
     * @param BinSearchBasic $binNumberJoin
     * @return TransactionSearch
     */
    public function setBinNumberJoin(BinSearchBasic $binNumberJoin): TransactionSearch
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
     * @param BomSearchBasic $bomJoin
     * @return TransactionSearch
     */
    public function setBomJoin(BomSearchBasic $bomJoin): TransactionSearch
    {
        $this->bomJoin = $bomJoin;
        return $this;
    }

    /**
     * @return BomSearchBasic
     */
    public function getBomJoin(): BomSearchBasic
    {
        return $this->bomJoin;
    }

    /**
     * @param BomRevisionSearchBasic $bomRevisionJoin
     * @return TransactionSearch
     */
    public function setBomRevisionJoin(BomRevisionSearchBasic $bomRevisionJoin): TransactionSearch
    {
        $this->bomRevisionJoin = $bomRevisionJoin;
        return $this;
    }

    /**
     * @return BomRevisionSearchBasic
     */
    public function getBomRevisionJoin(): BomRevisionSearchBasic
    {
        return $this->bomRevisionJoin;
    }

    /**
     * @param PhoneCallSearchBasic $callJoin
     * @return TransactionSearch
     */
    public function setCallJoin(PhoneCallSearchBasic $callJoin): TransactionSearch
    {
        $this->callJoin = $callJoin;
        return $this;
    }

    /**
     * @return PhoneCallSearchBasic
     */
    public function getCallJoin(): PhoneCallSearchBasic
    {
        return $this->callJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return TransactionSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): TransactionSearch
    {
        $this->caseJoin = $caseJoin;
        return $this;
    }

    /**
     * @return SupportCaseSearchBasic
     */
    public function getCaseJoin(): SupportCaseSearchBasic
    {
        return $this->caseJoin;
    }

    /**
     * @param ClassificationSearchBasic $classJoin
     * @return TransactionSearch
     */
    public function setClassJoin(ClassificationSearchBasic $classJoin): TransactionSearch
    {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * @return ClassificationSearchBasic
     */
    public function getClassJoin(): ClassificationSearchBasic
    {
        return $this->classJoin;
    }

    /**
     * @param TransactionSearchBasic $cogsPurchaseJoin
     * @return TransactionSearch
     */
    public function setCogsPurchaseJoin(TransactionSearchBasic $cogsPurchaseJoin): TransactionSearch
    {
        $this->cogsPurchaseJoin = $cogsPurchaseJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getCogsPurchaseJoin(): TransactionSearchBasic
    {
        return $this->cogsPurchaseJoin;
    }

    /**
     * @param TransactionSearchBasic $cogsSaleJoin
     * @return TransactionSearch
     */
    public function setCogsSaleJoin(TransactionSearchBasic $cogsSaleJoin): TransactionSearch
    {
        $this->cogsSaleJoin = $cogsSaleJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getCogsSaleJoin(): TransactionSearchBasic
    {
        return $this->cogsSaleJoin;
    }

    /**
     * @param ContactSearchBasic $contactPrimaryJoin
     * @return TransactionSearch
     */
    public function setContactPrimaryJoin(ContactSearchBasic $contactPrimaryJoin): TransactionSearch
    {
        $this->contactPrimaryJoin = $contactPrimaryJoin;
        return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactPrimaryJoin(): ContactSearchBasic
    {
        return $this->contactPrimaryJoin;
    }

    /**
     * @param TransactionSearchBasic $createdFromJoin
     * @return TransactionSearch
     */
    public function setCreatedFromJoin(TransactionSearchBasic $createdFromJoin): TransactionSearch
    {
        $this->createdFromJoin = $createdFromJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getCreatedFromJoin(): TransactionSearchBasic
    {
        return $this->createdFromJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return TransactionSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): TransactionSearch
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin(): CustomerSearchBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param CustomerSearchBasic $customerMainJoin
     * @return TransactionSearch
     */
    public function setCustomerMainJoin(CustomerSearchBasic $customerMainJoin): TransactionSearch
    {
        $this->customerMainJoin = $customerMainJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerMainJoin(): CustomerSearchBasic
    {
        return $this->customerMainJoin;
    }

    /**
     * @param DepartmentSearchBasic $departmentJoin
     * @return TransactionSearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin): TransactionSearch
    {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin(): DepartmentSearchBasic
    {
        return $this->departmentJoin;
    }

    /**
     * @param TransactionSearchBasic $depositTransactionJoin
     * @return TransactionSearch
     */
    public function setDepositTransactionJoin(TransactionSearchBasic $depositTransactionJoin): TransactionSearch
    {
        $this->depositTransactionJoin = $depositTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getDepositTransactionJoin(): TransactionSearchBasic
    {
        return $this->depositTransactionJoin;
    }

    /**
     * @param EmployeeSearchBasic $employeeJoin
     * @return TransactionSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): TransactionSearch
    {
        $this->employeeJoin = $employeeJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getEmployeeJoin(): EmployeeSearchBasic
    {
        return $this->employeeJoin;
    }

    /**
     * @param CalendarEventSearchBasic $eventJoin
     * @return TransactionSearch
     */
    public function setEventJoin(CalendarEventSearchBasic $eventJoin): TransactionSearch
    {
        $this->eventJoin = $eventJoin;
        return $this;
    }

    /**
     * @return CalendarEventSearchBasic
     */
    public function getEventJoin(): CalendarEventSearchBasic
    {
        return $this->eventJoin;
    }

    /**
     * @param ExpenseCategorySearchBasic $expenseCategoryJoin
     * @return TransactionSearch
     */
    public function setExpenseCategoryJoin(ExpenseCategorySearchBasic $expenseCategoryJoin): TransactionSearch
    {
        $this->expenseCategoryJoin = $expenseCategoryJoin;
        return $this;
    }

    /**
     * @return ExpenseCategorySearchBasic
     */
    public function getExpenseCategoryJoin(): ExpenseCategorySearchBasic
    {
        return $this->expenseCategoryJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return TransactionSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): TransactionSearch
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
     * @param LocationSearchBasic $fromLocationJoin
     * @return TransactionSearch
     */
    public function setFromLocationJoin(LocationSearchBasic $fromLocationJoin): TransactionSearch
    {
        $this->fromLocationJoin = $fromLocationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getFromLocationJoin(): LocationSearchBasic
    {
        return $this->fromLocationJoin;
    }

    /**
     * @param TransactionSearchBasic $fulfillingTransactionJoin
     * @return TransactionSearch
     */
    public function setFulfillingTransactionJoin(TransactionSearchBasic $fulfillingTransactionJoin): TransactionSearch
    {
        $this->fulfillingTransactionJoin = $fulfillingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getFulfillingTransactionJoin(): TransactionSearchBasic
    {
        return $this->fulfillingTransactionJoin;
    }

    /**
     * @param BillingAccountSearchBasic $headerBillingAccountJoin
     * @return TransactionSearch
     */
    public function setHeaderBillingAccountJoin(BillingAccountSearchBasic $headerBillingAccountJoin): TransactionSearch
    {
        $this->headerBillingAccountJoin = $headerBillingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getHeaderBillingAccountJoin(): BillingAccountSearchBasic
    {
        return $this->headerBillingAccountJoin;
    }

    /**
     * @param InstallmentSearchBasic $installmentJoin
     * @return TransactionSearch
     */
    public function setInstallmentJoin(InstallmentSearchBasic $installmentJoin): TransactionSearch
    {
        $this->installmentJoin = $installmentJoin;
        return $this;
    }

    /**
     * @return InstallmentSearchBasic
     */
    public function getInstallmentJoin(): InstallmentSearchBasic
    {
        return $this->installmentJoin;
    }

    /**
     * @param InventoryDetailSearchBasic $inventoryDetailJoin
     * @return TransactionSearch
     */
    public function setInventoryDetailJoin(InventoryDetailSearchBasic $inventoryDetailJoin): TransactionSearch
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
     * @return TransactionSearch
     */
    public function setItemJoin(ItemSearchBasic $itemJoin): TransactionSearch
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
     * @param InventoryNumberSearchBasic $itemNumberJoin
     * @return TransactionSearch
     */
    public function setItemNumberJoin(InventoryNumberSearchBasic $itemNumberJoin): TransactionSearch
    {
        $this->itemNumberJoin = $itemNumberJoin;
        return $this;
    }

    /**
     * @return InventoryNumberSearchBasic
     */
    public function getItemNumberJoin(): InventoryNumberSearchBasic
    {
        return $this->itemNumberJoin;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return TransactionSearch
     */
    public function setJobJoin(JobSearchBasic $jobJoin): TransactionSearch
    {
        $this->jobJoin = $jobJoin;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobJoin(): JobSearchBasic
    {
        return $this->jobJoin;
    }

    /**
     * @param JobSearchBasic $jobMainJoin
     * @return TransactionSearch
     */
    public function setJobMainJoin(JobSearchBasic $jobMainJoin): TransactionSearch
    {
        $this->jobMainJoin = $jobMainJoin;
        return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobMainJoin(): JobSearchBasic
    {
        return $this->jobMainJoin;
    }

    /**
     * @param CampaignSearchBasic $leadSourceJoin
     * @return TransactionSearch
     */
    public function setLeadSourceJoin(CampaignSearchBasic $leadSourceJoin): TransactionSearch
    {
        $this->leadSourceJoin = $leadSourceJoin;
        return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getLeadSourceJoin(): CampaignSearchBasic
    {
        return $this->leadSourceJoin;
    }

    /**
     * @param BillingAccountSearchBasic $lineBillingAccountJoin
     * @return TransactionSearch
     */
    public function setLineBillingAccountJoin(BillingAccountSearchBasic $lineBillingAccountJoin): TransactionSearch
    {
        $this->lineBillingAccountJoin = $lineBillingAccountJoin;
        return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getLineBillingAccountJoin(): BillingAccountSearchBasic
    {
        return $this->lineBillingAccountJoin;
    }

    /**
     * @param FileSearchBasic $lineFileJoin
     * @return TransactionSearch
     */
    public function setLineFileJoin(FileSearchBasic $lineFileJoin): TransactionSearch
    {
        $this->lineFileJoin = $lineFileJoin;
        return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getLineFileJoin(): FileSearchBasic
    {
        return $this->lineFileJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return TransactionSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin): TransactionSearch
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin(): LocationSearchBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param ManufacturingOperationTaskSearchBasic $manufacturingOperationTaskJoin
     * @return TransactionSearch
     */
    public function setManufacturingOperationTaskJoin(ManufacturingOperationTaskSearchBasic $manufacturingOperationTaskJoin): TransactionSearch
    {
        $this->manufacturingOperationTaskJoin = $manufacturingOperationTaskJoin;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getManufacturingOperationTaskJoin(): ManufacturingOperationTaskSearchBasic
    {
        return $this->manufacturingOperationTaskJoin;
    }

    /**
     * @param MessageSearchBasic $messagesJoin
     * @return TransactionSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): TransactionSearch
    {
        $this->messagesJoin = $messagesJoin;
        return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getMessagesJoin(): MessageSearchBasic
    {
        return $this->messagesJoin;
    }

    /**
     * @param EntitySearchBasic $nextApproverJoin
     * @return TransactionSearch
     */
    public function setNextApproverJoin(EntitySearchBasic $nextApproverJoin): TransactionSearch
    {
        $this->nextApproverJoin = $nextApproverJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getNextApproverJoin(): EntitySearchBasic
    {
        return $this->nextApproverJoin;
    }

    /**
     * @param OpportunitySearchBasic $opportunityJoin
     * @return TransactionSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): TransactionSearch
    {
        $this->opportunityJoin = $opportunityJoin;
        return $this;
    }

    /**
     * @return OpportunitySearchBasic
     */
    public function getOpportunityJoin(): OpportunitySearchBasic
    {
        return $this->opportunityJoin;
    }

    /**
     * @param VendorSearchBasic $outsourcingVendorJoin
     * @return TransactionSearch
     */
    public function setOutsourcingVendorJoin(VendorSearchBasic $outsourcingVendorJoin): TransactionSearch
    {
        $this->outsourcingVendorJoin = $outsourcingVendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getOutsourcingVendorJoin(): VendorSearchBasic
    {
        return $this->outsourcingVendorJoin;
    }

    /**
     * @param TransactionSearchBasic $paidTransactionJoin
     * @return TransactionSearch
     */
    public function setPaidTransactionJoin(TransactionSearchBasic $paidTransactionJoin): TransactionSearch
    {
        $this->paidTransactionJoin = $paidTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getPaidTransactionJoin(): TransactionSearchBasic
    {
        return $this->paidTransactionJoin;
    }

    /**
     * @param PartnerSearchBasic $partnerJoin
     * @return TransactionSearch
     */
    public function setPartnerJoin(PartnerSearchBasic $partnerJoin): TransactionSearch
    {
        $this->partnerJoin = $partnerJoin;
        return $this;
    }

    /**
     * @return PartnerSearchBasic
     */
    public function getPartnerJoin(): PartnerSearchBasic
    {
        return $this->partnerJoin;
    }

    /**
     * @param TransactionSearchBasic $payingTransactionJoin
     * @return TransactionSearch
     */
    public function setPayingTransactionJoin(TransactionSearchBasic $payingTransactionJoin): TransactionSearch
    {
        $this->payingTransactionJoin = $payingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getPayingTransactionJoin(): TransactionSearchBasic
    {
        return $this->payingTransactionJoin;
    }

    /**
     * @param PaymentInstrumentSearchBasic $paymentInstrumentJoin
     * @return TransactionSearch
     */
    public function setPaymentInstrumentJoin(PaymentInstrumentSearchBasic $paymentInstrumentJoin): TransactionSearch
    {
        $this->paymentInstrumentJoin = $paymentInstrumentJoin;
        return $this;
    }

    /**
     * @return PaymentInstrumentSearchBasic
     */
    public function getPaymentInstrumentJoin(): PaymentInstrumentSearchBasic
    {
        return $this->paymentInstrumentJoin;
    }

    /**
     * @param PaymentOptionSearchBasic $paymentOptionJoin
     * @return TransactionSearch
     */
    public function setPaymentOptionJoin(PaymentOptionSearchBasic $paymentOptionJoin): TransactionSearch
    {
        $this->paymentOptionJoin = $paymentOptionJoin;
        return $this;
    }

    /**
     * @return PaymentOptionSearchBasic
     */
    public function getPaymentOptionJoin(): PaymentOptionSearchBasic
    {
        return $this->paymentOptionJoin;
    }

    /**
     * @param PayrollItemSearchBasic $payrollItemJoin
     * @return TransactionSearch
     */
    public function setPayrollItemJoin(PayrollItemSearchBasic $payrollItemJoin): TransactionSearch
    {
        $this->payrollItemJoin = $payrollItemJoin;
        return $this;
    }

    /**
     * @return PayrollItemSearchBasic
     */
    public function getPayrollItemJoin(): PayrollItemSearchBasic
    {
        return $this->payrollItemJoin;
    }

    /**
     * @param ProjectTaskSearchBasic $projectTaskJoin
     * @return TransactionSearch
     */
    public function setProjectTaskJoin(ProjectTaskSearchBasic $projectTaskJoin): TransactionSearch
    {
        $this->projectTaskJoin = $projectTaskJoin;
        return $this;
    }

    /**
     * @return ProjectTaskSearchBasic
     */
    public function getProjectTaskJoin(): ProjectTaskSearchBasic
    {
        return $this->projectTaskJoin;
    }

    /**
     * @param TransactionSearchBasic $purchaseOrderJoin
     * @return TransactionSearch
     */
    public function setPurchaseOrderJoin(TransactionSearchBasic $purchaseOrderJoin): TransactionSearch
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
     * @param EmployeeSearchBasic $requestorJoin
     * @return TransactionSearch
     */
    public function setRequestorJoin(EmployeeSearchBasic $requestorJoin): TransactionSearch
    {
        $this->requestorJoin = $requestorJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getRequestorJoin(): EmployeeSearchBasic
    {
        return $this->requestorJoin;
    }

    /**
     * @param TransactionSearchBasic $revCommittingTransactionJoin
     * @return TransactionSearch
     */
    public function setRevCommittingTransactionJoin(TransactionSearchBasic $revCommittingTransactionJoin): TransactionSearch
    {
        $this->revCommittingTransactionJoin = $revCommittingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getRevCommittingTransactionJoin(): TransactionSearchBasic
    {
        return $this->revCommittingTransactionJoin;
    }

    /**
     * @param ItemRevisionSearchBasic $revisionJoin
     * @return TransactionSearch
     */
    public function setRevisionJoin(ItemRevisionSearchBasic $revisionJoin): TransactionSearch
    {
        $this->revisionJoin = $revisionJoin;
        return $this;
    }

    /**
     * @return ItemRevisionSearchBasic
     */
    public function getRevisionJoin(): ItemRevisionSearchBasic
    {
        return $this->revisionJoin;
    }

    /**
     * @param RevRecScheduleSearchBasic $revRecScheduleJoin
     * @return TransactionSearch
     */
    public function setRevRecScheduleJoin(RevRecScheduleSearchBasic $revRecScheduleJoin): TransactionSearch
    {
        $this->revRecScheduleJoin = $revRecScheduleJoin;
        return $this;
    }

    /**
     * @return RevRecScheduleSearchBasic
     */
    public function getRevRecScheduleJoin(): RevRecScheduleSearchBasic
    {
        return $this->revRecScheduleJoin;
    }

    /**
     * @param TransactionSearchBasic $rgPostingTransactionJoin
     * @return TransactionSearch
     */
    public function setRgPostingTransactionJoin(TransactionSearchBasic $rgPostingTransactionJoin): TransactionSearch
    {
        $this->rgPostingTransactionJoin = $rgPostingTransactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getRgPostingTransactionJoin(): TransactionSearchBasic
    {
        return $this->rgPostingTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $salesOrderJoin
     * @return TransactionSearch
     */
    public function setSalesOrderJoin(TransactionSearchBasic $salesOrderJoin): TransactionSearch
    {
        $this->salesOrderJoin = $salesOrderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getSalesOrderJoin(): TransactionSearchBasic
    {
        return $this->salesOrderJoin;
    }

    /**
     * @param EmployeeSearchBasic $salesRepJoin
     * @return TransactionSearch
     */
    public function setSalesRepJoin(EmployeeSearchBasic $salesRepJoin): TransactionSearch
    {
        $this->salesRepJoin = $salesRepJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getSalesRepJoin(): EmployeeSearchBasic
    {
        return $this->salesRepJoin;
    }

    /**
     * @param AddressSearchBasic $shippingAddressJoin
     * @return TransactionSearch
     */
    public function setShippingAddressJoin(AddressSearchBasic $shippingAddressJoin): TransactionSearch
    {
        $this->shippingAddressJoin = $shippingAddressJoin;
        return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getShippingAddressJoin(): AddressSearchBasic
    {
        return $this->shippingAddressJoin;
    }

    /**
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return TransactionSearch
     */
    public function setSubsidiaryJoin(SubsidiarySearchBasic $subsidiaryJoin): TransactionSearch
    {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin(): SubsidiarySearchBasic
    {
        return $this->subsidiaryJoin;
    }

    /**
     * @param TaskSearchBasic $taskJoin
     * @return TransactionSearch
     */
    public function setTaskJoin(TaskSearchBasic $taskJoin): TransactionSearch
    {
        $this->taskJoin = $taskJoin;
        return $this;
    }

    /**
     * @return TaskSearchBasic
     */
    public function getTaskJoin(): TaskSearchBasic
    {
        return $this->taskJoin;
    }

    /**
     * @param SalesTaxItemSearchBasic $taxCodeJoin
     * @return TransactionSearch
     */
    public function setTaxCodeJoin(SalesTaxItemSearchBasic $taxCodeJoin): TransactionSearch
    {
        $this->taxCodeJoin = $taxCodeJoin;
        return $this;
    }

    /**
     * @return SalesTaxItemSearchBasic
     */
    public function getTaxCodeJoin(): SalesTaxItemSearchBasic
    {
        return $this->taxCodeJoin;
    }

    /**
     * @param TaxDetailSearchBasic $taxDetailJoin
     * @return TransactionSearch
     */
    public function setTaxDetailJoin(TaxDetailSearchBasic $taxDetailJoin): TransactionSearch
    {
        $this->taxDetailJoin = $taxDetailJoin;
        return $this;
    }

    /**
     * @return TaxDetailSearchBasic
     */
    public function getTaxDetailJoin(): TaxDetailSearchBasic
    {
        return $this->taxDetailJoin;
    }

    /**
     * @param SalesTaxItemSearchBasic $taxItemJoin
     * @return TransactionSearch
     */
    public function setTaxItemJoin(SalesTaxItemSearchBasic $taxItemJoin): TransactionSearch
    {
        $this->taxItemJoin = $taxItemJoin;
        return $this;
    }

    /**
     * @return SalesTaxItemSearchBasic
     */
    public function getTaxItemJoin(): SalesTaxItemSearchBasic
    {
        return $this->taxItemJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return TransactionSearch
     */
    public function setTimeJoin(TimeBillSearchBasic $timeJoin): TransactionSearch
    {
        $this->timeJoin = $timeJoin;
        return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin(): TimeBillSearchBasic
    {
        return $this->timeJoin;
    }

    /**
     * @param LocationSearchBasic $toLocationJoin
     * @return TransactionSearch
     */
    public function setToLocationJoin(LocationSearchBasic $toLocationJoin): TransactionSearch
    {
        $this->toLocationJoin = $toLocationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getToLocationJoin(): LocationSearchBasic
    {
        return $this->toLocationJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return TransactionSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): TransactionSearch
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
     * @return TransactionSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): TransactionSearch
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
     * @return TransactionSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): TransactionSearch
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
     * @param VendorSearchBasic $vendorLineJoin
     * @return TransactionSearch
     */
    public function setVendorLineJoin(VendorSearchBasic $vendorLineJoin): TransactionSearch
    {
        $this->vendorLineJoin = $vendorLineJoin;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorLineJoin(): VendorSearchBasic
    {
        return $this->vendorLineJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return TransactionSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): TransactionSearch
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
