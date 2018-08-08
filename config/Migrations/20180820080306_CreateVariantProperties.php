<?php
use Migrations\AbstractMigration;

class CreateVariantProperties extends AbstractMigration
{
    public function up()
    {

        $this->table('variant_properties')
            ->addColumn('value', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => true,
            ])
            ->addColumn('variant_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('key', 'string', [
                'default' => null,
                'limit' => 150,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('position', 'integer', [
                'default' => '0',
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'variant_id',
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
    }

    public function down()
    {
        $this->dropTable('variant_properties');
    }
}
