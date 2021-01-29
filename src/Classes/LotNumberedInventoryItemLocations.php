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

class LotNumberedInventoryItemLocations {
    /**
     * @var string
     */
    protected string $location;

    /**
     * @var float
     */
    protected float $quantityOnHand;

    /**
     * @var float
     */
    protected float $onHandValueMli;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var float
     */
    protected float $averageCostMli;

    /**
     * @var float
     */
    protected float $lastPurchasePriceMli;

    /**
     * @var float
     */
    protected float $reorderPoint;

    /**
     * @var bool
     */
    protected bool $locationAllowStorePickup;

    /**
     * @var float
     */
    protected float $locationStorePickupBufferStock;

    /**
     * @var float
     */
    protected float $locationQtyAvailForStorePickup;

    /**
     * @var float
     */
    protected float $preferredStockLevel;

    /**
     * @var int
     */
    protected int $leadTime;

    /**
     * @var float
     */
    protected float $defaultReturnCost;

    /**
     * @var float
     */
    protected float $safetyStockLevel;

    /**
     * @var float
     */
    protected float $cost;

    /**
     * @var RecordRef
     */
    protected RecordRef $inventoryCostTemplate;

    /**
     * @var float
     */
    protected float $buildTime;

    /**
     * @var string
     */
    protected string $lastInvtCountDate;

    /**
     * @var string
     */
    protected string $nextInvtCountDate;

    /**
     * @var bool
     */
    protected bool $isWip;

    /**
     * @var int
     */
    protected int $invtCountInterval;

    /**
     * @var ItemInvtClassification
     */
    protected ItemInvtClassification $invtClassification;

    /**
     * @var float
     */
    protected float $costingLotSize;

    /**
     * @var float
     */
    protected float $quantityOnOrder;

    /**
     * @var float
     */
    protected float $quantityCommitted;

    /**
     * @var float
     */
    protected float $quantityAvailable;

    /**
     * @var float
     */
    protected float $quantityBackOrdered;

    /**
     * @var RecordRef
     */
    protected RecordRef $locationId;

    /**
     * @var RecordRef
     */
    protected RecordRef $locationlookup;

    /**
     * @var string
     */
    protected string $location_display;

    /**
     * @var RecordRef
     */
    protected RecordRef $supplyReplenishmentMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $alternateDemandSourceItem;

    /**
     * @var float
     */
    protected float $fixedLotSize;

    /**
     * @var PeriodicLotSizeType
     */
    protected PeriodicLotSizeType $periodicLotSizeType;

    /**
     * @var int
     */
    protected int $periodicLotSizeDays;

    /**
     * @var RecordRef
     */
    protected RecordRef $supplyType;

    /**
     * @var RecordRef
     */
    protected RecordRef $supplyLotSizingMethod;

    /**
     * @var RecordRef
     */
    protected RecordRef $demandSource;

    /**
     * @var int
     */
    protected int $backwardConsumptionDays;

    /**
     * @var int
     */
    protected int $forwardConsumptionDays;

    /**
     * @var int
     */
    protected int $demandTimeFence;

    /**
     * @var int
     */
    protected int $supplyTimeFence;

    /**
     * @var int
     */
    protected int $rescheduleInDays;

    /**
     * @var int
     */
    protected int $rescheduleOutDays;

    static $paramtypesmap = array(
        "location" => "string",
        "quantityOnHand" => "float",
        "onHandValueMli" => "float",
        "serialNumbers" => "string",
        "expirationDate" => "dateTime",
        "averageCostMli" => "float",
        "lastPurchasePriceMli" => "float",
        "reorderPoint" => "float",
        "locationAllowStorePickup" => "boolean",
        "locationStorePickupBufferStock" => "float",
        "locationQtyAvailForStorePickup" => "float",
        "preferredStockLevel" => "float",
        "leadTime" => "integer",
        "defaultReturnCost" => "float",
        "safetyStockLevel" => "float",
        "cost" => "float",
        "inventoryCostTemplate" => "RecordRef",
        "buildTime" => "float",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "isWip" => "boolean",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "costingLotSize" => "float",
        "quantityOnOrder" => "float",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "locationId" => "RecordRef",
        "locationlookup" => "RecordRef",
        "location_display" => "string",
        "supplyReplenishmentMethod" => "RecordRef",
        "alternateDemandSourceItem" => "RecordRef",
        "fixedLotSize" => "float",
        "periodicLotSizeType" => "PeriodicLotSizeType",
        "periodicLotSizeDays" => "integer",
        "supplyType" => "RecordRef",
        "supplyLotSizingMethod" => "RecordRef",
        "demandSource" => "RecordRef",
        "backwardConsumptionDays" => "integer",
        "forwardConsumptionDays" => "integer",
        "demandTimeFence" => "integer",
        "supplyTimeFence" => "integer",
        "rescheduleInDays" => "integer",
        "rescheduleOutDays" => "integer",
    );

