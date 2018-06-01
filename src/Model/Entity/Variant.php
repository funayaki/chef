<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * Variant Entity
 *
 * @property int $id
 * @property string $sku
 * @property float $weight
 * @property float $height
 * @property float $width
 * @property float $depth
 * @property \Cake\I18n\FrozenTime $deleted_at
 * @property bool $is_master
 * @property int $product_id
 * @property float $cost_price
 * @property int $position
 * @property string $cost_currency
 * @property bool $track_inventory
 * @property int $tax_category_id
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property \Cake\I18n\FrozenTime $created_at
 *
 * @property \Chef\Model\Entity\Product $product
 * @property \Chef\Model\Entity\TaxCategory $tax_category
 * @property \Chef\Model\Entity\Price[] $prices
 * @property \Chef\Model\Entity\InventoryUnit[] $inventory_units
 * @property \Chef\Model\Entity\LineItem[] $line_items
 * @property \Chef\Model\Entity\OrderStockLocation[] $order_stock_locations
 * @property \Chef\Model\Entity\PromotionActionLineItem[] $promotion_action_line_items
 * @property \Chef\Model\Entity\StockItem[] $stock_items
 * @property \Chef\Model\Entity\TransferItem[] $transfer_items
 * @property \Chef\Model\Entity\OptionValue[] $option_values
 */
class Variant extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true
    ];
}
