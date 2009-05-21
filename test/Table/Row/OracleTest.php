<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2008 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

require_once 'Zend/Db/Table/Row/TestCommon.php';

PHPUnit_Util_Filter::addFileToFilter(__FILE__);

class Zend_Db_Table_Row_OracleTest extends Zend_Db_Table_Row_TestCommon
{

    public function testTableRowSaveInsert()
    {
        $this->markTestSkipped($this->getDriver() . ' does not support auto-increment keys.');
    }

    /**
     * ZF-4330: Oracle need sequence
     */
    protected function _testTableRowSetReadOnlyGetTableBugs()
    {
        return $this->_getTable('My_ZendDbTable_TableBugs',
                                array(Zend_Db_Table_Abstract::SEQUENCE => 'zfbugs_seq'));
    }

    public function getDriver()
    {
        return 'Oracle';
    }

}
