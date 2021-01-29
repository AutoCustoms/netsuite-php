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

class CampaignResponseResponses {
    /**
     * @var string
     */
    protected string $response;

    /**
     * @var string
     */
    protected string $responseDate;

    /**
     * @var string
     */
    protected string $author;

    /**
     * @var string
     */
    protected string $note;

    static $paramtypesmap = array(
        "response" => "string",
        "responseDate" => "string",
        "author" => "string",
        "note" => "string",
    );

    /**
     * @param string $response
     * @return CampaignResponseResponses
     */
    public function setResponse(string $response): CampaignResponseResponses
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * @param string $responseDate
     * @return CampaignResponseResponses
     */
    public function setResponseDate(string $responseDate): CampaignResponseResponses
    {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseDate(): string
    {
        return $this->responseDate;
    }

    /**
     * @param string $author
     * @return CampaignResponseResponses
     */
    public function setAuthor(string $author): CampaignResponseResponses
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $note
     * @return CampaignResponseResponses
     */
    public function setNote(string $note): CampaignResponseResponses
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

}
