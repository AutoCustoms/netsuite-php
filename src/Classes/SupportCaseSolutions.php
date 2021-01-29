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

class SupportCaseSolutions {
    /**
     * @var RecordRef
     */
    protected RecordRef $solution;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var string
     */
    protected string $dateApplied;

    static $paramtypesmap = array(
        "solution" => "RecordRef",
        "message" => "string",
        "dateApplied" => "dateTime",
    );

    /**
     * @param RecordRef $solution
     * @return SupportCaseSolutions
     */
    public function setSolution(RecordRef $solution): SupportCaseSolutions
    {
        $this->solution = $solution;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSolution(): RecordRef
    {
        return $this->solution;
    }

    /**
     * @param string $message
     * @return SupportCaseSolutions
     */
    public function setMessage(string $message): SupportCaseSolutions
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
     * @param string $dateApplied
     * @return SupportCaseSolutions
     */
    public function setDateApplied(string $dateApplied): SupportCaseSolutions
    {
        $this->dateApplied = $dateApplied;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateApplied(): string
    {
        return $this->dateApplied;
    }

}
