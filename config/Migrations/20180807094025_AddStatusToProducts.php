<?php
use Migrations\AbstractMigration;

class AddStatusToProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('status', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
            'after' => 'shipping_category_id',
        ]);
        $table->update();
    }
}
