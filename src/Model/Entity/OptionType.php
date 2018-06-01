<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * OptionType Entity
 *
 * @property int $id
 * @property string $name
 * @property string $presentation
 * @property int $position
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \Chef\Model\Entity\OptionValue[] $option_values
 * @property \Chef\Model\Entity\ProductOptionType[] $product_option_types
 * @property \Chef\Model\Entity\OptionTypePrototype[] $option_type_prototypes
 */
class OptionType extends Entity
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
        'position' => true,
        'created_at' => true,
        'updated_at' => true,
        'option_values' => true,
        'product_option_types' => true,
        'option_type_prototypes' => true
    ];
}
