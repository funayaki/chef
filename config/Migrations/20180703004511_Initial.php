<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('option_type_prototypes')
            ->addColumn('prototype_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('option_type_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('option_types')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('presentation', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('position', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'position',
                ]
            )
            ->create();

        $this->table('option_values')
            ->addColumn('position', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('presentation', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('option_type_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'position',
                ]
            )
            ->addIndex(
                [
                    'option_type_id',
                ]
            )
            ->create();

        $this->table('prices')
            ->addColumn('variant_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('amount', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('currency', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('deleted_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('country_iso', 'string', [
                'default' => null,
                'limit' => 2,
                'null' => true,
            ])
            ->addIndex(
                [
                    'variant_id',
                    'currency',
                ]
            )
            ->addIndex(
                [
                    'country_iso',
                ]
            )
            ->create();

        $this->table('product_option_types')
            ->addColumn('position', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('option_type_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'position',
                ]
            )
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->addIndex(
                [
                    'option_type_id',
                ]
            )
            ->create();

        $this->table('product_promotion_rules')
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('promotion_rule_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->addIndex(
                [
                    'promotion_rule_id',
                ]
            )
            ->create();

        $this->table('product_properties')
            ->addColumn('value', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('key', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('position', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => true,
            ])
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->addIndex(
                [
                    'key',
                ]
            )
            ->addIndex(
                [
                    'position',
                ]
            )
            ->create();

        $this->table('products')
            ->addColumn('name', 'string', [
                'default' => '',
                'limit' => 191,
                'null' => false,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('available_on', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('deleted_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('meta_description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('meta_keywords', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('tax_category_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('shipping_category_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('promotionable', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('meta_title', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addIndex(
                [
                    'slug',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'name',
                ]
            )
            ->addIndex(
                [
                    'available_on',
                ]
            )
            ->addIndex(
                [
                    'deleted_at',
                ]
            )
            ->create();

        $this->table('promotion_rules')
            ->addColumn('promotion_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('product_group_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('code', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('preferences', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'promotion_id',
                ]
            )
            ->addIndex(
                [
                    'product_group_id',
                ]
            )
            ->create();

        $this->table('properties')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('presentation', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => false,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('prototypes')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('variant_property_rule_conditions')
            ->addColumn('option_value_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('variant_property_rule_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'option_value_id',
                    'variant_property_rule_id',
                ]
            )
            ->create();

        $this->table('variants')
            ->addColumn('sku', 'string', [
                'default' => '',
                'limit' => 191,
                'null' => false,
            ])
            ->addColumn('weight', 'decimal', [
                'default' => '0.00',
                'null' => true,
                'precision' => 8,
                'scale' => 2,
            ])
            ->addColumn('height', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 8,
                'scale' => 2,
            ])
            ->addColumn('width', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 8,
                'scale' => 2,
            ])
            ->addColumn('depth', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 8,
                'scale' => 2,
            ])
            ->addColumn('deleted_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_master', 'boolean', [
                'default' => false,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('cost_price', 'decimal', [
                'default' => null,
                'null' => true,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('position', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('cost_currency', 'string', [
                'default' => null,
                'limit' => 191,
                'null' => true,
            ])
            ->addColumn('track_inventory', 'boolean', [
                'default' => true,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tax_category_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('updated_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_at', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'sku',
                ]
            )
            ->addIndex(
                [
                    'product_id',
                ]
            )
            ->addIndex(
                [
                    'position',
                ]
            )
            ->addIndex(
                [
                    'track_inventory',
                ]
            )
            ->addIndex(
                [
                    'tax_category_id',
                ]
            )
            ->create();

        $this->table('product_promotion_rules')
            ->addForeignKey(
                'product_id',
                'products',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'promotion_rule_id',
                'promotion_rules',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('product_promotion_rules')
            ->dropForeignKey(
                'product_id'
            )
            ->dropForeignKey(
                'promotion_rule_id'
            );

        $this->dropTable('option_type_prototypes');
        $this->dropTable('option_types');
        $this->dropTable('option_values');
        $this->dropTable('prices');
        $this->dropTable('product_option_types');
        $this->dropTable('product_promotion_rules');
        $this->dropTable('product_properties');
        $this->dropTable('products');
        $this->dropTable('promotion_rules');
        $this->dropTable('properties');
        $this->dropTable('prototypes');
        $this->dropTable('variant_property_rule_conditions');
        $this->dropTable('variants');
    }
}
