<?php
namespace Chef\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Chef\Model\Table\ProductsTable;

/**
 * Chef\Model\Table\ProductsTable Test Case
 */
class ProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Chef\Model\Table\ProductsTable
     */
    public $Products;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.chef.products',
// TODO
//        'plugin.chef.tax_categories',
//        'plugin.chef.shipping_categories',
//        'plugin.chef.product_properties',
//        'plugin.chef.product_option_types',
//        'plugin.chef.product_promotion_rules',
//        'plugin.chef.products_taxons',
//        'plugin.chef.variant_property_rules',
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
        $config = TableRegistry::exists('Products') ? [] : ['className' => ProductsTable::class];
        $this->Products = TableRegistry::get('Products', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Products);

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

    public function testHasOneMaster()
    {
        $tote = $this->Products
            ->get(1, [
                'contain' => ['Master']
            ]);
        $this->assertEquals('ROR-00011', $tote->master->sku);
        $this->markTestIncomplete('Test variants marked as deleted');
    }

    public function testHasManyVariants()
    {
        $jersey = $this->Products
            ->get(3, [
                'contain' => ['Variants']
            ]);
        $this->assertEquals(10, count($jersey->variants));
        $this->assertInstanceOf('Chef\Model\Entity\Variant', $jersey->variants[0]);
        $this->assertEquals('ROR-00001', $jersey->variants[0]->sku);
        $this->markTestIncomplete('Test variants marked as deleted');
    }

    public function testHasManyVariantsIncludingMaster()
    {
        $jersey = $this->Products
            ->get(3, [
                'contain' => ['VariantsIncludingMaster']
            ]);
        $this->assertEquals(11, count($jersey->variants_including_master));
        $this->markTestIncomplete('Test variants marked as deleted');
    }

    public function testDeleteVariants()
    {
        $tote = $this->Products->get(1);
        $this->Products->delete($tote);
        $exists = $this->Products->VariantsIncludingDeleted
            ->exists(['sku LIKE' => 'ROR-00011']);
        $this->assertFalse($exists);
    }

    public function testCreatedAt()
    {
        $this->markTestIncomplete();
    }

    public function testUpdatedAt()
    {
        $this->markTestIncomplete();
    }

    public function testFindAvailable()
    {
        $this->markTestIncomplete();
    }
}
