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

class InventoryItemLocations {
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
     * @return InventoryItemLocations
     */
    public function setLocation(string $location): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setQuantityOnHand(float $quantityOnHand): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setOnHandValueMli(float $onHandValueMli): InventoryItemLocations
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
     * @param float $averageCostMli
     * @return InventoryItemLocations
     */
    public function setAverageCostMli(float $averageCostMli): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setLastPurchasePriceMli(float $lastPurchasePriceMli): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setReorderPoint(float $reorderPoint): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setLocationAllowStorePickup(bool $locationAllowStorePickup): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setLocationStorePickupBufferStock(float $locationStorePickupBufferStock): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setLocationQtyAvailForStorePickup(float $locationQtyAvailForStorePickup): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setPreferredStockLevel(float $preferredStockLevel): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setLeadTime(int $leadTime): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setDefaultReturnCost(float $defaultReturnCost): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setSafetyStockLevel(float $safetyStockLevel): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setCost(float $cost): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setInventoryCostTemplate(RecordRef $inventoryCostTemplate): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setBuildTime(float $buildTime): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setLastInvtCountDate(string $lastInvtCountDate): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setNextInvtCountDate(string $nextInvtCountDate): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setIsWip(bool $isWip): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setInvtCountInterval(int $invtCountInterval): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setInvtClassification(ItemInvtClassification $invtClassification): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setCostingLotSize(float $costingLotSize): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setQuantityOnOrder(float $quantityOnOrder): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setQuantityCommitted(float $quantityCommitted): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setQuantityAvailable(float $quantityAvailable): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setQuantityBackOrdered(float $quantityBackOrdered): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setLocationId(RecordRef $locationId): InventoryItemLocations
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
     * @param RecordRef $supplyReplenishmentMethod
     * @return InventoryItemLocations
     */
    public function setSupplyReplenishmentMethod(RecordRef $supplyReplenishmentMethod): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setAlternateDemandSourceItem(RecordRef $alternateDemandSourceItem): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setFixedLotSize(float $fixedLotSize): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setPeriodicLotSizeType(PeriodicLotSizeType $periodicLotSizeType): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setPeriodicLotSizeDays(int $periodicLotSizeDays): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setSupplyType(RecordRef $supplyType): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setSupplyLotSizingMethod(RecordRef $supplyLotSizingMethod): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setDemandSource(RecordRef $demandSource): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setBackwardConsumptionDays(int $backwardConsumptionDays): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setForwardConsumptionDays(int $forwardConsumptionDays): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setDemandTimeFence(int $demandTimeFence): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setSupplyTimeFence(int $supplyTimeFence): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setRescheduleInDays(int $rescheduleInDays): InventoryItemLocations
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
     * @return InventoryItemLocations
     */
    public function setRescheduleOutDays(int $rescheduleOutDays): InventoryItemLocations
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
