<?php
namespace Chef\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prototypes Model
 *
 * @property \Chef\Model\Table\OptionTypePrototypesTable|\Cake\ORM\Association\HasMany $OptionTypePrototypes
 * @property \Chef\Model\Table\SpreePropertyPrototypesTable|\Cake\ORM\Association\HasMany $SpreePropertyPrototypes
 * @property \Chef\Model\Table\SpreePrototypeTaxonsTable|\Cake\ORM\Association\HasMany $SpreePrototypeTaxons
 *
 * @method \Chef\Model\Entity\Prototype get($primaryKey, $options = [])
 * @method \Chef\Model\Entity\Prototype newEntity($data = null, array $options = [])
 * @method \Chef\Model\Entity\Prototype[] newEntities(array $data, array $options = [])
 * @method \Chef\Model\Entity\Prototype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Chef\Model\Entity\Prototype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Chef\Model\Entity\Prototype[] patchEntities($entities, array $data, array $options = [])
 * @method \Chef\Model\Entity\Prototype findOrCreate($search, callable $callback = null, $options = [])
 */
class PrototypesTable extends Table
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

        $this->setTable('prototypes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('OptionTypePrototypes', [
            'foreignKey' => 'prototype_id',
            'className' => 'Chef.OptionTypePrototypes'
        ]);
        $this->hasMany('SpreePropertyPrototypes', [
            'foreignKey' => 'prototype_id',
            'className' => 'Chef.SpreePropertyPrototypes'
        ]);
        $this->hasMany('SpreePrototypeTaxons', [
            'foreignKey' => 'prototype_id',
            'className' => 'Chef.SpreePrototypeTaxons'
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
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->dateTime('created_at')
            ->allowEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmpty('updated_at');

        return $validator;
    }
}
