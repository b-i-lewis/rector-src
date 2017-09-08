<?php declare(strict_types=1);

namespace Rector\DeprecationExtractor\Tests\Tranformer;

use Rector\DeprecationExtractor\Tranformer\ArgumentToDeprecationTransformer;
use Rector\Tests\AbstractContainerAwareTestCase;

final class ArgumentToDeprecationTransformerTest extends AbstractContainerAwareTestCase
{
    /**
     * @var ArgumentToDeprecationTransformer
     */
    private $argumentToDeprecationTransformer;

    protected function setUp(): void
    {
        $this->argumentToDeprecationTransformer = $this->container->get(ArgumentToDeprecationTransformer::class);
    }

    public function test(): void
    {
        // @todo
        $this->assertSame(1, 2);
    }
}
