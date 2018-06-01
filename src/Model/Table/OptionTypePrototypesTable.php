<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OptionTypePrototypes Model
 *
 * @property \Chef\Model\Table\PrototypesTable|\Cake\ORM\Association\BelongsTo $Prototypes
 * @property \Chef\Model\Table\OptionTypesTable|\Cake\ORM\Association\BelongsTo $OptionTypes
 *
 * @method \Chef\Model\Entity\OptionTypePrototype get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\OptionTypePrototype newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\OptionTypePrototype[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionTypePrototype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\OptionTypePrototype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionTypePrototype[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\OptionTypePrototype findOrCreate($search, callable $callback = null, $options = [])
 */
class OptionTypePrototypesTable extends Table
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

        $this->setTable('option_type_prototypes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Prototypes', [
            'foreignKey' => 'prototype_id',
            'className' => 'Chef.Prototypes'
        ]);
        $this->belongsTo('OptionTypes', [
            'foreignKey' => 'option_type_id',
            'className' => 'Chef.OptionTypes'
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
        $rules->add($rules->existsIn(['prototype_id'], 'Prototypes'));
        $rules->add($rules->existsIn(['option_type_id'], 'OptionTypes'));

        return $rules;
    }
}
