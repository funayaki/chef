<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductPromotionRules Model
 *
 * @property \Chef\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \Chef\Model\Table\PromotionRulesTable|\Cake\ORM\Association\BelongsTo $PromotionRules
 *
 * @method \Chef\Model\Entity\ProductPromotionRule get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\ProductPromotionRule newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\ProductPromotionRule[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductPromotionRule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\ProductPromotionRule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductPromotionRule[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\ProductPromotionRule findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductPromotionRulesTable extends Table
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

        $this->setTable('product_promotion_rules');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'className' => 'Chef.Products'
        ]);
        $this->belongsTo('PromotionRules', [
            'foreignKey' => 'promotion_rule_id',
            'className' => 'Chef.PromotionRules'
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
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

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
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['promotion_rule_id'], 'PromotionRules'));

        return $rules;
    }
}
