<?php
namespace Chef\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VariantsFixture
 *
 */
class VariantsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'sku' => ['type' => 'string', 'length' => null, 'default' => '', 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'weight' => ['type' => 'decimal', 'length' => 8, 'default' => '0.0', 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'height' => ['type' => 'decimal', 'length' => 8, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'width' => ['type' => 'decimal', 'length' => 8, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'depth' => ['type' => 'decimal', 'length' => 8, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'deleted_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'is_master' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        'product_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cost_price' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'position' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cost_currency' => ['type' => 'string', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'track_inventory' => ['type' => 'boolean', 'length' => null, 'default' => 1, 'null' => true, 'comment' => null, 'precision' => null],
        'tax_category_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_indexes' => [
            'index_spree_variants_on_sku' => ['type' => 'index', 'columns' => ['sku'], 'length' => []],
            'index_spree_variants_on_product_id' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'index_spree_variants_on_position' => ['type' => 'index', 'columns' => ['position'], 'length' => []],
            'index_spree_variants_on_track_inventory' => ['type' => 'index', 'columns' => ['track_inventory'], 'length' => []],
            'index_spree_variants_on_tax_category_id' => ['type' => 'index', 'columns' => ['tax_category_id'], 'length' => []],
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
                'id' => 18,
                'sku' => 'ROR-00009',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 19,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:11',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 19,
                'sku' => 'ROR-00010',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 21,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:14',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 3,
                'sku' => 'ROR-001',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:18',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 4,
                'sku' => 'ROR-00013',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 4,
                'cost_price' => 17.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:18',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 8,
                'sku' => 'ROR-00014',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 8,
                'cost_price' => 11.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:20',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 5,
                'sku' => 'ROR-00015',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 5,
                'cost_price' => 17.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:21',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 9,
                'sku' => 'ROR-00016',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 9,
                'cost_price' => 15.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:22',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 7,
                'sku' => 'APC-00001',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 7,
                'cost_price' => 17.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:23',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 6,
                'sku' => 'RUB-00001',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 6,
                'cost_price' => 17.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:24',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 1,
                'sku' => 'ROR-00011',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 1,
                'cost_price' => 17.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:25',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 2,
                'sku' => 'ROR-00012',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => true,
                'product_id' => 2,
                'cost_price' => 21.0,
                'position' => 1,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:26',
                'created_at' => '2018-05-30 06:48:58'
            ],
            [
                'id' => 10,
                'sku' => 'ROR-00001',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 3,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:02',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 11,
                'sku' => 'ROR-00002',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 5,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:03',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 12,
                'sku' => 'ROR-00003',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 7,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:04',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 13,
                'sku' => 'ROR-00004',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 9,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:05',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 14,
                'sku' => 'ROR-00005',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 11,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:06',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 15,
                'sku' => 'ROR-00006',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 13,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:08',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 16,
                'sku' => 'ROR-00007',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 15,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:09',
                'created_at' => '2018-05-30 06:49:00'
            ],
            [
                'id' => 17,
                'sku' => 'ROR-00008',
                'weight' => 0.0,
                'height' => null,
                'width' => null,
                'depth' => null,
                'deleted_at' => null,
                'is_master' => false,
                'product_id' => 3,
                'cost_price' => 17.0,
                'position' => 17,
                'cost_currency' => 'USD',
                'track_inventory' => true,
                'tax_category_id' => null,
                'updated_at' => '2018-05-30 06:49:10',
                'created_at' => '2018-05-30 06:49:00'
            ],
        ];
        parent::init();
    }
}
