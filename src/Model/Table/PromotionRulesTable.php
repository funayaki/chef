<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PromotionRules Model
 *
 * @property \Chef\Model\Table\PromotionsTable|\Cake\ORM\Association\BelongsTo $Promotions
 * @property \Chef\Model\Table\ProductGroupsTable|\Cake\ORM\Association\BelongsTo $ProductGroups
 * @property \Chef\Model\Table\SpreeProductPromotionRulesTable|\Cake\ORM\Association\HasMany $SpreeProductPromotionRules
 * @property \Chef\Model\Table\SpreePromotionRuleTaxonsTable|\Cake\ORM\Association\HasMany $SpreePromotionRuleTaxons
 * @property \Chef\Model\Table\SpreePromotionRulesUsersTable|\Cake\ORM\Association\HasMany $SpreePromotionRulesUsers
 *
 * @method \Chef\Model\Entity\PromotionRule get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\PromotionRule newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\PromotionRule[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\PromotionRule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\PromotionRule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\PromotionRule[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\PromotionRule findOrCreate($search, callable $callback = null, $options = [])
 */
class PromotionRulesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('promotion_rules');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Promotions', [
            'foreignKey' => 'promotion_id',
            'className' => 'Chef.Promotions'
        ]);
        $this->belongsTo('ProductGroups', [
            'foreignKey' => 'product_group_id',
            'className' => 'Chef.ProductGroups'
        ]);
        $this->hasMany('SpreeProductPromotionRules', [
            'foreignKey' => 'promotion_rule_id',
            'className' => 'Chef.SpreeProductPromotionRules'
        ]);
        $this->hasMany('SpreePromotionRuleTaxons', [
            'foreignKey' => 'promotion_rule_id',
            'className' => 'Chef.SpreePromotionRuleTaxons'
        ]);
        $this->hasMany('SpreePromotionRulesUsers', [
            'foreignKey' => 'promotion_rule_id',
            'className' => 'Chef.SpreePromotionRulesUsers'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('type')
            ->allowEmpty('type');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->scalar('code')
            ->allowEmpty('code');

        $validator
            ->scalar('preferences')
            ->allowEmpty('preferences');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['promotion_id'], 'Promotions'));
        $rules->add($rules->existsIn(['product_group_id'], 'ProductGroups'));

        return $rules;
    }
}
