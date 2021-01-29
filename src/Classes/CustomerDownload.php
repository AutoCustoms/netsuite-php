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

class CustomerDownload {
    /**
     * @var RecordRef
     */
    protected RecordRef $file;

    /**
     * @var string
     */
    protected string $licenseCode;

    /**
     * @var int
     */
    protected int $remainingDownloads;

    /**
     * @var string
     */
    protected string $expiration;

    static $paramtypesmap = array(
        "file" => "RecordRef",
        "licenseCode" => "string",
        "remainingDownloads" => "integer",
        "expiration" => "dateTime",
    );

    /**
     * @param RecordRef $file
     * @return CustomerDownload
     */
    public function setFile(RecordRef $file): CustomerDownload
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFile(): RecordRef
    {
        return $this->file;
    }

    /**
     * @param string $licenseCode
     * @return CustomerDownload
     */
    public function setLicenseCode(string $licenseCode): CustomerDownload
    {
        $this->licenseCode = $licenseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseCode(): string
    {
        return $this->licenseCode;
    }

    /**
     * @param int $remainingDownloads
     * @return CustomerDownload
     */
    public function setRemainingDownloads(int $remainingDownloads): CustomerDownload
    {
        $this->remainingDownloads = $remainingDownloads;
        return $this;
    }

    /**
     * @return int
     */
    public function getRemainingDownloads(): int
    {
        return $this->remainingDownloads;
    }

    /**
     * @param string $expiration
     * @return CustomerDownload
     */
    public function setExpiration(string $expiration): CustomerDownload
    {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiration(): string
    {
        return $this->expiration;
    }

}
