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

class CouponCodeSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $code;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateSent;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $id;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $promotion;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $recipient;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $useCount;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $used;

    static $paramtypesmap = array(
        "code" => "SearchColumnStringField[]",
        "dateSent" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "id" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "promotion" => "SearchColumnStringField[]",
        "recipient" => "SearchColumnStringField[]",
        "useCount" => "SearchColumnLongField[]",
        "used" => "SearchColumnBooleanField[]",
    );

    /**
     * @param SearchColumnStringField[] $code
     * @return CouponCodeSearchRowBasic
     */
    public function setCode(SearchColumnStringField $code): CouponCodeSearchRowBasic
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCode(): array
    {
        return $this->code;
    }

    /**
     * @param SearchColumnDateField[] $dateSent
     * @return CouponCodeSearchRowBasic
     */
    public function setDateSent(SearchColumnDateField $dateSent): CouponCodeSearchRowBasic
    {
        $this->dateSent[] = $dateSent;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateSent(): array
    {
        return $this->dateSent;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return CouponCodeSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): CouponCodeSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return CouponCodeSearchRowBasic
     */
    public function setId(SearchColumnLongField $id): CouponCodeSearchRowBasic
    {
        $this->id[] = $id;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return CouponCodeSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CouponCodeSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnStringField[] $promotion
     * @return CouponCodeSearchRowBasic
     */
    public function setPromotion(SearchColumnStringField $promotion): CouponCodeSearchRowBasic
    {
        $this->promotion[] = $promotion;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPromotion(): array
    {
        return $this->promotion;
    }

    /**
     * @param SearchColumnStringField[] $recipient
     * @return CouponCodeSearchRowBasic
     */
    public function setRecipient(SearchColumnStringField $recipient): CouponCodeSearchRowBasic
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecipient(): array
    {
        return $this->recipient;
    }

    /**
     * @param SearchColumnLongField[] $useCount
     * @return CouponCodeSearchRowBasic
     */
    public function setUseCount(SearchColumnLongField $useCount): CouponCodeSearchRowBasic
    {
        $this->useCount[] = $useCount;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getUseCount(): array
    {
        return $this->useCount;
    }

    /**
     * @param SearchColumnBooleanField[] $used
     * @return CouponCodeSearchRowBasic
     */
    public function setUsed(SearchColumnBooleanField $used): CouponCodeSearchRowBasic
    {
        $this->used[] = $used;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsed(): array
    {
        return $this->used;
    }

}
