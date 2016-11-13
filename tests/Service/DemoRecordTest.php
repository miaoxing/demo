<?php

namespace MiaoxingTest\Demo\Service;

use Miaoxing\Plugin\Test\BaseTestCase;

/**
 * 演示服务
 */
class DemoRecordTest extends BaseTestCase
{
    /**
     * 获取名称
     */
    public function testGetName()
    {
        $this->assertSame('demo', wei()->demoRecord->getName());
    }
}
