<?php

namespace AvtoDev\StaticReferencesData\Tests\ReferencesData;

use Exception;
use AvtoDev\StaticReferencesData\Tests\AbstractTestCase;
use AvtoDev\StaticReferencesData\ReferencesData\StaticReference;
use AvtoDev\StaticReferencesData\ReferencesData\StaticReferenceInterface;

/**
 * Class StaticReferenceTest.
 */
class StaticReferenceTest extends AbstractTestCase
{
    /**
     * Test class implementations.
     *
     * @return void
     */
    public function testInstancesOf()
    {
        $this->assertInstanceOf(StaticReferenceInterface::class, new StaticReference(__FILE__));
    }

    /**
     * Test throwing exception on passing non-exists file into constructor.
     *
     * @return void
     */
    public function testThrowExceptionOnPassedNonExistsFile()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~is not readable~i');

        new StaticReference(null);
    }

    /**
     * Test throwing exception on passing invalid json-file file into constructor.
     *
     * @return void
     */
    public function testThrowExceptionOnPassedNonValidJson()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessageRegExp('~Cannot parse json file~i');

        $instance = new StaticReference(__DIR__ . '/../Stubs/wrong_json.json');
        $instance->getContent();
    }

    /**
     * Test getters methods.
     *
     * @return void
     */
    public function testGetters()
    {
        $instance = new StaticReference(
            $path = $this->getRootDirPath() . '/data/auto_categories/auto_categories.json'
        );

        $this->assertNotEmpty($hash = $instance->getHash());
        $this->assertTrue(mb_strlen($hash) >= 8);
        $this->assertRegExp('~[a-f0-9]~', $hash);
        $this->assertEquals($hash, $instance->getHash());

        $this->assertEquals($path, $instance->getFilePath());

        $this->assertTrue(is_array($content = $instance->getContent()));
        $this->assertNotEmpty($content);
        $this->assertEquals($content, $instance->getContent());
    }
}
