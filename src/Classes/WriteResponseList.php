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

class WriteResponseList {
    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var WriteResponse[]
     */
    protected array $writeResponse;

    static $paramtypesmap = array(
        "status" => "Status",
        "writeResponse" => "WriteResponse[]",
    );

    /**
     * @param Status $status
     * @return WriteResponseList
     */
    public function setStatus(Status $status): WriteResponseList
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param WriteResponse[] $writeResponse
     * @return WriteResponseList
     */
    public function setWriteResponse(WriteResponse $writeResponse): WriteResponseList
    {
        $this->writeResponse[] = $writeResponse;
        return $this;
    }

    /**
     * @return WriteResponse[]
     */
    public function getWriteResponse(): array
    {
        return $this->writeResponse;
    }

}
