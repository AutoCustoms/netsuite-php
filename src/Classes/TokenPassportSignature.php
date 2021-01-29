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

class TokenPassportSignature {
    /**
     * @var string
     */
    protected string $_;

    /**
     * @var string
     */
    protected string $algorithm;

    static $paramtypesmap = array(
        "_" => "string",
        "algorithm" => "string",
    );

    /**
     * @param string $_
     * @return TokenPassportSignature
     */
    public function set_(string $_): TokenPassportSignature
    {
        $this->_ = $_;
        return $this;
    }

    /**
     * @return string
     */
    public function get_(): string
    {
        return $this->_;
    }

    /**
     * @param string $algorithm
     * @return TokenPassportSignature
     */
    public function setAlgorithm(string $algorithm): TokenPassportSignature
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }

}
