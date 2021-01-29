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

class Note extends Record {
    /**
     * @var string
     */
    protected string $title;

    /**
     * @var RecordRef
     */
    protected RecordRef $noteType;

    /**
     * @var NoteDirection
     */
    protected NoteDirection $direction;

    /**
     * @var string
     */
    protected string $noteDate;

    /**
     * @var string
     */
    protected string $note;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $activity;

    /**
     * @var RecordRef
     */
    protected RecordRef $author;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $folder;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $media;

    /**
     * @var RecordRef
     */
    protected RecordRef $record;

    /**
     * @var RecordRef
     */
    protected RecordRef $recordType;

    /**
     * @var RecordRef
     */
    protected RecordRef $topic;

    /**
     * @var RecordRef
     */
    protected RecordRef $transaction;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "title" => "string",
        "noteType" => "RecordRef",
        "direction" => "NoteDirection",
        "noteDate" => "dateTime",
        "note" => "string",
        "lastModifiedDate" => "dateTime",
        "activity" => "RecordRef",
        "author" => "RecordRef",
        "entity" => "RecordRef",
        "folder" => "RecordRef",
        "item" => "RecordRef",
        "media" => "RecordRef",
        "record" => "RecordRef",
        "recordType" => "RecordRef",
        "topic" => "RecordRef",
        "transaction" => "RecordRef",
        "customForm" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $title
     * @return Note
     */
    public function setTitle(string $title): Note
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param RecordRef $noteType
     * @return Note
     */
    public function setNoteType(RecordRef $noteType): Note
    {
        $this->noteType = $noteType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNoteType(): RecordRef
    {
        return $this->noteType;
    }

    /**
     * @param NoteDirection $direction
     * @return Note
     */
    public function setDirection(NoteDirection $direction): Note
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @return NoteDirection
     */
    public function getDirection(): NoteDirection
    {
        return $this->direction;
    }

    /**
     * @param string $noteDate
     * @return Note
     */
    public function setNoteDate(string $noteDate): Note
    {
        $this->noteDate = $noteDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getNoteDate(): string
    {
        return $this->noteDate;
    }

    /**
     * @param string $note
     * @return Note
     */
    public function setNote(string $note): Note
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $lastModifiedDate
     * @return Note
     */
    public function setLastModifiedDate(string $lastModifiedDate): Note
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
     * @param RecordRef $activity
     * @return Note
     */
    public function setActivity(RecordRef $activity): Note
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
     * @param RecordRef $author
     * @return Note
     */
    public function setAuthor(RecordRef $author): Note
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
     * @param RecordRef $entity
     * @return Note
     */
    public function setEntity(RecordRef $entity): Note
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param RecordRef $folder
     * @return Note
     */
    public function setFolder(RecordRef $folder): Note
    {
        $this->folder = $folder;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFolder(): RecordRef
    {
        return $this->folder;
    }

    /**
     * @param RecordRef $item
     * @return Note
     */
    public function setItem(RecordRef $item): Note
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $media
     * @return Note
     */
    public function setMedia(RecordRef $media): Note
    {
        $this->media = $media;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMedia(): RecordRef
    {
        return $this->media;
    }

    /**
     * @param RecordRef $record
     * @return Note
     */
    public function setRecord(RecordRef $record): Note
    {
        $this->record = $record;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecord(): RecordRef
    {
        return $this->record;
    }

    /**
     * @param RecordRef $recordType
     * @return Note
     */
    public function setRecordType(RecordRef $recordType): Note
    {
        $this->recordType = $recordType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecordType(): RecordRef
    {
        return $this->recordType;
    }

    /**
     * @param RecordRef $topic
     * @return Note
     */
    public function setTopic(RecordRef $topic): Note
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTopic(): RecordRef
    {
        return $this->topic;
    }

    /**
     * @param RecordRef $transaction
     * @return Note
     */
    public function setTransaction(RecordRef $transaction): Note
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
     * @param RecordRef $customForm
     * @return Note
     */
    public function setCustomForm(RecordRef $customForm): Note
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Note
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Note
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return Note
     */
    public function setInternalId(string $internalId): Note
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
     * @return Note
     */
    public function setExternalId(string $externalId): Note
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
