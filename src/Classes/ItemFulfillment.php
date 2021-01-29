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

class ItemFulfillment extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var RecordRef
     */
    protected RecordRef $requestedBy;

    /**
     * @var int
     */
    protected int $createdFromShipGroup;

    /**
     * @var RecordRef
     */
    protected RecordRef $partner;

    /**
     * @var Address
     */
    protected Address $shippingAddress;

    /**
     * @var string
     */
    protected string $pickedDate;

    /**
     * @var string
     */
    protected string $packedDate;

    /**
     * @var string
     */
    protected string $shippedDate;

    /**
     * @var bool
     */
    protected bool $shipIsResidential;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipAddressList;

    /**
     * @var ItemFulfillmentShipStatus
     */
    protected ItemFulfillmentShipStatus $shipStatus;

    /**
     * @var bool
     */
    protected bool $saturdayDeliveryUps;

    /**
     * @var bool
     */
    protected bool $sendShipNotifyEmailUps;

    /**
     * @var bool
     */
    protected bool $sendBackupEmailUps;

    /**
     * @var string
     */
    protected string $shipNotifyEmailAddressUps;

    protected $shipNotifyEmailAddress2Ups;
    /**
     * @var string
     */
    protected string $backupEmailAddressUps;

    /**
     * @var string
     */
    protected string $shipNotifyEmailMessageUps;

    /**
     * @var string
     */
    protected string $thirdPartyAcctUps;

    /**
     * @var string
     */
    protected string $thirdPartyZipcodeUps;

    /**
     * @var Country
     */
    protected Country $thirdPartyCountryUps;

    /**
     * @var ItemFulfillmentThirdPartyTypeUps
     */
    protected ItemFulfillmentThirdPartyTypeUps $thirdPartyTypeUps;

    /**
     * @var bool
     */
    protected bool $partiesToTransactionUps;

    /**
     * @var ItemFulfillmentExportTypeUps
     */
    protected ItemFulfillmentExportTypeUps $exportTypeUps;

    /**
     * @var ItemFulfillmentMethodOfTransportUps
     */
    protected ItemFulfillmentMethodOfTransportUps $methodOfTransportUps;

    /**
     * @var string
     */
    protected string $carrierIdUps;

    /**
     * @var string
     */
    protected string $entryNumberUps;

    /**
     * @var string
     */
    protected string $inbondCodeUps;

    /**
     * @var bool
     */
    protected bool $isRoutedExportTransactionUps;

    /**
     * @var string
     */
    protected string $licenseNumberUps;

    /**
     * @var string
     */
    protected string $licenseDateUps;

    /**
     * @var ItemFulfillmentLicenseExceptionUps
     */
    protected ItemFulfillmentLicenseExceptionUps $licenseExceptionUps;

    /**
     * @var string
     */
    protected string $eccNumberUps;

    /**
     * @var string
     */
    protected string $recipientTaxIdUps;

    /**
     * @var string
     */
    protected string $blanketStartDateUps;

    /**
     * @var string
     */
    protected string $blanketEndDateUps;

    /**
     * @var float
     */
    protected float $shipmentWeightUps;

    /**
     * @var bool
     */
    protected bool $saturdayDeliveryFedEx;

    /**
     * @var bool
     */
    protected bool $saturdayPickupFedex;

    /**
     * @var bool
     */
    protected bool $sendShipNotifyEmailFedEx;

    /**
     * @var bool
     */
    protected bool $sendBackupEmailFedEx;

    /**
     * @var bool
     */
    protected bool $signatureHomeDeliveryFedEx;

    /**
     * @var string
     */
    protected string $shipNotifyEmailAddressFedEx;

    /**
     * @var string
     */
    protected string $backupEmailAddressFedEx;

    /**
     * @var string
     */
    protected string $shipDateFedEx;

    /**
     * @var ItemFulfillmentHomeDeliveryTypeFedEx
     */
    protected ItemFulfillmentHomeDeliveryTypeFedEx $homeDeliveryTypeFedEx;

    /**
     * @var string
     */
    protected string $homeDeliveryDateFedEx;

    /**
     * @var string
     */
    protected string $bookingConfirmationNumFedEx;

    /**
     * @var string
     */
    protected string $intlExemptionNumFedEx;

    protected $b13aFilingOptionFedEx;
    protected $b13aStatementDataFedEx;
    /**
     * @var string
     */
    protected string $thirdPartyAcctFedEx;

    /**
     * @var Country
     */
    protected Country $thirdPartyCountryFedEx;

    /**
     * @var ItemFulfillmentThirdPartyTypeFedEx
     */
    protected ItemFulfillmentThirdPartyTypeFedEx $thirdPartyTypeFedEx;

    /**
     * @var float
     */
    protected float $shipmentWeightFedEx;

    /**
     * @var ItemFulfillmentTermsOfSaleFedEx
     */
    protected ItemFulfillmentTermsOfSaleFedEx $termsOfSaleFedEx;

    /**
     * @var float
     */
    protected float $termsFreightChargeFedEx;

    /**
     * @var float
     */
    protected float $termsInsuranceChargeFedEx;

    /**
     * @var bool
     */
    protected bool $insideDeliveryFedEx;

    /**
     * @var bool
     */
    protected bool $insidePickupFedEx;

    /**
     * @var ItemFulfillmentAncillaryEndorsementFedEx
     */
    protected ItemFulfillmentAncillaryEndorsementFedEx $ancillaryEndorsementFedEx;

    /**
     * @var bool
     */
    protected bool $holdAtLocationFedEx;

    /**
     * @var string
     */
    protected string $halPhoneFedEx;

    protected $halAddr1FedEx;
    protected $halAddr2FedEx;
    protected $halAddr3FedEx;
    /**
     * @var string
     */
    protected string $halCityFedEx;

    /**
     * @var string
     */
    protected string $halZipFedEx;

    /**
     * @var string
     */
    protected string $halStateFedEx;

    /**
     * @var string
     */
    protected string $halCountryFedEx;

    /**
     * @var ItemFulfillmentHazmatTypeFedEx
     */
    protected ItemFulfillmentHazmatTypeFedEx $hazmatTypeFedEx;

    /**
     * @var ItemFulfillmentAccessibilityTypeFedEx
     */
    protected ItemFulfillmentAccessibilityTypeFedEx $accessibilityTypeFedEx;

    /**
     * @var bool
     */
    protected bool $isCargoAircraftOnlyFedEx;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $shipMethod;

    /**
     * @var bool
     */
    protected bool $generateIntegratedShipperLabel;

    /**
     * @var float
     */
    protected float $shippingCost;

    /**
     * @var float
     */
    protected float $handlingCost;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $transferLocation;

    /**
     * @var ItemFulfillmentPackageList
     */
    protected ItemFulfillmentPackageList $packageList;

    /**
     * @var ItemFulfillmentPackageUpsList
     */
    protected ItemFulfillmentPackageUpsList $packageUpsList;

    /**
     * @var ItemFulfillmentPackageUspsList
     */
    protected ItemFulfillmentPackageUspsList $packageUspsList;

    /**
     * @var ItemFulfillmentPackageFedExList
     */
    protected ItemFulfillmentPackageFedExList $packageFedExList;

    /**
     * @var ItemFulfillmentItemList
     */
    protected ItemFulfillmentItemList $itemList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "entity" => "RecordRef",
        "createdFrom" => "RecordRef",
        "requestedBy" => "RecordRef",
        "createdFromShipGroup" => "integer",
        "partner" => "RecordRef",
        "shippingAddress" => "Address",
        "pickedDate" => "dateTime",
        "packedDate" => "dateTime",
        "shippedDate" => "dateTime",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "shipStatus" => "ItemFulfillmentShipStatus",
        "saturdayDeliveryUps" => "boolean",
        "sendShipNotifyEmailUps" => "boolean",
        "sendBackupEmailUps" => "boolean",
        "shipNotifyEmailAddressUps" => "string",
        "shipNotifyEmailAddress2Ups" => "string",
        "backupEmailAddressUps" => "string",
        "shipNotifyEmailMessageUps" => "string",
        "thirdPartyAcctUps" => "string",
        "thirdPartyZipcodeUps" => "string",
        "thirdPartyCountryUps" => "Country",
        "thirdPartyTypeUps" => "ItemFulfillmentThirdPartyTypeUps",
        "partiesToTransactionUps" => "boolean",
        "exportTypeUps" => "ItemFulfillmentExportTypeUps",
        "methodOfTransportUps" => "ItemFulfillmentMethodOfTransportUps",
        "carrierIdUps" => "string",
        "entryNumberUps" => "string",
        "inbondCodeUps" => "string",
        "isRoutedExportTransactionUps" => "boolean",
        "licenseNumberUps" => "string",
        "licenseDateUps" => "dateTime",
        "licenseExceptionUps" => "ItemFulfillmentLicenseExceptionUps",
        "eccNumberUps" => "string",
        "recipientTaxIdUps" => "string",
        "blanketStartDateUps" => "dateTime",
        "blanketEndDateUps" => "dateTime",
        "shipmentWeightUps" => "float",
        "saturdayDeliveryFedEx" => "boolean",
        "saturdayPickupFedex" => "boolean",
        "sendShipNotifyEmailFedEx" => "boolean",
        "sendBackupEmailFedEx" => "boolean",
        "signatureHomeDeliveryFedEx" => "boolean",
        "shipNotifyEmailAddressFedEx" => "string",
        "backupEmailAddressFedEx" => "string",
        "shipDateFedEx" => "dateTime",
        "homeDeliveryTypeFedEx" => "ItemFulfillmentHomeDeliveryTypeFedEx",
        "homeDeliveryDateFedEx" => "dateTime",
        "bookingConfirmationNumFedEx" => "string",
        "intlExemptionNumFedEx" => "string",
        "b13aFilingOptionFedEx" => "ItemFulfillmentB13AFilingOptionFedEx",
        "b13aStatementDataFedEx" => "string",
        "thirdPartyAcctFedEx" => "string",
        "thirdPartyCountryFedEx" => "Country",
        "thirdPartyTypeFedEx" => "ItemFulfillmentThirdPartyTypeFedEx",
        "shipmentWeightFedEx" => "float",
        "termsOfSaleFedEx" => "ItemFulfillmentTermsOfSaleFedEx",
        "termsFreightChargeFedEx" => "float",
        "termsInsuranceChargeFedEx" => "float",
        "insideDeliveryFedEx" => "boolean",
        "insidePickupFedEx" => "boolean",
        "ancillaryEndorsementFedEx" => "ItemFulfillmentAncillaryEndorsementFedEx",
        "holdAtLocationFedEx" => "boolean",
        "halPhoneFedEx" => "string",
        "halAddr1FedEx" => "string",
        "halAddr2FedEx" => "string",
        "halAddr3FedEx" => "string",
        "halCityFedEx" => "string",
        "halZipFedEx" => "string",
        "halStateFedEx" => "string",
        "halCountryFedEx" => "string",
        "hazmatTypeFedEx" => "ItemFulfillmentHazmatTypeFedEx",
        "accessibilityTypeFedEx" => "ItemFulfillmentAccessibilityTypeFedEx",
        "isCargoAircraftOnlyFedEx" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "shipMethod" => "RecordRef",
        "generateIntegratedShipperLabel" => "boolean",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "memo" => "string",
        "transferLocation" => "RecordRef",
        "packageList" => "ItemFulfillmentPackageList",
        "packageUpsList" => "ItemFulfillmentPackageUpsList",
        "packageUspsList" => "ItemFulfillmentPackageUspsList",
        "packageFedExList" => "ItemFulfillmentPackageFedExList",
        "itemList" => "ItemFulfillmentItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return ItemFulfillment
     */
    public function setCreatedDate(string $createdDate): ItemFulfillment
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return ItemFulfillment
     */
    public function setLastModifiedDate(string $lastModifiedDate): ItemFulfillment
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param RecordRef $customForm
     * @return ItemFulfillment
     */
    public function setCustomForm(RecordRef $customForm): ItemFulfillment
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return ItemFulfillment
     */
    public function setPostingPeriod(RecordRef $postingPeriod): ItemFulfillment
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param RecordRef $entity
     * @return ItemFulfillment
     */
    public function setEntity(RecordRef $entity): ItemFulfillment
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param RecordRef $createdFrom
     * @return ItemFulfillment
     */
    public function setCreatedFrom(RecordRef $createdFrom): ItemFulfillment
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom(): RecordRef
    {
        return $this->createdFrom;
    }

    /**
     * @param RecordRef $requestedBy
     * @return ItemFulfillment
     */
    public function setRequestedBy(RecordRef $requestedBy): ItemFulfillment
    {
        $this->requestedBy = $requestedBy;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRequestedBy(): RecordRef
    {
        return $this->requestedBy;
    }

    /**
     * @param int $createdFromShipGroup
     * @return ItemFulfillment
     */
    public function setCreatedFromShipGroup(int $createdFromShipGroup): ItemFulfillment
    {
        $this->createdFromShipGroup = $createdFromShipGroup;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedFromShipGroup(): int
    {
        return $this->createdFromShipGroup;
    }

    /**
     * @param RecordRef $partner
     * @return ItemFulfillment
     */
    public function setPartner(RecordRef $partner): ItemFulfillment
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPartner(): RecordRef
    {
        return $this->partner;
    }

    /**
     * @param Address $shippingAddress
     * @return ItemFulfillment
     */
    public function setShippingAddress(Address $shippingAddress): ItemFulfillment
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    /**
     * @param string $pickedDate
     * @return ItemFulfillment
     */
    public function setPickedDate(string $pickedDate): ItemFulfillment
    {
        $this->pickedDate = $pickedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickedDate(): string
    {
        return $this->pickedDate;
    }

    /**
     * @param string $packedDate
     * @return ItemFulfillment
     */
    public function setPackedDate(string $packedDate): ItemFulfillment
    {
        $this->packedDate = $packedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackedDate(): string
    {
        return $this->packedDate;
    }

    /**
     * @param string $shippedDate
     * @return ItemFulfillment
     */
    public function setShippedDate(string $shippedDate): ItemFulfillment
    {
        $this->shippedDate = $shippedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippedDate(): string
    {
        return $this->shippedDate;
    }

    /**
     * @param bool $shipIsResidential
     * @return ItemFulfillment
     */
    public function setShipIsResidential(bool $shipIsResidential): ItemFulfillment
    {
        $this->shipIsResidential = $shipIsResidential;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShipIsResidential(): bool
    {
        return $this->shipIsResidential;
    }

    /**
     * @param RecordRef $shipAddressList
     * @return ItemFulfillment
     */
    public function setShipAddressList(RecordRef $shipAddressList): ItemFulfillment
    {
        $this->shipAddressList = $shipAddressList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipAddressList(): RecordRef
    {
        return $this->shipAddressList;
    }

    /**
     * @param ItemFulfillmentShipStatus $shipStatus
     * @return ItemFulfillment
     */
    public function setShipStatus(ItemFulfillmentShipStatus $shipStatus): ItemFulfillment
    {
        $this->shipStatus = $shipStatus;
        return $this;
    }

    /**
     * @return ItemFulfillmentShipStatus
     */
    public function getShipStatus(): ItemFulfillmentShipStatus
    {
        return $this->shipStatus;
    }

    /**
     * @param bool $saturdayDeliveryUps
     * @return ItemFulfillment
     */
    public function setSaturdayDeliveryUps(bool $saturdayDeliveryUps): ItemFulfillment
    {
        $this->saturdayDeliveryUps = $saturdayDeliveryUps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSaturdayDeliveryUps(): bool
    {
        return $this->saturdayDeliveryUps;
    }

    /**
     * @param bool $sendShipNotifyEmailUps
     * @return ItemFulfillment
     */
    public function setSendShipNotifyEmailUps(bool $sendShipNotifyEmailUps): ItemFulfillment
    {
        $this->sendShipNotifyEmailUps = $sendShipNotifyEmailUps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendShipNotifyEmailUps(): bool
    {
        return $this->sendShipNotifyEmailUps;
    }

    /**
     * @param bool $sendBackupEmailUps
     * @return ItemFulfillment
     */
    public function setSendBackupEmailUps(bool $sendBackupEmailUps): ItemFulfillment
    {
        $this->sendBackupEmailUps = $sendBackupEmailUps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendBackupEmailUps(): bool
    {
        return $this->sendBackupEmailUps;
    }

    /**
     * @param string $shipNotifyEmailAddressUps
     * @return ItemFulfillment
     */
    public function setShipNotifyEmailAddressUps(string $shipNotifyEmailAddressUps): ItemFulfillment
    {
        $this->shipNotifyEmailAddressUps = $shipNotifyEmailAddressUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipNotifyEmailAddressUps(): string
    {
        return $this->shipNotifyEmailAddressUps;
    }

    /**
     * @param string $backupEmailAddressUps
     * @return ItemFulfillment
     */
    public function setBackupEmailAddressUps(string $backupEmailAddressUps): ItemFulfillment
    {
        $this->backupEmailAddressUps = $backupEmailAddressUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getBackupEmailAddressUps(): string
    {
        return $this->backupEmailAddressUps;
    }

    /**
     * @param string $shipNotifyEmailMessageUps
     * @return ItemFulfillment
     */
    public function setShipNotifyEmailMessageUps(string $shipNotifyEmailMessageUps): ItemFulfillment
    {
        $this->shipNotifyEmailMessageUps = $shipNotifyEmailMessageUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipNotifyEmailMessageUps(): string
    {
        return $this->shipNotifyEmailMessageUps;
    }

    /**
     * @param string $thirdPartyAcctUps
     * @return ItemFulfillment
     */
    public function setThirdPartyAcctUps(string $thirdPartyAcctUps): ItemFulfillment
    {
        $this->thirdPartyAcctUps = $thirdPartyAcctUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyAcctUps(): string
    {
        return $this->thirdPartyAcctUps;
    }

    /**
     * @param string $thirdPartyZipcodeUps
     * @return ItemFulfillment
     */
    public function setThirdPartyZipcodeUps(string $thirdPartyZipcodeUps): ItemFulfillment
    {
        $this->thirdPartyZipcodeUps = $thirdPartyZipcodeUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyZipcodeUps(): string
    {
        return $this->thirdPartyZipcodeUps;
    }

    /**
     * @param Country $thirdPartyCountryUps
     * @return ItemFulfillment
     */
    public function setThirdPartyCountryUps(Country $thirdPartyCountryUps): ItemFulfillment
    {
        $this->thirdPartyCountryUps = $thirdPartyCountryUps;
        return $this;
    }

    /**
     * @return Country
     */
    public function getThirdPartyCountryUps(): Country
    {
        return $this->thirdPartyCountryUps;
    }

    /**
     * @param ItemFulfillmentThirdPartyTypeUps $thirdPartyTypeUps
     * @return ItemFulfillment
     */
    public function setThirdPartyTypeUps(ItemFulfillmentThirdPartyTypeUps $thirdPartyTypeUps): ItemFulfillment
    {
        $this->thirdPartyTypeUps = $thirdPartyTypeUps;
        return $this;
    }

    /**
     * @return ItemFulfillmentThirdPartyTypeUps
     */
    public function getThirdPartyTypeUps(): ItemFulfillmentThirdPartyTypeUps
    {
        return $this->thirdPartyTypeUps;
    }

    /**
     * @param bool $partiesToTransactionUps
     * @return ItemFulfillment
     */
    public function setPartiesToTransactionUps(bool $partiesToTransactionUps): ItemFulfillment
    {
        $this->partiesToTransactionUps = $partiesToTransactionUps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPartiesToTransactionUps(): bool
    {
        return $this->partiesToTransactionUps;
    }

    /**
     * @param ItemFulfillmentExportTypeUps $exportTypeUps
     * @return ItemFulfillment
     */
    public function setExportTypeUps(ItemFulfillmentExportTypeUps $exportTypeUps): ItemFulfillment
    {
        $this->exportTypeUps = $exportTypeUps;
        return $this;
    }

    /**
     * @return ItemFulfillmentExportTypeUps
     */
    public function getExportTypeUps(): ItemFulfillmentExportTypeUps
    {
        return $this->exportTypeUps;
    }

    /**
     * @param ItemFulfillmentMethodOfTransportUps $methodOfTransportUps
     * @return ItemFulfillment
     */
    public function setMethodOfTransportUps(ItemFulfillmentMethodOfTransportUps $methodOfTransportUps): ItemFulfillment
    {
        $this->methodOfTransportUps = $methodOfTransportUps;
        return $this;
    }

    /**
     * @return ItemFulfillmentMethodOfTransportUps
     */
    public function getMethodOfTransportUps(): ItemFulfillmentMethodOfTransportUps
    {
        return $this->methodOfTransportUps;
    }

    /**
     * @param string $carrierIdUps
     * @return ItemFulfillment
     */
    public function setCarrierIdUps(string $carrierIdUps): ItemFulfillment
    {
        $this->carrierIdUps = $carrierIdUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierIdUps(): string
    {
        return $this->carrierIdUps;
    }

    /**
     * @param string $entryNumberUps
     * @return ItemFulfillment
     */
    public function setEntryNumberUps(string $entryNumberUps): ItemFulfillment
    {
        $this->entryNumberUps = $entryNumberUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntryNumberUps(): string
    {
        return $this->entryNumberUps;
    }

    /**
     * @param string $inbondCodeUps
     * @return ItemFulfillment
     */
    public function setInbondCodeUps(string $inbondCodeUps): ItemFulfillment
    {
        $this->inbondCodeUps = $inbondCodeUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getInbondCodeUps(): string
    {
        return $this->inbondCodeUps;
    }

    /**
     * @param bool $isRoutedExportTransactionUps
     * @return ItemFulfillment
     */
    public function setIsRoutedExportTransactionUps(bool $isRoutedExportTransactionUps): ItemFulfillment
    {
        $this->isRoutedExportTransactionUps = $isRoutedExportTransactionUps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRoutedExportTransactionUps(): bool
    {
        return $this->isRoutedExportTransactionUps;
    }

    /**
     * @param string $licenseNumberUps
     * @return ItemFulfillment
     */
    public function setLicenseNumberUps(string $licenseNumberUps): ItemFulfillment
    {
        $this->licenseNumberUps = $licenseNumberUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseNumberUps(): string
    {
        return $this->licenseNumberUps;
    }

    /**
     * @param string $licenseDateUps
     * @return ItemFulfillment
     */
    public function setLicenseDateUps(string $licenseDateUps): ItemFulfillment
    {
        $this->licenseDateUps = $licenseDateUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseDateUps(): string
    {
        return $this->licenseDateUps;
    }

    /**
     * @param ItemFulfillmentLicenseExceptionUps $licenseExceptionUps
     * @return ItemFulfillment
     */
    public function setLicenseExceptionUps(ItemFulfillmentLicenseExceptionUps $licenseExceptionUps): ItemFulfillment
    {
        $this->licenseExceptionUps = $licenseExceptionUps;
        return $this;
    }

    /**
     * @return ItemFulfillmentLicenseExceptionUps
     */
    public function getLicenseExceptionUps(): ItemFulfillmentLicenseExceptionUps
    {
        return $this->licenseExceptionUps;
    }

    /**
     * @param string $eccNumberUps
     * @return ItemFulfillment
     */
    public function setEccNumberUps(string $eccNumberUps): ItemFulfillment
    {
        $this->eccNumberUps = $eccNumberUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getEccNumberUps(): string
    {
        return $this->eccNumberUps;
    }

    /**
     * @param string $recipientTaxIdUps
     * @return ItemFulfillment
     */
    public function setRecipientTaxIdUps(string $recipientTaxIdUps): ItemFulfillment
    {
        $this->recipientTaxIdUps = $recipientTaxIdUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientTaxIdUps(): string
    {
        return $this->recipientTaxIdUps;
    }

    /**
     * @param string $blanketStartDateUps
     * @return ItemFulfillment
     */
    public function setBlanketStartDateUps(string $blanketStartDateUps): ItemFulfillment
    {
        $this->blanketStartDateUps = $blanketStartDateUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlanketStartDateUps(): string
    {
        return $this->blanketStartDateUps;
    }

    /**
     * @param string $blanketEndDateUps
     * @return ItemFulfillment
     */
    public function setBlanketEndDateUps(string $blanketEndDateUps): ItemFulfillment
    {
        $this->blanketEndDateUps = $blanketEndDateUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlanketEndDateUps(): string
    {
        return $this->blanketEndDateUps;
    }

    /**
     * @param float $shipmentWeightUps
     * @return ItemFulfillment
     */
    public function setShipmentWeightUps(float $shipmentWeightUps): ItemFulfillment
    {
        $this->shipmentWeightUps = $shipmentWeightUps;
        return $this;
    }

    /**
     * @return float
     */
    public function getShipmentWeightUps(): float
    {
        return $this->shipmentWeightUps;
    }

    /**
     * @param bool $saturdayDeliveryFedEx
     * @return ItemFulfillment
     */
    public function setSaturdayDeliveryFedEx(bool $saturdayDeliveryFedEx): ItemFulfillment
    {
        $this->saturdayDeliveryFedEx = $saturdayDeliveryFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSaturdayDeliveryFedEx(): bool
    {
        return $this->saturdayDeliveryFedEx;
    }

    /**
     * @param bool $saturdayPickupFedex
     * @return ItemFulfillment
     */
    public function setSaturdayPickupFedex(bool $saturdayPickupFedex): ItemFulfillment
    {
        $this->saturdayPickupFedex = $saturdayPickupFedex;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSaturdayPickupFedex(): bool
    {
        return $this->saturdayPickupFedex;
    }

    /**
     * @param bool $sendShipNotifyEmailFedEx
     * @return ItemFulfillment
     */
    public function setSendShipNotifyEmailFedEx(bool $sendShipNotifyEmailFedEx): ItemFulfillment
    {
        $this->sendShipNotifyEmailFedEx = $sendShipNotifyEmailFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendShipNotifyEmailFedEx(): bool
    {
        return $this->sendShipNotifyEmailFedEx;
    }

    /**
     * @param bool $sendBackupEmailFedEx
     * @return ItemFulfillment
     */
    public function setSendBackupEmailFedEx(bool $sendBackupEmailFedEx): ItemFulfillment
    {
        $this->sendBackupEmailFedEx = $sendBackupEmailFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendBackupEmailFedEx(): bool
    {
        return $this->sendBackupEmailFedEx;
    }

    /**
     * @param bool $signatureHomeDeliveryFedEx
     * @return ItemFulfillment
     */
    public function setSignatureHomeDeliveryFedEx(bool $signatureHomeDeliveryFedEx): ItemFulfillment
    {
        $this->signatureHomeDeliveryFedEx = $signatureHomeDeliveryFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSignatureHomeDeliveryFedEx(): bool
    {
        return $this->signatureHomeDeliveryFedEx;
    }

    /**
     * @param string $shipNotifyEmailAddressFedEx
     * @return ItemFulfillment
     */
    public function setShipNotifyEmailAddressFedEx(string $shipNotifyEmailAddressFedEx): ItemFulfillment
    {
        $this->shipNotifyEmailAddressFedEx = $shipNotifyEmailAddressFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipNotifyEmailAddressFedEx(): string
    {
        return $this->shipNotifyEmailAddressFedEx;
    }

    /**
     * @param string $backupEmailAddressFedEx
     * @return ItemFulfillment
     */
    public function setBackupEmailAddressFedEx(string $backupEmailAddressFedEx): ItemFulfillment
    {
        $this->backupEmailAddressFedEx = $backupEmailAddressFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getBackupEmailAddressFedEx(): string
    {
        return $this->backupEmailAddressFedEx;
    }

    /**
     * @param string $shipDateFedEx
     * @return ItemFulfillment
     */
    public function setShipDateFedEx(string $shipDateFedEx): ItemFulfillment
    {
        $this->shipDateFedEx = $shipDateFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipDateFedEx(): string
    {
        return $this->shipDateFedEx;
    }

    /**
     * @param ItemFulfillmentHomeDeliveryTypeFedEx $homeDeliveryTypeFedEx
     * @return ItemFulfillment
     */
    public function setHomeDeliveryTypeFedEx(ItemFulfillmentHomeDeliveryTypeFedEx $homeDeliveryTypeFedEx): ItemFulfillment
    {
        $this->homeDeliveryTypeFedEx = $homeDeliveryTypeFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentHomeDeliveryTypeFedEx
     */
    public function getHomeDeliveryTypeFedEx(): ItemFulfillmentHomeDeliveryTypeFedEx
    {
        return $this->homeDeliveryTypeFedEx;
    }

    /**
     * @param string $homeDeliveryDateFedEx
     * @return ItemFulfillment
     */
    public function setHomeDeliveryDateFedEx(string $homeDeliveryDateFedEx): ItemFulfillment
    {
        $this->homeDeliveryDateFedEx = $homeDeliveryDateFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomeDeliveryDateFedEx(): string
    {
        return $this->homeDeliveryDateFedEx;
    }

    /**
     * @param string $bookingConfirmationNumFedEx
     * @return ItemFulfillment
     */
    public function setBookingConfirmationNumFedEx(string $bookingConfirmationNumFedEx): ItemFulfillment
    {
        $this->bookingConfirmationNumFedEx = $bookingConfirmationNumFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getBookingConfirmationNumFedEx(): string
    {
        return $this->bookingConfirmationNumFedEx;
    }

    /**
     * @param string $intlExemptionNumFedEx
     * @return ItemFulfillment
     */
    public function setIntlExemptionNumFedEx(string $intlExemptionNumFedEx): ItemFulfillment
    {
        $this->intlExemptionNumFedEx = $intlExemptionNumFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntlExemptionNumFedEx(): string
    {
        return $this->intlExemptionNumFedEx;
    }

    /**
     * @param string $thirdPartyAcctFedEx
     * @return ItemFulfillment
     */
    public function setThirdPartyAcctFedEx(string $thirdPartyAcctFedEx): ItemFulfillment
    {
        $this->thirdPartyAcctFedEx = $thirdPartyAcctFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyAcctFedEx(): string
    {
        return $this->thirdPartyAcctFedEx;
    }

    /**
     * @param Country $thirdPartyCountryFedEx
     * @return ItemFulfillment
     */
    public function setThirdPartyCountryFedEx(Country $thirdPartyCountryFedEx): ItemFulfillment
    {
        $this->thirdPartyCountryFedEx = $thirdPartyCountryFedEx;
        return $this;
    }

    /**
     * @return Country
     */
    public function getThirdPartyCountryFedEx(): Country
    {
        return $this->thirdPartyCountryFedEx;
    }

    /**
     * @param ItemFulfillmentThirdPartyTypeFedEx $thirdPartyTypeFedEx
     * @return ItemFulfillment
     */
    public function setThirdPartyTypeFedEx(ItemFulfillmentThirdPartyTypeFedEx $thirdPartyTypeFedEx): ItemFulfillment
    {
        $this->thirdPartyTypeFedEx = $thirdPartyTypeFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentThirdPartyTypeFedEx
     */
    public function getThirdPartyTypeFedEx(): ItemFulfillmentThirdPartyTypeFedEx
    {
        return $this->thirdPartyTypeFedEx;
    }

    /**
     * @param float $shipmentWeightFedEx
     * @return ItemFulfillment
     */
    public function setShipmentWeightFedEx(float $shipmentWeightFedEx): ItemFulfillment
    {
        $this->shipmentWeightFedEx = $shipmentWeightFedEx;
        return $this;
    }

    /**
     * @return float
     */
    public function getShipmentWeightFedEx(): float
    {
        return $this->shipmentWeightFedEx;
    }

    /**
     * @param ItemFulfillmentTermsOfSaleFedEx $termsOfSaleFedEx
     * @return ItemFulfillment
     */
    public function setTermsOfSaleFedEx(ItemFulfillmentTermsOfSaleFedEx $termsOfSaleFedEx): ItemFulfillment
    {
        $this->termsOfSaleFedEx = $termsOfSaleFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentTermsOfSaleFedEx
     */
    public function getTermsOfSaleFedEx(): ItemFulfillmentTermsOfSaleFedEx
    {
        return $this->termsOfSaleFedEx;
    }

    /**
     * @param float $termsFreightChargeFedEx
     * @return ItemFulfillment
     */
    public function setTermsFreightChargeFedEx(float $termsFreightChargeFedEx): ItemFulfillment
    {
        $this->termsFreightChargeFedEx = $termsFreightChargeFedEx;
        return $this;
    }

    /**
     * @return float
     */
    public function getTermsFreightChargeFedEx(): float
    {
        return $this->termsFreightChargeFedEx;
    }

    /**
     * @param float $termsInsuranceChargeFedEx
     * @return ItemFulfillment
     */
    public function setTermsInsuranceChargeFedEx(float $termsInsuranceChargeFedEx): ItemFulfillment
    {
        $this->termsInsuranceChargeFedEx = $termsInsuranceChargeFedEx;
        return $this;
    }

    /**
     * @return float
     */
    public function getTermsInsuranceChargeFedEx(): float
    {
        return $this->termsInsuranceChargeFedEx;
    }

    /**
     * @param bool $insideDeliveryFedEx
     * @return ItemFulfillment
     */
    public function setInsideDeliveryFedEx(bool $insideDeliveryFedEx): ItemFulfillment
    {
        $this->insideDeliveryFedEx = $insideDeliveryFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInsideDeliveryFedEx(): bool
    {
        return $this->insideDeliveryFedEx;
    }

    /**
     * @param bool $insidePickupFedEx
     * @return ItemFulfillment
     */
    public function setInsidePickupFedEx(bool $insidePickupFedEx): ItemFulfillment
    {
        $this->insidePickupFedEx = $insidePickupFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInsidePickupFedEx(): bool
    {
        return $this->insidePickupFedEx;
    }

    /**
     * @param ItemFulfillmentAncillaryEndorsementFedEx $ancillaryEndorsementFedEx
     * @return ItemFulfillment
     */
    public function setAncillaryEndorsementFedEx(ItemFulfillmentAncillaryEndorsementFedEx $ancillaryEndorsementFedEx): ItemFulfillment
    {
        $this->ancillaryEndorsementFedEx = $ancillaryEndorsementFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentAncillaryEndorsementFedEx
     */
    public function getAncillaryEndorsementFedEx(): ItemFulfillmentAncillaryEndorsementFedEx
    {
        return $this->ancillaryEndorsementFedEx;
    }

    /**
     * @param bool $holdAtLocationFedEx
     * @return ItemFulfillment
     */
    public function setHoldAtLocationFedEx(bool $holdAtLocationFedEx): ItemFulfillment
    {
        $this->holdAtLocationFedEx = $holdAtLocationFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHoldAtLocationFedEx(): bool
    {
        return $this->holdAtLocationFedEx;
    }

    /**
     * @param string $halPhoneFedEx
     * @return ItemFulfillment
     */
    public function setHalPhoneFedEx(string $halPhoneFedEx): ItemFulfillment
    {
        $this->halPhoneFedEx = $halPhoneFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getHalPhoneFedEx(): string
    {
        return $this->halPhoneFedEx;
    }

    /**
     * @param string $halCityFedEx
     * @return ItemFulfillment
     */
    public function setHalCityFedEx(string $halCityFedEx): ItemFulfillment
    {
        $this->halCityFedEx = $halCityFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getHalCityFedEx(): string
    {
        return $this->halCityFedEx;
    }

    /**
     * @param string $halZipFedEx
     * @return ItemFulfillment
     */
    public function setHalZipFedEx(string $halZipFedEx): ItemFulfillment
    {
        $this->halZipFedEx = $halZipFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getHalZipFedEx(): string
    {
        return $this->halZipFedEx;
    }

    /**
     * @param string $halStateFedEx
     * @return ItemFulfillment
     */
    public function setHalStateFedEx(string $halStateFedEx): ItemFulfillment
    {
        $this->halStateFedEx = $halStateFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getHalStateFedEx(): string
    {
        return $this->halStateFedEx;
    }

    /**
     * @param string $halCountryFedEx
     * @return ItemFulfillment
     */
    public function setHalCountryFedEx(string $halCountryFedEx): ItemFulfillment
    {
        $this->halCountryFedEx = $halCountryFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getHalCountryFedEx(): string
    {
        return $this->halCountryFedEx;
    }

    /**
     * @param ItemFulfillmentHazmatTypeFedEx $hazmatTypeFedEx
     * @return ItemFulfillment
     */
    public function setHazmatTypeFedEx(ItemFulfillmentHazmatTypeFedEx $hazmatTypeFedEx): ItemFulfillment
    {
        $this->hazmatTypeFedEx = $hazmatTypeFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentHazmatTypeFedEx
     */
    public function getHazmatTypeFedEx(): ItemFulfillmentHazmatTypeFedEx
    {
        return $this->hazmatTypeFedEx;
    }

    /**
     * @param ItemFulfillmentAccessibilityTypeFedEx $accessibilityTypeFedEx
     * @return ItemFulfillment
     */
    public function setAccessibilityTypeFedEx(ItemFulfillmentAccessibilityTypeFedEx $accessibilityTypeFedEx): ItemFulfillment
    {
        $this->accessibilityTypeFedEx = $accessibilityTypeFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentAccessibilityTypeFedEx
     */
    public function getAccessibilityTypeFedEx(): ItemFulfillmentAccessibilityTypeFedEx
    {
        return $this->accessibilityTypeFedEx;
    }

    /**
     * @param bool $isCargoAircraftOnlyFedEx
     * @return ItemFulfillment
     */
    public function setIsCargoAircraftOnlyFedEx(bool $isCargoAircraftOnlyFedEx): ItemFulfillment
    {
        $this->isCargoAircraftOnlyFedEx = $isCargoAircraftOnlyFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsCargoAircraftOnlyFedEx(): bool
    {
        return $this->isCargoAircraftOnlyFedEx;
    }

    /**
     * @param string $tranDate
     * @return ItemFulfillment
     */
    public function setTranDate(string $tranDate): ItemFulfillment
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param string $tranId
     * @return ItemFulfillment
     */
    public function setTranId(string $tranId): ItemFulfillment
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranId(): string
    {
        return $this->tranId;
    }

    /**
     * @param RecordRef $shipMethod
     * @return ItemFulfillment
     */
    public function setShipMethod(RecordRef $shipMethod): ItemFulfillment
    {
        $this->shipMethod = $shipMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShipMethod(): RecordRef
    {
        return $this->shipMethod;
    }

    /**
     * @param bool $generateIntegratedShipperLabel
     * @return ItemFulfillment
     */
    public function setGenerateIntegratedShipperLabel(bool $generateIntegratedShipperLabel): ItemFulfillment
    {
        $this->generateIntegratedShipperLabel = $generateIntegratedShipperLabel;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGenerateIntegratedShipperLabel(): bool
    {
        return $this->generateIntegratedShipperLabel;
    }

    /**
     * @param float $shippingCost
     * @return ItemFulfillment
     */
    public function setShippingCost(float $shippingCost): ItemFulfillment
    {
        $this->shippingCost = $shippingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        return $this->shippingCost;
    }

    /**
     * @param float $handlingCost
     * @return ItemFulfillment
     */
    public function setHandlingCost(float $handlingCost): ItemFulfillment
    {
        $this->handlingCost = $handlingCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getHandlingCost(): float
    {
        return $this->handlingCost;
    }

    /**
     * @param string $memo
     * @return ItemFulfillment
     */
    public function setMemo(string $memo): ItemFulfillment
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param RecordRef $transferLocation
     * @return ItemFulfillment
     */
    public function setTransferLocation(RecordRef $transferLocation): ItemFulfillment
    {
        $this->transferLocation = $transferLocation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransferLocation(): RecordRef
    {
        return $this->transferLocation;
    }

    /**
     * @param ItemFulfillmentPackageList $packageList
     * @return ItemFulfillment
     */
    public function setPackageList(ItemFulfillmentPackageList $packageList): ItemFulfillment
    {
        $this->packageList = $packageList;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageList
     */
    public function getPackageList(): ItemFulfillmentPackageList
    {
        return $this->packageList;
    }

    /**
     * @param ItemFulfillmentPackageUpsList $packageUpsList
     * @return ItemFulfillment
     */
    public function setPackageUpsList(ItemFulfillmentPackageUpsList $packageUpsList): ItemFulfillment
    {
        $this->packageUpsList = $packageUpsList;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageUpsList
     */
    public function getPackageUpsList(): ItemFulfillmentPackageUpsList
    {
        return $this->packageUpsList;
    }

    /**
     * @param ItemFulfillmentPackageUspsList $packageUspsList
     * @return ItemFulfillment
     */
    public function setPackageUspsList(ItemFulfillmentPackageUspsList $packageUspsList): ItemFulfillment
    {
        $this->packageUspsList = $packageUspsList;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageUspsList
     */
    public function getPackageUspsList(): ItemFulfillmentPackageUspsList
    {
        return $this->packageUspsList;
    }

    /**
     * @param ItemFulfillmentPackageFedExList $packageFedExList
     * @return ItemFulfillment
     */
    public function setPackageFedExList(ItemFulfillmentPackageFedExList $packageFedExList): ItemFulfillment
    {
        $this->packageFedExList = $packageFedExList;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExList
     */
    public function getPackageFedExList(): ItemFulfillmentPackageFedExList
    {
        return $this->packageFedExList;
    }

    /**
     * @param ItemFulfillmentItemList $itemList
     * @return ItemFulfillment
     */
    public function setItemList(ItemFulfillmentItemList $itemList): ItemFulfillment
    {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * @return ItemFulfillmentItemList
     */
    public function getItemList(): ItemFulfillmentItemList
    {
        return $this->itemList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return ItemFulfillment
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): ItemFulfillment
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ItemFulfillment
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ItemFulfillment
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return ItemFulfillment
     */
    public function setInternalId(string $internalId): ItemFulfillment
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return ItemFulfillment
     */
    public function setExternalId(string $externalId): ItemFulfillment
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
