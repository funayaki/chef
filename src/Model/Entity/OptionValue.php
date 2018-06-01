<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * OptionValue Entity
 *
 * @property int $id
 * @property int $position
 * @property string $name
 * @property string $presentation
 * @property int $option_type_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \Chef\Model\Entity\OptionType $option_type
 * @property \Chef\Model\Entity\SpreeVariantPropertyRuleCondition[] $spree_variant_property_rule_conditions
 * @property \Chef\Model\Entity\Variant[] $variants
 */
class OptionValue extends Entity
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
        'position' => true,
        'name' => true,
        'presentation' => true,
        'option_type_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'option_type' => true,
        'spree_variant_property_rule_conditions' => true,
        'variants' => true
    ];
}
