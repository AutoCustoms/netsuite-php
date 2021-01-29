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

class CouponCode extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $promotion;

    /**
     * @var string
     */
    protected string $code;

    /**
     * @var RecordRef
     */
    protected RecordRef $recipient;

    /**
     * @var string
     */
    protected string $dateSent;

    /**
     * @var bool
     */
    protected bool $used;

    /**
     * @var int
     */
    protected int $useCount;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "promotion" => "RecordRef",
        "code" => "string",
        "recipient" => "RecordRef",
        "dateSent" => "dateTime",
        "used" => "boolean",
        "useCount" => "integer",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $promotion
     * @return CouponCode
     */
    public function setPromotion(RecordRef $promotion): CouponCode
    {
        $this->promotion = $promotion;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPromotion(): RecordRef
    {
        return $this->promotion;
    }

    /**
     * @param string $code
     * @return CouponCode
     */
    public function setCode(string $code): CouponCode
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param RecordRef $recipient
     * @return CouponCode
     */
    public function setRecipient(RecordRef $recipient): CouponCode
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecipient(): RecordRef
    {
        return $this->recipient;
    }

    /**
     * @param string $dateSent
     * @return CouponCode
     */
    public function setDateSent(string $dateSent): CouponCode
    {
        $this->dateSent = $dateSent;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateSent(): string
    {
        return $this->dateSent;
    }

    /**
     * @param bool $used
     * @return CouponCode
     */
    public function setUsed(bool $used): CouponCode
    {
        $this->used = $used;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUsed(): bool
    {
        return $this->used;
    }

    /**
     * @param int $useCount
     * @return CouponCode
     */
    public function setUseCount(int $useCount): CouponCode
    {
        $this->useCount = $useCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getUseCount(): int
    {
        return $this->useCount;
    }

    /**
     * @param string $internalId
     * @return CouponCode
     */
    public function setInternalId(string $internalId): CouponCode
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return CouponCode
     */
    public function setExternalId(string $externalId): CouponCode
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
