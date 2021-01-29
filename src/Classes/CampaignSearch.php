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

class CampaignSearch extends SearchRecord {
    /**
     * @var CampaignSearchBasic
     */
    protected CampaignSearchBasic $basic;

    /**
     * @var EntitySearchBasic
     */
    protected EntitySearchBasic $campaignRecipientJoin;

    /**
     * @var FileSearchBasic
     */
    protected FileSearchBasic $fileJoin;

    /**
     * @var MessageSearchBasic
     */
    protected MessageSearchBasic $messagesJoin;

    /**
     * @var OriginatingLeadSearchBasic
     */
    protected OriginatingLeadSearchBasic $originatingLeadJoin;

    /**
     * @var PromotionCodeSearchBasic
     */
    protected PromotionCodeSearchBasic $promotionCodeJoin;

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
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "CampaignSearchBasic",
        "campaignRecipientJoin" => "EntitySearchBasic",
        "fileJoin" => "FileSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "promotionCodeJoin" => "PromotionCodeSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param CampaignSearchBasic $basic
     * @return CampaignSearch
     */
    public function setBasic(CampaignSearchBasic $basic): CampaignSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CampaignSearchBasic
     */
    public function getBasic(): CampaignSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param EntitySearchBasic $campaignRecipientJoin
     * @return CampaignSearch
     */
    public function setCampaignRecipientJoin(EntitySearchBasic $campaignRecipientJoin): CampaignSearch
    {
        $this->campaignRecipientJoin = $campaignRecipientJoin;
        return $this;
    }

    /**
     * @return EntitySearchBasic
     */
    public function getCampaignRecipientJoin(): EntitySearchBasic
    {
        return $this->campaignRecipientJoin;
    }

    /**
     * @param FileSearchBasic $fileJoin
     * @return CampaignSearch
     */
    public function setFileJoin(FileSearchBasic $fileJoin): CampaignSearch
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
     * @param MessageSearchBasic $messagesJoin
     * @return CampaignSearch
     */
    public function setMessagesJoin(MessageSearchBasic $messagesJoin): CampaignSearch
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
     * @param OriginatingLeadSearchBasic $originatingLeadJoin
     * @return CampaignSearch
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchBasic $originatingLeadJoin): CampaignSearch
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
     * @param PromotionCodeSearchBasic $promotionCodeJoin
     * @return CampaignSearch
     */
    public function setPromotionCodeJoin(PromotionCodeSearchBasic $promotionCodeJoin): CampaignSearch
    {
        $this->promotionCodeJoin = $promotionCodeJoin;
        return $this;
    }

    /**
     * @return PromotionCodeSearchBasic
     */
    public function getPromotionCodeJoin(): PromotionCodeSearchBasic
    {
        return $this->promotionCodeJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return CampaignSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): CampaignSearch
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
     * @return CampaignSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): CampaignSearch
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
     * @return CampaignSearch
     */
    public function setUserNotesJoin(NoteSearchBasic $userNotesJoin): CampaignSearch
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
     * @param CustomSearchJoin[] $customSearchJoin
     * @return CampaignSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): CampaignSearch
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
