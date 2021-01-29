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

class Message extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $author;

    /**
     * @var string
     */
    protected string $authorEmail;

    /**
     * @var RecordRef
     */
    protected RecordRef $recipient;

    /**
     * @var string
     */
    protected string $recipientEmail;

    /**
     * @var string
     */
    protected string $cc;

    /**
     * @var string
     */
    protected string $bcc;

    /**
     * @var string
     */
    protected string $messageDate;

    /**
     * @var string
     */
    protected string $recordName;

    /**
     * @var string
     */
    protected string $recordTypeName;

    /**
     * @var string
     */
    protected string $subject;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var bool
     */
    protected bool $emailed;

    /**
     * @var RecordRef
     */
    protected RecordRef $activity;

    /**
     * @var bool
     */
    protected bool $compressAttachments;

    /**
     * @var bool
     */
    protected bool $incoming;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $transaction;

    /**
     * @var MessageMediaItemList
     */
    protected MessageMediaItemList $mediaItemList;

    /**
     * @var string
     */
    protected string $dateTime;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "author" => "RecordRef",
        "authorEmail" => "string",
        "recipient" => "RecordRef",
        "recipientEmail" => "string",
        "cc" => "string",
        "bcc" => "string",
        "messageDate" => "dateTime",
        "recordName" => "string",
        "recordTypeName" => "string",
        "subject" => "string",
        "message" => "string",
        "emailed" => "boolean",
        "activity" => "RecordRef",
        "compressAttachments" => "boolean",
        "incoming" => "boolean",
        "lastModifiedDate" => "dateTime",
        "transaction" => "RecordRef",
        "mediaItemList" => "MessageMediaItemList",
        "dateTime" => "string",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $author
     * @return Message
     */
    public function setAuthor(RecordRef $author): Message
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAuthor(): RecordRef
    {
        return $this->author;
    }

    /**
     * @param string $authorEmail
     * @return Message
     */
    public function setAuthorEmail(string $authorEmail): Message
    {
        $this->authorEmail = $authorEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorEmail(): string
    {
        return $this->authorEmail;
    }

    /**
     * @param RecordRef $recipient
     * @return Message
     */
    public function setRecipient(RecordRef $recipient): Message
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
     * @param string $recipientEmail
     * @return Message
     */
    public function setRecipientEmail(string $recipientEmail): Message
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientEmail(): string
    {
        return $this->recipientEmail;
    }

    /**
     * @param string $cc
     * @return Message
     */
    public function setCc(string $cc): Message
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     * @return string
     */
    public function getCc(): string
    {
        return $this->cc;
    }

    /**
     * @param string $bcc
     * @return Message
     */
    public function setBcc(string $bcc): Message
    {
        $this->bcc = $bcc;
        return $this;
    }

    /**
     * @return string
     */
    public function getBcc(): string
    {
        return $this->bcc;
    }

    /**
     * @param string $messageDate
     * @return Message
     */
    public function setMessageDate(string $messageDate): Message
    {
        $this->messageDate = $messageDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessageDate(): string
    {
        return $this->messageDate;
    }

    /**
     * @param string $recordName
     * @return Message
     */
    public function setRecordName(string $recordName): Message
    {
        $this->recordName = $recordName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordName(): string
    {
        return $this->recordName;
    }

    /**
     * @param string $recordTypeName
     * @return Message
     */
    public function setRecordTypeName(string $recordTypeName): Message
    {
        $this->recordTypeName = $recordTypeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordTypeName(): string
    {
        return $this->recordTypeName;
    }

    /**
     * @param string $subject
     * @return Message
     */
    public function setSubject(string $subject): Message
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $message
     * @return Message
     */
    public function setMessage(string $message): Message
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
     * @param bool $emailed
     * @return Message
     */
    public function setEmailed(bool $emailed): Message
    {
        $this->emailed = $emailed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEmailed(): bool
    {
        return $this->emailed;
    }

    /**
     * @param RecordRef $activity
     * @return Message
     */
    public function setActivity(RecordRef $activity): Message
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getActivity(): RecordRef
    {
        return $this->activity;
    }

    /**
     * @param bool $compressAttachments
     * @return Message
     */
    public function setCompressAttachments(bool $compressAttachments): Message
    {
        $this->compressAttachments = $compressAttachments;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCompressAttachments(): bool
    {
        return $this->compressAttachments;
    }

    /**
     * @param bool $incoming
     * @return Message
     */
    public function setIncoming(bool $incoming): Message
    {
        $this->incoming = $incoming;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncoming(): bool
    {
        return $this->incoming;
    }

    /**
     * @param string $lastModifiedDate
     * @return Message
     */
    public function setLastModifiedDate(string $lastModifiedDate): Message
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
     * @param RecordRef $transaction
     * @return Message
     */
    public function setTransaction(RecordRef $transaction): Message
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction(): RecordRef
    {
        return $this->transaction;
    }

    /**
     * @param MessageMediaItemList $mediaItemList
     * @return Message
     */
    public function setMediaItemList(MessageMediaItemList $mediaItemList): Message
    {
        $this->mediaItemList = $mediaItemList;
        return $this;
    }

    /**
     * @return MessageMediaItemList
     */
    public function getMediaItemList(): MessageMediaItemList
    {
        return $this->mediaItemList;
    }

    /**
     * @param string $dateTime
     * @return Message
     */
    public function setDateTime(string $dateTime): Message
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateTime(): string
    {
        return $this->dateTime;
    }

    /**
     * @param string $internalId
     * @return Message
     */
    public function setInternalId(string $internalId): Message
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
     * @return Message
     */
    public function setExternalId(string $externalId): Message
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
