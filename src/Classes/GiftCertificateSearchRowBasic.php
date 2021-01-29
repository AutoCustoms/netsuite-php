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

class GiftCertificateSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amountRemaining;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $amtAvailBilled;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $expirationDate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $gcActive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $giftCertCode;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $incomeAcct;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $liabilityAcct;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $originalAmount;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $purchaseDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $sender;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "amountRemaining" => "SearchColumnDoubleField[]",
        "amtAvailBilled" => "SearchColumnDoubleField[]",
        "createdDate" => "SearchColumnDateField[]",
        "email" => "SearchColumnStringField[]",
        "expirationDate" => "SearchColumnDateField[]",
        "gcActive" => "SearchColumnBooleanField[]",
        "giftCertCode" => "SearchColumnStringField[]",
        "incomeAcct" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "liabilityAcct" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "originalAmount" => "SearchColumnDoubleField[]",
        "purchaseDate" => "SearchColumnDateField[]",
        "sender" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDoubleField[] $amountRemaining
     * @return GiftCertificateSearchRowBasic
     */
    public function setAmountRemaining(SearchColumnDoubleField $amountRemaining): GiftCertificateSearchRowBasic
    {
        $this->amountRemaining[] = $amountRemaining;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmountRemaining(): array
    {
        return $this->amountRemaining;
    }

    /**
     * @param SearchColumnDoubleField[] $amtAvailBilled
     * @return GiftCertificateSearchRowBasic
     */
    public function setAmtAvailBilled(SearchColumnDoubleField $amtAvailBilled): GiftCertificateSearchRowBasic
    {
        $this->amtAvailBilled[] = $amtAvailBilled;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAmtAvailBilled(): array
    {
        return $this->amtAvailBilled;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return GiftCertificateSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): GiftCertificateSearchRowBasic
    {
        $this->createdDate[] = $createdDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate(): array
    {
        return $this->createdDate;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return GiftCertificateSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): GiftCertificateSearchRowBasic
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail(): array
    {
        return $this->email;
    }

    /**
     * @param SearchColumnDateField[] $expirationDate
     * @return GiftCertificateSearchRowBasic
     */
    public function setExpirationDate(SearchColumnDateField $expirationDate): GiftCertificateSearchRowBasic
    {
        $this->expirationDate[] = $expirationDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpirationDate(): array
    {
        return $this->expirationDate;
    }

    /**
     * @param SearchColumnBooleanField[] $gcActive
     * @return GiftCertificateSearchRowBasic
     */
    public function setGcActive(SearchColumnBooleanField $gcActive): GiftCertificateSearchRowBasic
    {
        $this->gcActive[] = $gcActive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGcActive(): array
    {
        return $this->gcActive;
    }

    /**
     * @param SearchColumnStringField[] $giftCertCode
     * @return GiftCertificateSearchRowBasic
     */
    public function setGiftCertCode(SearchColumnStringField $giftCertCode): GiftCertificateSearchRowBasic
    {
        $this->giftCertCode[] = $giftCertCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getGiftCertCode(): array
    {
        return $this->giftCertCode;
    }

    /**
     * @param SearchColumnStringField[] $incomeAcct
     * @return GiftCertificateSearchRowBasic
     */
    public function setIncomeAcct(SearchColumnStringField $incomeAcct): GiftCertificateSearchRowBasic
    {
        $this->incomeAcct[] = $incomeAcct;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIncomeAcct(): array
    {
        return $this->incomeAcct;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return GiftCertificateSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): GiftCertificateSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return GiftCertificateSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): GiftCertificateSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnStringField[] $liabilityAcct
     * @return GiftCertificateSearchRowBasic
     */
    public function setLiabilityAcct(SearchColumnStringField $liabilityAcct): GiftCertificateSearchRowBasic
    {
        $this->liabilityAcct[] = $liabilityAcct;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLiabilityAcct(): array
    {
        return $this->liabilityAcct;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return GiftCertificateSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): GiftCertificateSearchRowBasic
    {
        $this->message[] = $message;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMessage(): array
    {
        return $this->message;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return GiftCertificateSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): GiftCertificateSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnDoubleField[] $originalAmount
     * @return GiftCertificateSearchRowBasic
     */
    public function setOriginalAmount(SearchColumnDoubleField $originalAmount): GiftCertificateSearchRowBasic
    {
        $this->originalAmount[] = $originalAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getOriginalAmount(): array
    {
        return $this->originalAmount;
    }

    /**
     * @param SearchColumnDateField[] $purchaseDate
     * @return GiftCertificateSearchRowBasic
     */
    public function setPurchaseDate(SearchColumnDateField $purchaseDate): GiftCertificateSearchRowBasic
    {
        $this->purchaseDate[] = $purchaseDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPurchaseDate(): array
    {
        return $this->purchaseDate;
    }

    /**
     * @param SearchColumnStringField[] $sender
     * @return GiftCertificateSearchRowBasic
     */
    public function setSender(SearchColumnStringField $sender): GiftCertificateSearchRowBasic
    {
        $this->sender[] = $sender;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSender(): array
    {
        return $this->sender;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return GiftCertificateSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): GiftCertificateSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
