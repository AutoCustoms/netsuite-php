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

class CampaignResponse extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $leadSource;

    /**
     * @var RecordRef
     */
    protected RecordRef $campaignEvent;

    /**
     * @var string
     */
    protected string $campaignResponseDate;

    /**
     * @var string
     */
    protected string $channel;

    /**
     * @var CampaignResponseResponse
     */
    protected CampaignResponseResponse $response;

    /**
     * @var string
     */
    protected string $note;

    /**
     * @var CampaignResponseResponsesList
     */
    protected CampaignResponseResponsesList $responsesList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "entity" => "RecordRef",
        "leadSource" => "RecordRef",
        "campaignEvent" => "RecordRef",
        "campaignResponseDate" => "dateTime",
        "channel" => "string",
        "response" => "CampaignResponseResponse",
        "note" => "string",
        "responsesList" => "CampaignResponseResponsesList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $entity
     * @return CampaignResponse
     */
    public function setEntity(RecordRef $entity): CampaignResponse
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
     * @param RecordRef $leadSource
     * @return CampaignResponse
     */
    public function setLeadSource(RecordRef $leadSource): CampaignResponse
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
     * @param RecordRef $campaignEvent
     * @return CampaignResponse
     */
    public function setCampaignEvent(RecordRef $campaignEvent): CampaignResponse
    {
        $this->campaignEvent = $campaignEvent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCampaignEvent(): RecordRef
    {
        return $this->campaignEvent;
    }

    /**
     * @param string $campaignResponseDate
     * @return CampaignResponse
     */
    public function setCampaignResponseDate(string $campaignResponseDate): CampaignResponse
    {
        $this->campaignResponseDate = $campaignResponseDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignResponseDate(): string
    {
        return $this->campaignResponseDate;
    }

    /**
     * @param string $channel
     * @return CampaignResponse
     */
    public function setChannel(string $channel): CampaignResponse
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }

    /**
     * @param CampaignResponseResponse $response
     * @return CampaignResponse
     */
    public function setResponse(CampaignResponseResponse $response): CampaignResponse
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return CampaignResponseResponse
     */
    public function getResponse(): CampaignResponseResponse
    {
        return $this->response;
    }

    /**
     * @param string $note
     * @return CampaignResponse
     */
    public function setNote(string $note): CampaignResponse
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
     * @param CampaignResponseResponsesList $responsesList
     * @return CampaignResponse
     */
    public function setResponsesList(CampaignResponseResponsesList $responsesList): CampaignResponse
    {
        $this->responsesList = $responsesList;
        return $this;
    }

    /**
     * @return CampaignResponseResponsesList
     */
    public function getResponsesList(): CampaignResponseResponsesList
    {
        return $this->responsesList;
    }

    /**
     * @param string $internalId
     * @return CampaignResponse
     */
    public function setInternalId(string $internalId): CampaignResponse
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
     * @return CampaignResponse
     */
    public function setExternalId(string $externalId): CampaignResponse
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
