<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $id
 * @property string $name
 * @property string $presentation
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \Chef\Model\Entity\ProductProperty[] $product_properties
 * @property \Chef\Model\Entity\SpreePropertyPrototype[] $spree_property_prototypes
 * @property \Chef\Model\Entity\SpreeVariantPropertyRuleValue[] $spree_variant_property_rule_values
 */
class Property extends Entity
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
        'name' => true,
        'presentation' => true,
        'created_at' => true,
        'updated_at' => true,
        'product_properties' => true,
        'spree_property_prototypes' => true,
        'spree_variant_property_rule_values' => true
    ];
}
