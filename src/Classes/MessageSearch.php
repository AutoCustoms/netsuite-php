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

class MessageSearch extends SearchRecord {
    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $basic;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $attachmentsJoin;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $authorJoin;

    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $campaignJoin;

    /**
     * @var SupportCaseSearchBasic
     */
    protected SupportCaseSearchBasic $caseJoin;

    /**
     * @var ContactSearchBasic
     */
    protected ContactSearchBasic $contactJoin;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $employeeJoin;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $entityJoin;

    /**
     * @var OpportunitySearchBasic
     */
    protected OpportunitySearchBasic $opportunityJoin;

    /**
     * @var OriginatingLeadSearchBasic
     */
    protected OriginatingLeadSearchBasic $originatingLeadJoin;

    /**
     * @var PartnerSearchBasic
     */
    protected PartnerSearchBasic $partnerJoin;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $recipientJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $vendorJoin;

    static $paramtypesmap = array(
        "basic" => "MessageSearchBasic",
        "attachmentsJoin" => "FileSearchBasic",
        "authorJoin" => "EntitySearchBasic",
        "campaignJoin" => "CampaignSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "entityJoin" => "EntitySearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "recipientJoin" => "EntitySearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
    );

    /**
     * @param MessageSearchBasic $basic
     * @return MessageSearch
     */
    public function setBasic(MessageSearchBasic $basic): MessageSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return MessageSearchBasic
     */
    public function getBasic(): MessageSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param FileSearchBasic $attachmentsJoin
     * @return MessageSearch
     */
    public function setAttachmentsJoin(FileSearchBasic $attachmentsJoin): MessageSearch
    {
        $this->attachmentsJoin = $attachmentsJoin;
        return $this;
    }

    /**
     * @return FileSearchBasic
     */
    public function getAttachmentsJoin(): FileSearchBasic
    {
        return $this->attachmentsJoin;
    }

    /**
     * @param EntitySearchBasic $authorJoin
     * @return MessageSearch
     */
    public function setAuthorJoin(EntitySearchBasic $authorJoin): MessageSearch
    {
        $this->authorJoin = $authorJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getAuthorJoin(): EntitySearchBasic
    {
        return $this->authorJoin;
    }

    /**
     * @param CampaignSearchBasic $campaignJoin
     * @return MessageSearch
     */
    public function setCampaignJoin(CampaignSearchBasic $campaignJoin): MessageSearch
    {
        $this->campaignJoin = $campaignJoin;
        return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getCampaignJoin(): CampaignSearchBasic
    {
        return $this->campaignJoin;
    }

    /**
     * @param SupportCaseSearchBasic $caseJoin
     * @return MessageSearch
     */
    public function setCaseJoin(SupportCaseSearchBasic $caseJoin): MessageSearch
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
     * @param ContactSearchBasic $contactJoin
     * @return MessageSearch
     */
    public function setContactJoin(ContactSearchBasic $contactJoin): MessageSearch
    {
        $this->contactJoin = $contactJoin;
        return $this;
    }

    /**
     * @return ContactSearchBasic
     */
    public function getContactJoin(): ContactSearchBasic
    {
        return $this->contactJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return MessageSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): MessageSearch
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
     * @param EmployeeSearchBasic $employeeJoin
     * @return MessageSearch
     */
    public function setEmployeeJoin(EmployeeSearchBasic $employeeJoin): MessageSearch
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
     * @param EntitySearchBasic $entityJoin
     * @return MessageSearch
     */
    public function setEntityJoin(EntitySearchBasic $entityJoin): MessageSearch
    {
        $this->entityJoin = $entityJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getEntityJoin(): EntitySearchBasic
    {
        return $this->entityJoin;
    }

    /**
     * @param OpportunitySearchBasic $opportunityJoin
     * @return MessageSearch
     */
    public function setOpportunityJoin(OpportunitySearchBasic $opportunityJoin): MessageSearch
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
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return MessageSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin): MessageSearch
    {
        $this->originatingLeadJoin = $originatingLeadJoin;
        return $this;
    }

    /**
     * @return OriginatingLeadSearchBasic
     */
    public function getOriginatingLeadJoin(): OriginatingLeadSearchBasic
    {
        return $this->originatingLeadJoin;
    }

    /**
     * @param PartnerSearchBasic $partnerJoin
     * @return MessageSearch
     */
    public function setPartnerJoin(PartnerSearchBasic $partnerJoin): MessageSearch
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
     * @param EntitySearchBasic $recipientJoin
     * @return MessageSearch
     */
    public function setRecipientJoin(EntitySearchBasic $recipientJoin): MessageSearch
    {
        $this->recipientJoin = $recipientJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getRecipientJoin(): EntitySearchBasic
    {
        return $this->recipientJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return MessageSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): MessageSearch
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
     * @return MessageSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): MessageSearch
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
     * @param VendorSearchBasic $vendorJoin
     * @return MessageSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): MessageSearch
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

}