    /**
     * @param string $location
     * @return LotNumberedInventoryItemLocations
     */
    public function setLocation(string $location): LotNumberedInventoryItemLocations
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param float $quantityOnHand
     * @return LotNumberedInventoryItemLocations
     */
    public function setQuantityOnHand(float $quantityOnHand): LotNumberedInventoryItemLocations
    {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnHand(): float
    {
        return $this->quantityOnHand;
    }

    /**
     * @param float $onHandValueMli
     * @return LotNumberedInventoryItemLocations
     */
    public function setOnHandValueMli(float $onHandValueMli): LotNumberedInventoryItemLocations
    {
        $this->onHandValueMli = $onHandValueMli;
        return $this;
    }

    /**
     * @return float
     */
    public function getOnHandValueMli(): float
    {
        return $this->onHandValueMli;
    }

    /**
     * @param string $serialNumbers
     * @return LotNumberedInventoryItemLocations
     */
    public function setSerialNumbers(string $serialNumbers): LotNumberedInventoryItemLocations
    {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers(): string
    {
        return $this->serialNumbers;
    }

    /**
     * @param string $expirationDate
     * @return LotNumberedInventoryItemLocations
     */
    public function setExpirationDate(string $expirationDate): LotNumberedInventoryItemLocations
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param float $averageCostMli
     * @return LotNumberedInventoryItemLocations
     */
    public function setAverageCostMli(float $averageCostMli): LotNumberedInventoryItemLocations
    {
        $this->averageCostMli = $averageCostMli;
        return $this;
    }

    /**
     * @return float
     */
    public function getAverageCostMli(): float
    {
        return $this->averageCostMli;
    }

    /**
     * @param float $lastPurchasePriceMli
     * @return LotNumberedInventoryItemLocations
     */
    public function setLastPurchasePriceMli(float $lastPurchasePriceMli): LotNumberedInventoryItemLocations
    {
        $this->lastPurchasePriceMli = $lastPurchasePriceMli;
        return $this;
    }

    /**
     * @return float
     */
    public function getLastPurchasePriceMli(): float
    {
        return $this->lastPurchasePriceMli;
    }

    /**
     * @param float $reorderPoint
     * @return LotNumberedInventoryItemLocations
     */
    public function setReorderPoint(float $reorderPoint): LotNumberedInventoryItemLocations
    {
        $this->reorderPoint = $reorderPoint;
        return $this;
    }

    /**
     * @return float
     */
    public function getReorderPoint(): float
    {
        return $this->reorderPoint;
    }

    /**
     * @param bool $locationAllowStorePickup
     * @return LotNumberedInventoryItemLocations
     */
    public function setLocationAllowStorePickup(bool $locationAllowStorePickup): LotNumberedInventoryItemLocations
    {
        $this->locationAllowStorePickup = $locationAllowStorePickup;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLocationAllowStorePickup(): bool
    {
        return $this->locationAllowStorePickup;
    }

    /**
     * @param float $locationStorePickupBufferStock
     * @return LotNumberedInventoryItemLocations
     */
    public function setLocationStorePickupBufferStock(float $locationStorePickupBufferStock): LotNumberedInventoryItemLocations
    {
        $this->locationStorePickupBufferStock = $locationStorePickupBufferStock;
        return $this;
    }

    /**
     * @return float
     */
    public function getLocationStorePickupBufferStock(): float
    {
        return $this->locationStorePickupBufferStock;
    }

    /**
     * @param float $locationQtyAvailForStorePickup
     * @return LotNumberedInventoryItemLocations
     */
    public function setLocationQtyAvailForStorePickup(float $locationQtyAvailForStorePickup): LotNumberedInventoryItemLocations
    {
        $this->locationQtyAvailForStorePickup = $locationQtyAvailForStorePickup;
        return $this;
    }

    /**
     * @return float
     */
    public function getLocationQtyAvailForStorePickup(): float
    {
        return $this->locationQtyAvailForStorePickup;
    }

    /**
     * @param float $preferredStockLevel
     * @return LotNumberedInventoryItemLocations
     */
    public function setPreferredStockLevel(float $preferredStockLevel): LotNumberedInventoryItemLocations
    {
        $this->preferredStockLevel = $preferredStockLevel;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreferredStockLevel(): float
    {
        return $this->preferredStockLevel;
    }

    /**
     * @param int $leadTime
     * @return LotNumberedInventoryItemLocations
     */
    public function setLeadTime(int $leadTime): LotNumberedInventoryItemLocations
    {
        $this->leadTime = $leadTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getLeadTime(): int
    {
        return $this->leadTime;
    }

    /**
     * @param float $defaultReturnCost
     * @return LotNumberedInventoryItemLocations
     */
    public function setDefaultReturnCost(float $defaultReturnCost): LotNumberedInventoryItemLocations
    {
        $this->defaultReturnCost = $defaultReturnCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultReturnCost(): float
    {
        return $this->defaultReturnCost;
    }

    /**
     * @param float $safetyStockLevel
     * @return LotNumberedInventoryItemLocations
     */
    public function setSafetyStockLevel(float $safetyStockLevel): LotNumberedInventoryItemLocations
    {
        $this->safetyStockLevel = $safetyStockLevel;
        return $this;
    }

    /**
     * @return float
     */
    public function getSafetyStockLevel(): float
    {
        return $this->safetyStockLevel;
    }

    /**
     * @param float $cost
     * @return LotNumberedInventoryItemLocations
     */
    public function setCost(float $cost): LotNumberedInventoryItemLocations
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param RecordRef $inventoryCostTemplate
     * @return LotNumberedInventoryItemLocations
     */
    public function setInventoryCostTemplate(RecordRef $inventoryCostTemplate): LotNumberedInventoryItemLocations
    {
        $this->inventoryCostTemplate = $inventoryCostTemplate;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInventoryCostTemplate(): RecordRef
    {
        return $this->inventoryCostTemplate;
    }

    /**
     * @param float $buildTime
     * @return LotNumberedInventoryItemLocations
     */
    public function setBuildTime(float $buildTime): LotNumberedInventoryItemLocations
    {
        $this->buildTime = $buildTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getBuildTime(): float
    {
        return $this->buildTime;
    }

    /**
     * @param string $lastInvtCountDate
     * @return LotNumberedInventoryItemLocations
     */
    public function setLastInvtCountDate(string $lastInvtCountDate): LotNumberedInventoryItemLocations
    {
        $this->lastInvtCountDate = $lastInvtCountDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastInvtCountDate(): string
    {
        return $this->lastInvtCountDate;
    }

    /**
     * @param string $nextInvtCountDate
     * @return LotNumberedInventoryItemLocations
     */
    public function setNextInvtCountDate(string $nextInvtCountDate): LotNumberedInventoryItemLocations
    {
        $this->nextInvtCountDate = $nextInvtCountDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextInvtCountDate(): string
    {
        return $this->nextInvtCountDate;
    }

    /**
     * @param bool $isWip
     * @return LotNumberedInventoryItemLocations
     */
    public function setIsWip(bool $isWip): LotNumberedInventoryItemLocations
    {
        $this->isWip = $isWip;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsWip(): bool
    {
        return $this->isWip;
    }

    /**
     * @param int $invtCountInterval
     * @return LotNumberedInventoryItemLocations
     */
    public function setInvtCountInterval(int $invtCountInterval): LotNumberedInventoryItemLocations
    {
        $this->invtCountInterval = $invtCountInterval;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvtCountInterval(): int
    {
        return $this->invtCountInterval;
    }

    /**
     * @param ItemInvtClassification $invtClassification
     * @return LotNumberedInventoryItemLocations
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification): LotNumberedInventoryItemLocations
    {
        $this->invtClassification = $invtClassification;
        return $this;
    }

    /**
     * @return ItemInvtClassification
     */
    public function getInvtClassification(): ItemInvtClassification
    {
        return $this->invtClassification;
    }

    /**
     * @param float $costingLotSize
     * @return LotNumberedInventoryItemLocations
     */
    public function setCostingLotSize(float $costingLotSize): LotNumberedInventoryItemLocations
    {
        $this->costingLotSize = $costingLotSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getCostingLotSize(): float
    {
        return $this->costingLotSize;
    }

    /**
     * @param float $quantityOnOrder
     * @return LotNumberedInventoryItemLocations
     */
    public function setQuantityOnOrder(float $quantityOnOrder): LotNumberedInventoryItemLocations
    {
        $this->quantityOnOrder = $quantityOnOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOnOrder(): float
    {
        return $this->quantityOnOrder;
    }

    /**
     * @param float $quantityCommitted
     * @return LotNumberedInventoryItemLocations
     */
    public function setQuantityCommitted(float $quantityCommitted): LotNumberedInventoryItemLocations
    {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCommitted(): float
    {
        return $this->quantityCommitted;
    }

    /**
     * @param float $quantityAvailable
     * @return LotNumberedInventoryItemLocations
     */
    public function setQuantityAvailable(float $quantityAvailable): LotNumberedInventoryItemLocations
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityAvailable(): float
    {
        return $this->quantityAvailable;
    }

    /**
     * @param float $quantityBackOrdered
     * @return LotNumberedInventoryItemLocations
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): LotNumberedInventoryItemLocations
    {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackOrdered(): float
    {
        return $this->quantityBackOrdered;
    }

    /**
     * @param RecordRef $locationId
     * @return LotNumberedInventoryItemLocations
     */
    public function setLocationId(RecordRef $locationId): LotNumberedInventoryItemLocations
    {
        $this->locationId = $locationId;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocationId(): RecordRef
    {
        return $this->locationId;
    }

    /**
     * @param RecordRef $locationlookup
     * @return LotNumberedInventoryItemLocations
     */
    public function setLocationlookup(RecordRef $locationlookup): LotNumberedInventoryItemLocations
    {
        $this->locationlookup = $locationlookup;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocationlookup(): RecordRef
    {
        return $this->locationlookup;
    }

    /**
     * @param string $location_display
     * @return LotNumberedInventoryItemLocations
     */
    public function setLocation_display(string $location_display): LotNumberedInventoryItemLocations
    {
        $this->location_display = $location_display;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation_display(): string
    {
        return $this->location_display;
    }

    /**
     * @param RecordRef $supplyReplenishmentMethod
     * @return LotNumberedInventoryItemLocations
     */
    public function setSupplyReplenishmentMethod(RecordRef $supplyReplenishmentMethod): LotNumberedInventoryItemLocations
    {
        $this->supplyReplenishmentMethod = $supplyReplenishmentMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyReplenishmentMethod(): RecordRef
    {
        return $this->supplyReplenishmentMethod;
    }

    /**
     * @param RecordRef $alternateDemandSourceItem
     * @return LotNumberedInventoryItemLocations
     */
    public function setAlternateDemandSourceItem(RecordRef $alternateDemandSourceItem): LotNumberedInventoryItemLocations
    {
        $this->alternateDemandSourceItem = $alternateDemandSourceItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAlternateDemandSourceItem(): RecordRef
    {
        return $this->alternateDemandSourceItem;
    }

    /**
     * @param float $fixedLotSize
     * @return LotNumberedInventoryItemLocations
     */
    public function setFixedLotSize(float $fixedLotSize): LotNumberedInventoryItemLocations
    {
        $this->fixedLotSize = $fixedLotSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getFixedLotSize(): float
    {
        return $this->fixedLotSize;
    }

    /**
     * @param PeriodicLotSizeType $periodicLotSizeType
     * @return LotNumberedInventoryItemLocations
     */
    public function setPeriodicLotSizeType(PeriodicLotSizeType $periodicLotSizeType): LotNumberedInventoryItemLocations
    {
        $this->periodicLotSizeType = $periodicLotSizeType;
        return $this;
    }

    /**
     * @return PeriodicLotSizeType
     */
    public function getPeriodicLotSizeType(): PeriodicLotSizeType
    {
        return $this->periodicLotSizeType;
    }

    /**
     * @param int $periodicLotSizeDays
     * @return LotNumberedInventoryItemLocations
     */
    public function setPeriodicLotSizeDays(int $periodicLotSizeDays): LotNumberedInventoryItemLocations
    {
        $this->periodicLotSizeDays = $periodicLotSizeDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getPeriodicLotSizeDays(): int
    {
        return $this->periodicLotSizeDays;
    }

    /**
     * @param RecordRef $supplyType
     * @return LotNumberedInventoryItemLocations
     */
    public function setSupplyType(RecordRef $supplyType): LotNumberedInventoryItemLocations
    {
        $this->supplyType = $supplyType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyType(): RecordRef
    {
        return $this->supplyType;
    }

    /**
     * @param RecordRef $supplyLotSizingMethod
     * @return LotNumberedInventoryItemLocations
     */
    public function setSupplyLotSizingMethod(RecordRef $supplyLotSizingMethod): LotNumberedInventoryItemLocations
    {
        $this->supplyLotSizingMethod = $supplyLotSizingMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupplyLotSizingMethod(): RecordRef
    {
        return $this->supplyLotSizingMethod;
    }

    /**
     * @param RecordRef $demandSource
     * @return LotNumberedInventoryItemLocations
     */
    public function setDemandSource(RecordRef $demandSource): LotNumberedInventoryItemLocations
    {
        $this->demandSource = $demandSource;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDemandSource(): RecordRef
    {
        return $this->demandSource;
    }

    /**
     * @param int $backwardConsumptionDays
     * @return LotNumberedInventoryItemLocations
     */
    public function setBackwardConsumptionDays(int $backwardConsumptionDays): LotNumberedInventoryItemLocations
    {
        $this->backwardConsumptionDays = $backwardConsumptionDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackwardConsumptionDays(): int
    {
        return $this->backwardConsumptionDays;
    }

    /**
     * @param int $forwardConsumptionDays
     * @return LotNumberedInventoryItemLocations
     */
    public function setForwardConsumptionDays(int $forwardConsumptionDays): LotNumberedInventoryItemLocations
    {
        $this->forwardConsumptionDays = $forwardConsumptionDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getForwardConsumptionDays(): int
    {
        return $this->forwardConsumptionDays;
    }

    /**
     * @param int $demandTimeFence
     * @return LotNumberedInventoryItemLocations
     */
    public function setDemandTimeFence(int $demandTimeFence): LotNumberedInventoryItemLocations
    {
        $this->demandTimeFence = $demandTimeFence;
        return $this;
    }

    /**
     * @return int
     */
    public function getDemandTimeFence(): int
    {
        return $this->demandTimeFence;
    }

    /**
     * @param int $supplyTimeFence
     * @return LotNumberedInventoryItemLocations
     */
    public function setSupplyTimeFence(int $supplyTimeFence): LotNumberedInventoryItemLocations
    {
        $this->supplyTimeFence = $supplyTimeFence;
        return $this;
    }

    /**
     * @return int
     */
    public function getSupplyTimeFence(): int
    {
        return $this->supplyTimeFence;
    }

    /**
     * @param int $rescheduleInDays
     * @return LotNumberedInventoryItemLocations
     */
    public function setRescheduleInDays(int $rescheduleInDays): LotNumberedInventoryItemLocations
    {
        $this->rescheduleInDays = $rescheduleInDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getRescheduleInDays(): int
    {
        return $this->rescheduleInDays;
    }

    /**
     * @param int $rescheduleOutDays
     * @return LotNumberedInventoryItemLocations
     */
    public function setRescheduleOutDays(int $rescheduleOutDays): LotNumberedInventoryItemLocations
    {
        $this->rescheduleOutDays = $rescheduleOutDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getRescheduleOutDays(): int
    {
        return $this->rescheduleOutDays;
    }

}
