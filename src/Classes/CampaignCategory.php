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

class CampaignCategory extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var RecordRef
     */
    protected RecordRef $leadSource;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $isexternal;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "parent" => "RecordRef",
        "leadSource" => "RecordRef",
        "description" => "string",
        "isexternal" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return CampaignCategory
     */
    public function setName(string $name): CampaignCategory
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
     * @param RecordRef $parent
     * @return CampaignCategory
     */
    public function setParent(RecordRef $parent): CampaignCategory
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param RecordRef $leadSource
     * @return CampaignCategory
     */
    public function setLeadSource(RecordRef $leadSource): CampaignCategory
    {
        $this->leadSource = $leadSource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLeadSource(): RecordRef
    {
        return $this->leadSource;
    }

    /**
     * @param string $description
     * @return CampaignCategory
     */
    public function setDescription(string $description): CampaignCategory
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
     * @param bool $isexternal
     * @return CampaignCategory
     */
    public function setIsexternal(bool $isexternal): CampaignCategory
    {
        $this->isexternal = $isexternal;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsexternal(): bool
    {
        return $this->isexternal;
    }

    /**
     * @param bool $isInactive
     * @return CampaignCategory
     */
    public function setIsInactive(bool $isInactive): CampaignCategory
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
     * @param string $internalId
     * @return CampaignCategory
     */
    public function setInternalId(string $internalId): CampaignCategory
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
     * @return CampaignCategory
     */
    public function setExternalId(string $externalId): CampaignCategory
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
