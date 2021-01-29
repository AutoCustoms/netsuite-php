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

class MessageSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $author;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $authorEmail;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $bcc;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $cc;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $hasAttachment;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $internalOnly;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isEmailed;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isIncoming;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $message;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $messageDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $messageType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $recipient;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $recipientEmail;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $subject;

    static $paramtypesmap = array(
        "author" => "SearchColumnSelectField[]",
        "authorEmail" => "SearchColumnStringField[]",
        "bcc" => "SearchColumnStringField[]",
        "cc" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "hasAttachment" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "internalOnly" => "SearchColumnBooleanField[]",
        "isEmailed" => "SearchColumnBooleanField[]",
        "isIncoming" => "SearchColumnBooleanField[]",
        "message" => "SearchColumnStringField[]",
        "messageDate" => "SearchColumnDateField[]",
        "messageType" => "SearchColumnEnumSelectField[]",
        "recipient" => "SearchColumnSelectField[]",
        "recipientEmail" => "SearchColumnStringField[]",
        "subject" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnSelectField[] $author
     * @return MessageSearchRowBasic
     */
    public function setAuthor(SearchColumnSelectField $author): MessageSearchRowBasic
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAuthor(): array
    {
        return $this->author;
    }

    /**
     * @param SearchColumnStringField[] $authorEmail
     * @return MessageSearchRowBasic
     */
    public function setAuthorEmail(SearchColumnStringField $authorEmail): MessageSearchRowBasic
    {
        $this->authorEmail[] = $authorEmail;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAuthorEmail(): array
    {
        return $this->authorEmail;
    }

    /**
     * @param SearchColumnStringField[] $bcc
     * @return MessageSearchRowBasic
     */
    public function setBcc(SearchColumnStringField $bcc): MessageSearchRowBasic
    {
        $this->bcc[] = $bcc;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBcc(): array
    {
        return $this->bcc;
    }

    /**
     * @param SearchColumnStringField[] $cc
     * @return MessageSearchRowBasic
     */
    public function setCc(SearchColumnStringField $cc): MessageSearchRowBasic
    {
        $this->cc[] = $cc;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCc(): array
    {
        return $this->cc;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return MessageSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): MessageSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnBooleanField[] $hasAttachment
     * @return MessageSearchRowBasic
     */
    public function setHasAttachment(SearchColumnBooleanField $hasAttachment): MessageSearchRowBasic
    {
        $this->hasAttachment[] = $hasAttachment;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getHasAttachment(): array
    {
        return $this->hasAttachment;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return MessageSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): MessageSearchRowBasic
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
     * @param SearchColumnBooleanField[] $internalOnly
     * @return MessageSearchRowBasic
     */
    public function setInternalOnly(SearchColumnBooleanField $internalOnly): MessageSearchRowBasic
    {
        $this->internalOnly[] = $internalOnly;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInternalOnly(): array
    {
        return $this->internalOnly;
    }

    /**
     * @param SearchColumnBooleanField[] $isEmailed
     * @return MessageSearchRowBasic
     */
    public function setIsEmailed(SearchColumnBooleanField $isEmailed): MessageSearchRowBasic
    {
        $this->isEmailed[] = $isEmailed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsEmailed(): array
    {
        return $this->isEmailed;
    }

    /**
     * @param SearchColumnBooleanField[] $isIncoming
     * @return MessageSearchRowBasic
     */
    public function setIsIncoming(SearchColumnBooleanField $isIncoming): MessageSearchRowBasic
    {
        $this->isIncoming[] = $isIncoming;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsIncoming(): array
    {
        return $this->isIncoming;
    }

    /**
     * @param SearchColumnStringField[] $message
     * @return MessageSearchRowBasic
     */
    public function setMessage(SearchColumnStringField $message): MessageSearchRowBasic
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
     * @param SearchColumnDateField[] $messageDate
     * @return MessageSearchRowBasic
     */
    public function setMessageDate(SearchColumnDateField $messageDate): MessageSearchRowBasic
    {
        $this->messageDate[] = $messageDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getMessageDate(): array
    {
        return $this->messageDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $messageType
     * @return MessageSearchRowBasic
     */
    public function setMessageType(SearchColumnEnumSelectField $messageType): MessageSearchRowBasic
    {
        $this->messageType[] = $messageType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getMessageType(): array
    {
        return $this->messageType;
    }

    /**
     * @param SearchColumnSelectField[] $recipient
     * @return MessageSearchRowBasic
     */
    public function setRecipient(SearchColumnSelectField $recipient): MessageSearchRowBasic
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRecipient(): array
    {
        return $this->recipient;
    }

    /**
     * @param SearchColumnStringField[] $recipientEmail
     * @return MessageSearchRowBasic
     */
    public function setRecipientEmail(SearchColumnStringField $recipientEmail): MessageSearchRowBasic
    {
        $this->recipientEmail[] = $recipientEmail;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecipientEmail(): array
    {
        return $this->recipientEmail;
    }

    /**
     * @param SearchColumnStringField[] $subject
     * @return MessageSearchRowBasic
     */
    public function setSubject(SearchColumnStringField $subject): MessageSearchRowBasic
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSubject(): array
    {
        return $this->subject;
    }

}
