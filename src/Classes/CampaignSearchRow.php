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

class CampaignSearchRow extends SearchRow {
    /**
     * @var CampaignSearchRowBasic
     */
    protected CampaignSearchRowBasic $basic;

    /**
     * @var EntitySearchRowBasic
     */
    protected EntitySearchRowBasic $campaignRecipientJoin;

    /**
     * @var FileSearchRowBasic
     */
    protected FileSearchRowBasic $fileJoin;

    /**
     * @var MessageSearchRowBasic
     */
    protected MessageSearchRowBasic $messagesJoin;

    /**
     * @var OriginatingLeadSearchRowBasic
     */
    protected OriginatingLeadSearchRowBasic $originatingLeadJoin;

    /**
     * @var PromotionCodeSearchRowBasic
     */
    protected PromotionCodeSearchRowBasic $promotionCodeJoin;

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
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "CampaignSearchRowBasic",
        "campaignRecipientJoin" => "EntitySearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "promotionCodeJoin" => "PromotionCodeSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param CampaignSearchRowBasic $basic
     * @return CampaignSearchRow
     */
    public function setBasic(CampaignSearchRowBasic $basic): CampaignSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CampaignSearchRowBasic
     */
    public function getBasic(): CampaignSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param EntitySearchRowBasic $campaignRecipientJoin
     * @return CampaignSearchRow
     */
    public function setCampaignRecipientJoin(EntitySearchRowBasic $campaignRecipientJoin): CampaignSearchRow
    {
        $this->campaignRecipientJoin = $campaignRecipientJoin;
        return $this;
    }

    /**
     * @return EntitySearchRowBasic
     */
    public function getCampaignRecipientJoin(): EntitySearchRowBasic
    {
        return $this->campaignRecipientJoin;
    }

    /**
     * @param FileSearchRowBasic $fileJoin
     * @return CampaignSearchRow
     */
    public function setFileJoin(FileSearchRowBasic $fileJoin): CampaignSearchRow
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
     * @param MessageSearchRowBasic $messagesJoin
     * @return CampaignSearchRow
     */
    public function setMessagesJoin(MessageSearchRowBasic $messagesJoin): CampaignSearchRow
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
     * @param OriginatingLeadSearchRowBasic $originatingLeadJoin
     * @return CampaignSearchRow
     */
    public function setOriginatingLeadJoin(OriginatingLeadSearchRowBasic $originatingLeadJoin): CampaignSearchRow
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
     * @param PromotionCodeSearchRowBasic $promotionCodeJoin
     * @return CampaignSearchRow
     */
    public function setPromotionCodeJoin(PromotionCodeSearchRowBasic $promotionCodeJoin): CampaignSearchRow
    {
        $this->promotionCodeJoin = $promotionCodeJoin;
        return $this;
    }

    /**
     * @return PromotionCodeSearchRowBasic
     */
    public function getPromotionCodeJoin(): PromotionCodeSearchRowBasic
    {
        return $this->promotionCodeJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return CampaignSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): CampaignSearchRow
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
     * @return CampaignSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): CampaignSearchRow
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
     * @return CampaignSearchRow
     */
    public function setUserNotesJoin(NoteSearchRowBasic $userNotesJoin): CampaignSearchRow
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
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return CampaignSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): CampaignSearchRow
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
