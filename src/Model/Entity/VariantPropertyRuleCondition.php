<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * VariantPropertyRuleCondition Entity
 *
 * @property int $id
 * @property int $option_value_id
 * @property int $variant_property_rule_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \Chef\Model\Entity\OptionValue $option_value
 * @property \Chef\Model\Entity\VariantPropertyRule $variant_property_rule
 */
class VariantPropertyRuleCondition extends Entity
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
        'option_value_id' => true,
        'variant_property_rule_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'option_value' => true,
        'variant_property_rule' => true
    ];
}
