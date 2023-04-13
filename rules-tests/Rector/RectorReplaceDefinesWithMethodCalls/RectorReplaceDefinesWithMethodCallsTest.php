<?php

declare(strict_types=1);

namespace Rector\Tests\Rector\RectorReplaceDefinesWithMethodCalls;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class RectorReplaceDefinesWithMethodCallsTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $fileInfo): void
    {
        $this->doTestFile($fileInfo);
    }

    /**
     * @return Iterator<string>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configured_rule.php';
    }
}
