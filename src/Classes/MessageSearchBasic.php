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

class MessageSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $author;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $authorEmail;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $bcc;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $cc;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $hasAttachment;

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
    protected SearchBooleanField $internalOnly;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $message;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $messageDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $messageType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $recipient;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $recipientEmail;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $subject;

    static $paramtypesmap = array(
        "author" => "SearchMultiSelectField",
        "authorEmail" => "SearchStringField",
        "bcc" => "SearchStringField",
        "cc" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "hasAttachment" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "internalOnly" => "SearchBooleanField",
        "message" => "SearchStringField",
        "messageDate" => "SearchDateField",
        "messageType" => "SearchEnumMultiSelectField",
        "recipient" => "SearchMultiSelectField",
        "recipientEmail" => "SearchStringField",
        "subject" => "SearchStringField",
    );

    /**
     * @param SearchMultiSelectField $author
     * @return MessageSearchBasic
     */
    public function setAuthor(SearchMultiSelectField $author): MessageSearchBasic
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAuthor(): SearchMultiSelectField
    {
        return $this->author;
    }

    /**
     * @param SearchStringField $authorEmail
     * @return MessageSearchBasic
     */
    public function setAuthorEmail(SearchStringField $authorEmail): MessageSearchBasic
    {
        $this->authorEmail = $authorEmail;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAuthorEmail(): SearchStringField
    {
        return $this->authorEmail;
    }

    /**
     * @param SearchStringField $bcc
     * @return MessageSearchBasic
     */
    public function setBcc(SearchStringField $bcc): MessageSearchBasic
    {
        $this->bcc = $bcc;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBcc(): SearchStringField
    {
        return $this->bcc;
    }

    /**
     * @param SearchStringField $cc
     * @return MessageSearchBasic
     */
    public function setCc(SearchStringField $cc): MessageSearchBasic
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCc(): SearchStringField
    {
        return $this->cc;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return MessageSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): MessageSearchBasic
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
     * @return MessageSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): MessageSearchBasic
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
     * @param SearchBooleanField $hasAttachment
     * @return MessageSearchBasic
     */
    public function setHasAttachment(SearchBooleanField $hasAttachment): MessageSearchBasic
    {
        $this->hasAttachment = $hasAttachment;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getHasAttachment(): SearchBooleanField
    {
        return $this->hasAttachment;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return MessageSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): MessageSearchBasic
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
     * @return MessageSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): MessageSearchBasic
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
     * @param SearchBooleanField $internalOnly
     * @return MessageSearchBasic
     */
    public function setInternalOnly(SearchBooleanField $internalOnly): MessageSearchBasic
    {
        $this->internalOnly = $internalOnly;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInternalOnly(): SearchBooleanField
    {
        return $this->internalOnly;
    }

    /**
     * @param SearchStringField $message
     * @return MessageSearchBasic
     */
    public function setMessage(SearchStringField $message): MessageSearchBasic
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
     * @param SearchDateField $messageDate
     * @return MessageSearchBasic
     */
    public function setMessageDate(SearchDateField $messageDate): MessageSearchBasic
    {
        $this->messageDate = $messageDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getMessageDate(): SearchDateField
    {
        return $this->messageDate;
    }

    /**
     * @param SearchEnumMultiSelectField $messageType
     * @return MessageSearchBasic
     */
    public function setMessageType(SearchEnumMultiSelectField $messageType): MessageSearchBasic
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getMessageType(): SearchEnumMultiSelectField
    {
        return $this->messageType;
    }

    /**
     * @param SearchMultiSelectField $recipient
     * @return MessageSearchBasic
     */
    public function setRecipient(SearchMultiSelectField $recipient): MessageSearchBasic
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
     * @param SearchStringField $recipientEmail
     * @return MessageSearchBasic
     */
    public function setRecipientEmail(SearchStringField $recipientEmail): MessageSearchBasic
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRecipientEmail(): SearchStringField
    {
        return $this->recipientEmail;
    }

    /**
     * @param SearchStringField $subject
     * @return MessageSearchBasic
     */
    public function setSubject(SearchStringField $subject): MessageSearchBasic
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSubject(): SearchStringField
    {
        return $this->subject;
    }

}
