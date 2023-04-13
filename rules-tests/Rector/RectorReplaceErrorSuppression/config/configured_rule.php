<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(\Rector\RectorReplaceErrorSuppression::class, [
        'className' => 'App\Foo',
        'methodName' => 'suppressedFunction',
    ]);
};
