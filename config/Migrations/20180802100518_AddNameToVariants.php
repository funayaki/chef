<?php
use Migrations\AbstractMigration;

class AddNameToVariants extends AbstractMigration
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
        $table = $this->table('variants');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 191,
            'null' => true,
            'after' => 'sku',
        ]);
        $table->update();
    }
}
