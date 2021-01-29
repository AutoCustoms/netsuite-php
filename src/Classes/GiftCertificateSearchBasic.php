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

class GiftCertificateSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amountAvailableBilled;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $amountRemaining;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $expirationDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $giftCertCode;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $incomeAccount;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isActive;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $liabilityAccount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $message;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $originalAmount;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $purchaseDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $sender;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "amountAvailableBilled" => "SearchDoubleField",
        "amountRemaining" => "SearchDoubleField",
        "createdDate" => "SearchDateField",
        "email" => "SearchStringField",
        "expirationDate" => "SearchDateField",
        "giftCertCode" => "SearchStringField",
        "incomeAccount" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isActive" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "liabilityAccount" => "SearchMultiSelectField",
        "message" => "SearchStringField",
        "name" => "SearchStringField",
        "originalAmount" => "SearchDoubleField",
        "purchaseDate" => "SearchDateField",
        "sender" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchDoubleField $amountAvailableBilled
     * @return GiftCertificateSearchBasic
     */
    public function setAmountAvailableBilled(SearchDoubleField $amountAvailableBilled): GiftCertificateSearchBasic
    {
        $this->amountAvailableBilled = $amountAvailableBilled;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountAvailableBilled(): SearchDoubleField
    {
        return $this->amountAvailableBilled;
    }

    /**
     * @param SearchDoubleField $amountRemaining
     * @return GiftCertificateSearchBasic
     */
    public function setAmountRemaining(SearchDoubleField $amountRemaining): GiftCertificateSearchBasic
    {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAmountRemaining(): SearchDoubleField
    {
        return $this->amountRemaining;
    }

    /**
     * @param SearchDateField $createdDate
     * @return GiftCertificateSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): GiftCertificateSearchBasic
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate(): SearchDateField
    {
        return $this->createdDate;
    }

    /**
     * @param SearchStringField $email
     * @return GiftCertificateSearchBasic
     */
    public function setEmail(SearchStringField $email): GiftCertificateSearchBasic
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail(): SearchStringField
    {
        return $this->email;
    }

    /**
     * @param SearchDateField $expirationDate
     * @return GiftCertificateSearchBasic
     */
    public function setExpirationDate(SearchDateField $expirationDate): GiftCertificateSearchBasic
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getExpirationDate(): SearchDateField
    {
        return $this->expirationDate;
    }

    /**
     * @param SearchStringField $giftCertCode
     * @return GiftCertificateSearchBasic
     */
    public function setGiftCertCode(SearchStringField $giftCertCode): GiftCertificateSearchBasic
    {
        $this->giftCertCode = $giftCertCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getGiftCertCode(): SearchStringField
    {
        return $this->giftCertCode;
    }

    /**
     * @param SearchMultiSelectField $incomeAccount
     * @return GiftCertificateSearchBasic
     */
    public function setIncomeAccount(SearchMultiSelectField $incomeAccount): GiftCertificateSearchBasic
    {
        $this->incomeAccount = $incomeAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getIncomeAccount(): SearchMultiSelectField
    {
        return $this->incomeAccount;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return GiftCertificateSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): GiftCertificateSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return GiftCertificateSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): GiftCertificateSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isActive
     * @return GiftCertificateSearchBasic
     */
    public function setIsActive(SearchBooleanField $isActive): GiftCertificateSearchBasic
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsActive(): SearchBooleanField
    {
        return $this->isActive;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return GiftCertificateSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): GiftCertificateSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchMultiSelectField $liabilityAccount
     * @return GiftCertificateSearchBasic
     */
    public function setLiabilityAccount(SearchMultiSelectField $liabilityAccount): GiftCertificateSearchBasic
    {
        $this->liabilityAccount = $liabilityAccount;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLiabilityAccount(): SearchMultiSelectField
    {
        return $this->liabilityAccount;
    }

    /**
     * @param SearchStringField $message
     * @return GiftCertificateSearchBasic
     */
    public function setMessage(SearchStringField $message): GiftCertificateSearchBasic
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMessage(): SearchStringField
    {
        return $this->message;
    }

    /**
     * @param SearchStringField $name
     * @return GiftCertificateSearchBasic
     */
    public function setName(SearchStringField $name): GiftCertificateSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchDoubleField $originalAmount
     * @return GiftCertificateSearchBasic
     */
    public function setOriginalAmount(SearchDoubleField $originalAmount): GiftCertificateSearchBasic
    {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getOriginalAmount(): SearchDoubleField
    {
        return $this->originalAmount;
    }

    /**
     * @param SearchDateField $purchaseDate
     * @return GiftCertificateSearchBasic
     */
    public function setPurchaseDate(SearchDateField $purchaseDate): GiftCertificateSearchBasic
    {
        $this->purchaseDate = $purchaseDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getPurchaseDate(): SearchDateField
    {
        return $this->purchaseDate;
    }

    /**
     * @param SearchStringField $sender
     * @return GiftCertificateSearchBasic
     */
    public function setSender(SearchStringField $sender): GiftCertificateSearchBasic
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSender(): SearchStringField
    {
        return $this->sender;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return GiftCertificateSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): GiftCertificateSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
