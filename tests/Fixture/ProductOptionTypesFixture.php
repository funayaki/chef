<?php
namespace Chef\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductOptionTypesFixture
 *
 */
class ProductOptionTypesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'position' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'option_type_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'index_spree_product_option_types_on_position' => ['type' => 'index', 'columns' => ['position'], 'length' => []],
            'index_spree_product_option_types_on_product_id' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'index_spree_product_option_types_on_option_type_id' => ['type' => 'index', 'columns' => ['option_type_id'], 'length' => []],
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
                'position' => 1,
                'product_id' => 1,
                'option_type_id' => 1,
                'created_at' => 1528073537,
                'updated_at' => 1528073537
            ],
        ];
        parent::init();
    }
}
