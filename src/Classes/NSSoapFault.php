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

class NSSoapFault {
    /**
     * @var FaultCodeType
     */
    protected FaultCodeType $code;

    /**
     * @var string
     */
    protected string $message;

    static $paramtypesmap = array(
        "code" => "FaultCodeType",
        "message" => "string",
    );

    /**
     * @param FaultCodeType $code
     * @return NSSoapFault
     */
    public function setCode(FaultCodeType $code): NSSoapFault
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return FaultCodeType
     */
    public function getCode(): FaultCodeType
    {
        return $this->code;
    }

    /**
     * @param string $message
     * @return NSSoapFault
     */
    public function setMessage(string $message): NSSoapFault
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

}
