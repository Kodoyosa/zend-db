<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Db\Adapter\Driver\Pdo\TestAsset;

class SqliteMemoryPdo extends \Pdo
{
    protected $mockStatement;

    public function __construct()
    {
        parent::__construct('sqlite::memory:');
    }
}
