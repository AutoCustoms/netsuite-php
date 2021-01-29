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

class GiftCertificate extends Record {
    /**
     * @var string
     */
    protected string $giftCertCode;

    /**
     * @var string
     */
    protected string $sender;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var float
     */
    protected float $originalAmount;

    /**
     * @var float
     */
    protected float $amountRemaining;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "giftCertCode" => "string",
        "sender" => "string",
        "name" => "string",
        "email" => "string",
        "message" => "string",
        "expirationDate" => "dateTime",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "originalAmount" => "float",
        "amountRemaining" => "float",
        "internalId" => "string",
    );

    /**
     * @param string $giftCertCode
     * @return GiftCertificate
     */
    public function setGiftCertCode(string $giftCertCode): GiftCertificate
    {
        $this->giftCertCode = $giftCertCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGiftCertCode(): string
    {
        return $this->giftCertCode;
    }

    /**
     * @param string $sender
     * @return GiftCertificate
     */
    public function setSender(string $sender): GiftCertificate
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @return string
     */
    public function getSender(): string
    {
        return $this->sender;
    }

    /**
     * @param string $name
     * @return GiftCertificate
     */
    public function setName(string $name): GiftCertificate
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $email
     * @return GiftCertificate
     */
    public function setEmail(string $email): GiftCertificate
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $message
     * @return GiftCertificate
     */
    public function setMessage(string $message): GiftCertificate
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $expirationDate
     * @return GiftCertificate
     */
    public function setExpirationDate(string $expirationDate): GiftCertificate
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param string $createdDate
     * @return GiftCertificate
     */
    public function setCreatedDate(string $createdDate): GiftCertificate
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return GiftCertificate
     */
    public function setLastModifiedDate(string $lastModifiedDate): GiftCertificate
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param float $originalAmount
     * @return GiftCertificate
     */
    public function setOriginalAmount(float $originalAmount): GiftCertificate
    {
        $this->originalAmount = $originalAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOriginalAmount(): float
    {
        return $this->originalAmount;
    }

    /**
     * @param float $amountRemaining
     * @return GiftCertificate
     */
    public function setAmountRemaining(float $amountRemaining): GiftCertificate
    {
        $this->amountRemaining = $amountRemaining;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmountRemaining(): float
    {
        return $this->amountRemaining;
    }

    /**
     * @param string $internalId
     * @return GiftCertificate
     */
    public function setInternalId(string $internalId): GiftCertificate
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

}
