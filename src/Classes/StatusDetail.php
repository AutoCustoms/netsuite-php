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

class StatusDetail {
    /**
     * @var StatusDetailCodeType
     */
    protected StatusDetailCodeType $code;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var bool
     */
    protected bool $afterSubmitFailed;

    /**
     * @var StatusDetailType
     */
    protected StatusDetailType $type;

    static $paramtypesmap = array(
        "code" => "StatusDetailCodeType",
        "message" => "string",
        "afterSubmitFailed" => "boolean",
        "type" => "StatusDetailType",
    );

    /**
     * @param StatusDetailCodeType $code
     * @return StatusDetail
     */
    public function setCode(StatusDetailCodeType $code): StatusDetail
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return StatusDetailCodeType
     */
    public function getCode(): StatusDetailCodeType
    {
        return $this->code;
    }

    /**
     * @param string $message
     * @return StatusDetail
     */
    public function setMessage(string $message): StatusDetail
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
     * @param bool $afterSubmitFailed
     * @return StatusDetail
     */
    public function setAfterSubmitFailed(bool $afterSubmitFailed): StatusDetail
    {
        $this->afterSubmitFailed = $afterSubmitFailed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAfterSubmitFailed(): bool
    {
        return $this->afterSubmitFailed;
    }

    /**
     * @param StatusDetailType $type
     * @return StatusDetail
     */
    public function setType(StatusDetailType $type): StatusDetail
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return StatusDetailType
     */
    public function getType(): StatusDetailType
    {
        return $this->type;
    }

}
