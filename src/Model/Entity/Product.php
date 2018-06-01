<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Cake\I18n\FrozenTime $available_on
 * @property \Cake\I18n\FrozenTime $deleted_at
 * @property string $slug
 * @property string $meta_description
 * @property string $meta_keywords
 * @property int $tax_category_id
 * @property int $shipping_category_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property bool $promotionable
 * @property string $meta_title
 *
 * @property \Chef\Model\Entity\TaxCategory $tax_category
 * @property \Chef\Model\Entity\ShippingCategory $shipping_category
 * @property \Chef\Model\Entity\ProductProperty[] $product_properties
 * @property \Chef\Model\Entity\ProductOptionType[] $spree_product_option_types
 * @property \Chef\Model\Entity\ProductPromotionRule[] $spree_product_promotion_rules
 * @property \Chef\Model\Entity\VariantPropertyRule[] $spree_variant_property_rules
 * @property \Chef\Model\Entity\Variant[] $variants
 */
class Product extends Entity
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
