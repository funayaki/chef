<?php
namespace Chef\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VariantPropertyRuleConditionsFixture
 *
 */
class VariantPropertyRuleConditionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'option_value_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'variant_property_rule_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'index_spree_variant_prop_rule_conditions_on_rule_and_optval' => ['type' => 'index', 'columns' => ['option_value_id', 'variant_property_rule_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'option_value_id' => 1,
                'variant_property_rule_id' => 1,
                'created_at' => 1528074544,
                'updated_at' => 1528074544
            ],
        ];
        parent::init();
    }
}
