<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OptionValues Model
 *
 * @property \Chef\Model\Table\OptionTypesTable|\Cake\ORM\Association\BelongsTo $OptionTypes
 * @property \Chef\Model\Table\SpreeVariantPropertyRuleConditionsTable|\Cake\ORM\Association\HasMany $SpreeVariantPropertyRuleConditions
 * @property \Chef\Model\Table\VariantsTable|\Cake\ORM\Association\BelongsToMany $Variants
 *
 * @method \Chef\Model\Entity\OptionValue get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\OptionValue newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\OptionValue[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionValue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\OptionValue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionValue[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionValue findOrCreate($search, callable $callback = null, $options = [])
 */
class OptionValuesTable extends Table
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

        $this->setTable('option_values');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('OptionTypes', [
            'foreignKey' => 'option_type_id',
            'className' => 'Chef.OptionTypes'
        ]);
        $this->hasMany('SpreeVariantPropertyRuleConditions', [
            'foreignKey' => 'option_value_id',
            'className' => 'Chef.SpreeVariantPropertyRuleConditions'
        ]);
        $this->belongsToMany('Variants', [
            'foreignKey' => 'option_value_id',
            'targetForeignKey' => 'variant_id',
            'joinTable' => 'option_values_variants',
            'className' => 'Chef.Variants'
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
            ->integer('position')
            ->allowEmpty('position');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('presentation')
            ->allowEmpty('presentation');

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
        $rules->add($rules->existsIn(['option_type_id'], 'OptionTypes'));

        return $rules;
    }
}
