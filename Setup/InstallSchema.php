<?php
namespace Magenest\Cybergame\Setup;
use Magento\Framework\Setup\SetupInterface;
class InstallSchema	implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(
        \Magento\Framework\Setup\SchemaSetupInterface $setup,
        \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        $this->createGamerAccountList($installer);
        $this->createRoomExtraOption($installer);
        $installer->endSetup();

    }

    private function createGamerAccountList(SetupInterface $installer){
        $table = $installer->getConnection()->newTable($installer->getTable('gamer_account_list')

        )->addColumn(
            'id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            11,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
            'ID'

        )->addColumn(
            'product_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            11,
            ['nullable' => false,],
            'Product ID'

        )->addColumn(
            'account_name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false,],
            'Account Name'

        )->addColumn(
            'password',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false,],
            'Password'

        )->addColumn(
            'hour',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => false,],
            'Hour'

        )->addColumn('created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [
                'nullable' => false,
                'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT
            ],
            'Created at'

        )->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [
                'nullable' => false,
                'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE
            ],
            'Updated at'

        )->setComment(
            'Game Account List Table'
        );

        $installer->getConnection()->createTable($table);
    }

    private function createRoomExtraOption(SetupInterface $installer){
        $table = $installer->getConnection()->newTable($installer->getTable('room_extra_option')

        )->addColumn(
            'id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            11,
            [
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary' => true
            ],
            'ID'

        )->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Name'

        )->addColumn(
            'product_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            11,
            ['nullable' => false,],
            'Product ID'

        )->addColumn(
            'number_pc',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => false,],
            'Number PC'

        )->addColumn(
            'address',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Address'

        )->addColumn(
            'food_price',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            ['nullable' => false,],
            'Food Price'

        )->addColumn(
            'drink_price',
            \Magento\Framework\DB\Ddl\Table::TYPE_FLOAT,
            null,
            ['nullable' => false,],
            'Drink Price'

        )->addColumn('created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [
                'nullable' => false,
                'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT
            ],
            'Created at'

        )->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [
                'nullable' => false,
                'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE
            ],
            'Updated at'

        )->setComment(
            'Room Extra Option Table'
        );

        $installer->getConnection()->createTable($table);
    }



}