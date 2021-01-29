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

class MessageSearchRow extends SearchRow {
    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $basic;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $attachmentsJoin;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $authorJoin;

    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $campaignJoin;

    /**
     * @var SupportCaseSearchRowBasic
     */
    protected SupportCaseSearchRowBasic $caseJoin;

    /**
     * @var ContactSearchRowBasic
     */
    protected ContactSearchRowBasic $contactJoin;

    /**
     * @var CustomerSearchRowBasic
     */
    protected CustomerSearchRowBasic $customerJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $employeeJoin;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $entityJoin;

    /**
     * @var OpportunitySearchRowBasic
     */
    protected OpportunitySearchRowBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchRowBasic
     */
    protected OriginatingLeadSearchRowBasic $originatingLeadJoin;

    /**
     * @var PartnerSearchRowBasic
     */
    protected PartnerSearchRowBasic $partnerJoin;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $recipientJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $vendorJoin;

    static $paramtypesmap = array(
        "basic" => "MessageSearchRowBasic",
        "attachmentsJoin" => "FileSearchRowBasic",
        "authorJoin" => "EntitySearchRowBasic",
        "campaignJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "entityJoin" => "EntitySearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "recipientJoin" => "EntitySearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
    );

    /**
     * @param MessageSearchRowBasic $basic
     * @return MessageSearchRow
     */
    public function setBasic(MessageSearchRowBasic $basic): MessageSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return MessageSearchRowBasic
     */
    public function getBasic(): MessageSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param FileSearchRowBasic $attachmentsJoin
     * @return MessageSearchRow
     */
    public function setAttachmentsJoin(FileSearchRowBasic $attachmentsJoin): MessageSearchRow
    {
        $this->attachmentsJoin = $attachmentsJoin;
        return $this;
    }

    /**
     * @return FileSearchRowBasic
     */
    public function getAttachmentsJoin(): FileSearchRowBasic
    {
        return $this->attachmentsJoin;
    }

    /**
     * @param EntitySearchRowBasic $authorJoin
     * @return MessageSearchRow
     */
    public function setAuthorJoin(EntitySearchRowBasic $authorJoin): MessageSearchRow
    {
        $this->authorJoin = $authorJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getAuthorJoin(): EntitySearchRowBasic
    {
        return $this->authorJoin;
    }

    /**
     * @param CampaignSearchRowBasic $campaignJoin
     * @return MessageSearchRow
     */
    public function setCampaignJoin(CampaignSearchRowBasic $campaignJoin): MessageSearchRow
    {
        $this->campaignJoin = $campaignJoin;
        return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getCampaignJoin(): CampaignSearchRowBasic
    {
        return $this->campaignJoin;
    }

    /**
     * @param SupportCaseSearchRowBasic $caseJoin
     * @return MessageSearchRow
     */
    public function setCaseJoin(SupportCaseSearchRowBasic $caseJoin): MessageSearchRow
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
     * @param ContactSearchRowBasic $contactJoin
     * @return MessageSearchRow
     */
    public function setContactJoin(ContactSearchRowBasic $contactJoin): MessageSearchRow
    {
        $this->contactJoin = $contactJoin;
        return $this;
    }

    /**
     * @return ContactSearchRowBasic
     */
    public function getContactJoin(): ContactSearchRowBasic
    {
        return $this->contactJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return MessageSearchRow
     */
    public function setCustomerJoin(CustomerSearchRowBasic $customerJoin): MessageSearchRow
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
     * @param EmployeeSearchRowBasic $employeeJoin
     * @return MessageSearchRow
     */
    public function setEmployeeJoin(EmployeeSearchRowBasic $employeeJoin): MessageSearchRow
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
     * @param EntitySearchRowBasic $entityJoin
     * @return MessageSearchRow
     */
    public function setEntityJoin(EntitySearchRowBasic $entityJoin): MessageSearchRow
    {
        $this->entityJoin = $entityJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getEntityJoin(): EntitySearchRowBasic
    {
        return $this->entityJoin;
    }

    /**
     * @param OpportunitySearchRowBasic $opportunityJoin
     * @return MessageSearchRow
     */
    public function setOpportunityJoin(OpportunitySearchRowBasic $opportunityJoin): MessageSearchRow
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
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return MessageSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin): MessageSearchRow
    {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * @return OriginatingLeadSearchRowBasic
     */
    public function getOriginatingLeadJoin(): OriginatingLeadSearchRowBasic
    {
        return $this->originatingLeadJoin;
    }

    /**
     * @param PartnerSearchRowBasic $partnerJoin
     * @return MessageSearchRow
     */
    public function setPartnerJoin(PartnerSearchRowBasic $partnerJoin): MessageSearchRow
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
     * @param EntitySearchRowBasic $recipientJoin
     * @return MessageSearchRow
     */
    public function setRecipientJoin(EntitySearchRowBasic $recipientJoin): MessageSearchRow
    {
        $this->recipientJoin = $recipientJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getRecipientJoin(): EntitySearchRowBasic
    {
        return $this->recipientJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return MessageSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): MessageSearchRow
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
     * @return MessageSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): MessageSearchRow
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
     * @param VendorSearchRowBasic $vendorJoin
     * @return MessageSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): MessageSearchRow
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

}
