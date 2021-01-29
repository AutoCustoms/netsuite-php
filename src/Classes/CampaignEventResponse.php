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

class CampaignEventResponse {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var string
     */
    protected string $dateSent;

    /**
     * @var float
     */
    protected float $sent;

    /**
     * @var float
     */
    protected float $opened;

    /**
     * @var float
     */
    protected float $openedRatio;

    /**
     * @var float
     */
    protected float $clickedThru;

    /**
     * @var float
     */
    protected float $clickedThruRatio;

    /**
     * @var int
     */
    protected int $responded;

    /**
     * @var float
     */
    protected float $respondedRatio;

    /**
     * @var int
     */
    protected int $unsubscribed;

    /**
     * @var float
     */
    protected float $unsubscribedRatio;

    /**
     * @var int
     */
    protected int $bounced;

    /**
     * @var float
     */
    protected float $bouncedRatio;

    static $paramtypesmap = array(
        "name" => "string",
        "type" => "string",
        "dateSent" => "dateTime",
        "sent" => "float",
        "opened" => "float",
        "openedRatio" => "float",
        "clickedThru" => "float",
        "clickedThruRatio" => "float",
        "responded" => "integer",
        "respondedRatio" => "float",
        "unsubscribed" => "integer",
        "unsubscribedRatio" => "float",
        "bounced" => "integer",
        "bouncedRatio" => "float",
    );

    /**
     * @param string $name
     * @return CampaignEventResponse
     */
    public function setName(string $name): CampaignEventResponse
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
     * @param string $type
     * @return CampaignEventResponse
     */
    public function setType(string $type): CampaignEventResponse
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $dateSent
     * @return CampaignEventResponse
     */
    public function setDateSent(string $dateSent): CampaignEventResponse
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
     * @param float $sent
     * @return CampaignEventResponse
     */
    public function setSent(float $sent): CampaignEventResponse
    {
        $this->sent = $sent;
        return $this;
    }

    /**
     * @return float
     */
    public function getSent(): float
    {
        return $this->sent;
    }

    /**
     * @param float $opened
     * @return CampaignEventResponse
     */
    public function setOpened(float $opened): CampaignEventResponse
    {
        $this->opened = $opened;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpened(): float
    {
        return $this->opened;
    }

    /**
     * @param float $openedRatio
     * @return CampaignEventResponse
     */
    public function setOpenedRatio(float $openedRatio): CampaignEventResponse
    {
        $this->openedRatio = $openedRatio;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpenedRatio(): float
    {
        return $this->openedRatio;
    }

    /**
     * @param float $clickedThru
     * @return CampaignEventResponse
     */
    public function setClickedThru(float $clickedThru): CampaignEventResponse
    {
        $this->clickedThru = $clickedThru;
        return $this;
    }

    /**
     * @return float
     */
    public function getClickedThru(): float
    {
        return $this->clickedThru;
    }

    /**
     * @param float $clickedThruRatio
     * @return CampaignEventResponse
     */
    public function setClickedThruRatio(float $clickedThruRatio): CampaignEventResponse
    {
        $this->clickedThruRatio = $clickedThruRatio;
        return $this;
    }

    /**
     * @return float
     */
    public function getClickedThruRatio(): float
    {
        return $this->clickedThruRatio;
    }

    /**
     * @param int $responded
     * @return CampaignEventResponse
     */
    public function setResponded(int $responded): CampaignEventResponse
    {
        $this->responded = $responded;
        return $this;
    }

    /**
     * @return int
     */
    public function getResponded(): int
    {
        return $this->responded;
    }

    /**
     * @param float $respondedRatio
     * @return CampaignEventResponse
     */
    public function setRespondedRatio(float $respondedRatio): CampaignEventResponse
    {
        $this->respondedRatio = $respondedRatio;
        return $this;
    }

    /**
     * @return float
     */
    public function getRespondedRatio(): float
    {
        return $this->respondedRatio;
    }

    /**
     * @param int $unsubscribed
     * @return CampaignEventResponse
     */
    public function setUnsubscribed(int $unsubscribed): CampaignEventResponse
    {
        $this->unsubscribed = $unsubscribed;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnsubscribed(): int
    {
        return $this->unsubscribed;
    }

    /**
     * @param float $unsubscribedRatio
     * @return CampaignEventResponse
     */
    public function setUnsubscribedRatio(float $unsubscribedRatio): CampaignEventResponse
    {
        $this->unsubscribedRatio = $unsubscribedRatio;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnsubscribedRatio(): float
    {
        return $this->unsubscribedRatio;
    }

    /**
     * @param int $bounced
     * @return CampaignEventResponse
     */
    public function setBounced(int $bounced): CampaignEventResponse
    {
        $this->bounced = $bounced;
        return $this;
    }

    /**
     * @return int
     */
    public function getBounced(): int
    {
        return $this->bounced;
    }

    /**
     * @param float $bouncedRatio
     * @return CampaignEventResponse
     */
    public function setBouncedRatio(float $bouncedRatio): CampaignEventResponse
    {
        $this->bouncedRatio = $bouncedRatio;
        return $this;
    }

    /**
     * @return float
     */
    public function getBouncedRatio(): float
    {
        return $this->bouncedRatio;
    }

}
