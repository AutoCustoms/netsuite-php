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

class CampaignEventResponseList {
    /**
     * @var CampaignEventResponse[]
     */
    protected array $eventResponse;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "eventResponse" => "CampaignEventResponse[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param CampaignEventResponse[] $eventResponse
     * @return CampaignEventResponseList
     */
    public function setEventResponse(CampaignEventResponse $eventResponse): CampaignEventResponseList
    {
        $this->eventResponse[] = $eventResponse;
        return $this;
    }

    /**
     * @return CampaignEventResponse[]
     */
    public function getEventResponse(): array
    {
        return $this->eventResponse;
    }

    /**
     * @param bool $replaceAll
     * @return CampaignEventResponseList
     */
    public function setReplaceAll(bool $replaceAll): CampaignEventResponseList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
