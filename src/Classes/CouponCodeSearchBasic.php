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

class CouponCodeSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $code;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateSent;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $id;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $promotion;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $recipient;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $useCount;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $used;

    static $paramtypesmap = array(
        "code" => "SearchStringField",
        "dateSent" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "id" => "SearchLongField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "promotion" => "SearchMultiSelectField",
        "recipient" => "SearchMultiSelectField",
        "useCount" => "SearchLongField",
        "used" => "SearchBooleanField",
    );

    /**
     * @param SearchStringField $code
     * @return CouponCodeSearchBasic
     */
    public function setCode(SearchStringField $code): CouponCodeSearchBasic
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCode(): SearchStringField
    {
        return $this->code;
    }

    /**
     * @param SearchDateField $dateSent
     * @return CouponCodeSearchBasic
     */
    public function setDateSent(SearchDateField $dateSent): CouponCodeSearchBasic
    {
        $this->dateSent = $dateSent;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateSent(): SearchDateField
    {
        return $this->dateSent;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return CouponCodeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): CouponCodeSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return CouponCodeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): CouponCodeSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchLongField $id
     * @return CouponCodeSearchBasic
     */
    public function setId(SearchLongField $id): CouponCodeSearchBasic
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId(): SearchLongField
    {
        return $this->id;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return CouponCodeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CouponCodeSearchBasic
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
     * @return CouponCodeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CouponCodeSearchBasic
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
     * @param SearchMultiSelectField $promotion
     * @return CouponCodeSearchBasic
     */
    public function setPromotion(SearchMultiSelectField $promotion): CouponCodeSearchBasic
    {
        $this->promotion = $promotion;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPromotion(): SearchMultiSelectField
    {
        return $this->promotion;
    }

    /**
     * @param SearchMultiSelectField $recipient
     * @return CouponCodeSearchBasic
     */
    public function setRecipient(SearchMultiSelectField $recipient): CouponCodeSearchBasic
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRecipient(): SearchMultiSelectField
    {
        return $this->recipient;
    }

    /**
     * @param SearchLongField $useCount
     * @return CouponCodeSearchBasic
     */
    public function setUseCount(SearchLongField $useCount): CouponCodeSearchBasic
    {
        $this->useCount = $useCount;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getUseCount(): SearchLongField
    {
        return $this->useCount;
    }

    /**
     * @param SearchBooleanField $used
     * @return CouponCodeSearchBasic
     */
    public function setUsed(SearchBooleanField $used): CouponCodeSearchBasic
    {
        $this->used = $used;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsed(): SearchBooleanField
    {
        return $this->used;
    }

}
