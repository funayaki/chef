<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\OptionTypesTable;

/**
 * Chef\Model\Table\OptionTypesTable Test Case
 */
class OptionTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\OptionTypesTable
     */
    public $OptionTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.option_types',
        'plugin.chef.option_values',
        'plugin.chef.product_option_types',
        'plugin.chef.option_type_prototypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OptionTypes') ? [] : ['className' => OptionTypesTable::class];
        $this->OptionTypes = TableRegistry::get('OptionTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OptionTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
