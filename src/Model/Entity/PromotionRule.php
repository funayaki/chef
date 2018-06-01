<?php
namespace Chef\Model\Entity;

use Cake\ORM\Entity;

/**
 * PromotionRule Entity
 *
 * @property int $id
 * @property int $promotion_id
 * @property int $product_group_id
 * @property string $type
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string $code
 * @property string $preferences
 *
 * @property \Chef\Model\Entity\Promotion $promotion
 * @property \Chef\Model\Entity\ProductGroup $product_group
 * @property \Chef\Model\Entity\SpreeProductPromotionRule[] $spree_product_promotion_rules
 * @property \Chef\Model\Entity\SpreePromotionRuleTaxon[] $spree_promotion_rule_taxons
 * @property \Chef\Model\Entity\SpreePromotionRulesUser[] $spree_promotion_rules_users
 */
class PromotionRule extends Entity
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
        'promotion_id' => true,
        'product_group_id' => true,
        'type' => true,
        'created_at' => true,
        'updated_at' => true,
        'code' => true,
        'preferences' => true,
        'promotion' => true,
        'product_group' => true,
        'spree_product_promotion_rules' => true,
        'spree_promotion_rule_taxons' => true,
        'spree_promotion_rules_users' => true
    ];
}
