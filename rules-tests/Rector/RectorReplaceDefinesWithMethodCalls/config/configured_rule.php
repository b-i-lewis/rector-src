<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(\Rector\RectorReplaceDefinesWithMethodCalls::class, [
        'className' => 'Tests\App',
        'methodName' => 'getDefine',
    ]);
};
