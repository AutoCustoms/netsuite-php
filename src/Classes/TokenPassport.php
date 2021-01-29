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

class TokenPassport {
    /**
     * @var string
     */
    protected string $account;

    /**
     * @var string
     */
    protected string $consumerKey;

    /**
     * @var string
     */
    protected string $token;

    /**
     * @var string
     */
    protected string $nonce;

    /**
     * @var int
     */
    protected int $timestamp;

    /**
     * @var TokenPassportSignature
     */
    protected TokenPassportSignature $signature;

    static $paramtypesmap = array(
        "account" => "string",
        "consumerKey" => "string",
        "token" => "string",
        "nonce" => "string",
        "timestamp" => "integer",
        "signature" => "TokenPassportSignature",
    );

    /**
     * @param string $account
     * @return TokenPassport
     */
    public function setAccount(string $account): TokenPassport
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $consumerKey
     * @return TokenPassport
     */
    public function setConsumerKey(string $consumerKey): TokenPassport
    {
        $this->consumerKey = $consumerKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsumerKey(): string
    {
        return $this->consumerKey;
    }

    /**
     * @param string $token
     * @return TokenPassport
     */
    public function setToken(string $token): TokenPassport
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $nonce
     * @return TokenPassport
     */
    public function setNonce(string $nonce): TokenPassport
    {
        $this->nonce = $nonce;
        return $this;
    }

    /**
     * @return string
     */
    public function getNonce(): string
    {
        return $this->nonce;
    }

    /**
     * @param int $timestamp
     * @return TokenPassport
     */
    public function setTimestamp(int $timestamp): TokenPassport
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @param TokenPassportSignature $signature
     * @return TokenPassport
     */
    public function setSignature(TokenPassportSignature $signature): TokenPassport
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return TokenPassportSignature
     */
    public function getSignature(): TokenPassportSignature
    {
        return $this->signature;
    }

}
