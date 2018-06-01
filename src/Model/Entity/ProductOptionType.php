<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductOptionType Entity
 *
 * @property int $id
 * @property int $position
 * @property int $product_id
 * @property int $option_type_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \Chef\Model\Entity\Product $product
 * @property \Chef\Model\Entity\OptionType $option_type
 */
class ProductOptionType extends Entity
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
        'product_id' => true,
        'option_type_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'product' => true,
        'option_type' => true
    ];
}
