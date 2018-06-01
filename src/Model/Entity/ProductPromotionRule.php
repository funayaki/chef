<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductPromotionRule Entity
 *
 * @property int $id
 * @property int $product_id
 * @property int $promotion_rule_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 *
 * @property \Chef\Model\Entity\Product $product
 * @property \Chef\Model\Entity\PromotionRule $promotion_rule
 */
class ProductPromotionRule extends Entity
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
        'product_id' => true,
        'promotion_rule_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'product' => true,
        'promotion_rule' => true
    ];
}
