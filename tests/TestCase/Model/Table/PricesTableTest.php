<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\PricesTable;

/**
 * Chef\Model\Table\PricesTable Test Case
 */
class PricesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\PricesTable
     */
    public $Prices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.prices',
        'plugin.chef.variants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prices') ? [] : ['className' => PricesTable::class];
        $this->Prices = TableRegistry::get('Prices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prices);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    public function testCreatedAt()
    {
        $this->markTestIncomplete();
    }

    public function testUpdatedAt()
    {
        $this->markTestIncomplete();
    }
}
