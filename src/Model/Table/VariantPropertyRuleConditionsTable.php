<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VariantPropertyRuleConditions Model
 *
 * @property \Chef\Model\Table\OptionValuesTable|\Cake\ORM\Association\BelongsTo $OptionValues
 * @property \Chef\Model\Table\VariantPropertyRulesTable|\Cake\ORM\Association\BelongsTo $VariantPropertyRules
 *
 * @method \Chef\Model\Entity\VariantPropertyRuleCondition get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\VariantPropertyRuleCondition newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\VariantPropertyRuleCondition[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\VariantPropertyRuleCondition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\VariantPropertyRuleCondition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\VariantPropertyRuleCondition[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\VariantPropertyRuleCondition findOrCreate($search, callable $callback = null, $options = [])
 */
class VariantPropertyRuleConditionsTable extends Table
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

        $this->setTable('variant_property_rule_conditions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('OptionValues', [
            'foreignKey' => 'option_value_id',
            'className' => 'Chef.OptionValues'
        ]);
        $this->belongsTo('VariantPropertyRules', [
            'foreignKey' => 'variant_property_rule_id',
            'className' => 'Chef.VariantPropertyRules'
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
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->requirePresence('updated_at', 'create')
            ->notEmpty('updated_at');

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
        $rules->add($rules->existsIn(['option_value_id'], 'OptionValues'));
        $rules->add($rules->existsIn(['variant_property_rule_id'], 'VariantPropertyRules'));

        return $rules;
    }
}
