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

class Topic extends Record {
    /**
     * @var string
     */
    protected string $title;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentTopic;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $longDescription;

    /**
     * @var TopicSolutionList
     */
    protected TopicSolutionList $solutionList;

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
        "parentTopic" => "RecordRef",
        "description" => "string",
        "isInactive" => "boolean",
        "longDescription" => "string",
        "solutionList" => "TopicSolutionList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $title
     * @return Topic
     */
    public function setTitle(string $title): Topic
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
     * @param RecordRef $parentTopic
     * @return Topic
     */
    public function setParentTopic(RecordRef $parentTopic): Topic
    {
        $this->parentTopic = $parentTopic;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentTopic(): RecordRef
    {
        return $this->parentTopic;
    }

    /**
     * @param string $description
     * @return Topic
     */
    public function setDescription(string $description): Topic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param bool $isInactive
     * @return Topic
     */
    public function setIsInactive(bool $isInactive): Topic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $longDescription
     * @return Topic
     */
    public function setLongDescription(string $longDescription): Topic
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription(): string
    {
        return $this->longDescription;
    }

    /**
     * @param TopicSolutionList $solutionList
     * @return Topic
     */
    public function setSolutionList(TopicSolutionList $solutionList): Topic
    {
        $this->solutionList = $solutionList;
        return $this;
    }

    /**
     * @return TopicSolutionList
     */
    public function getSolutionList(): TopicSolutionList
    {
        return $this->solutionList;
    }

    /**
     * @param string $internalId
     * @return Topic
     */
    public function setInternalId(string $internalId): Topic
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
     * @return Topic
     */
    public function setExternalId(string $externalId): Topic
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
