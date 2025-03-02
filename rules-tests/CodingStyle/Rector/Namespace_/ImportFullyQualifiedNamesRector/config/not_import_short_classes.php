<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\Configuration\Option;
use Rector\Renaming\Rector\Name\RenameClassRector;

return static function (RectorConfig $rectorConfig): void {
    $parameters = $rectorConfig->parameters();
    $rectorConfig->importNames();
    $parameters->set(Option::IMPORT_SHORT_CLASSES, false);
    $rectorConfig->rule(RenameClassRector::class);
};
