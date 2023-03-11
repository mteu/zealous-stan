<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
    'message' => '#^Class Shrug\\\\ZealousStan\\\\Rules\\\\RequireCopyrightInformationInFirstCommentRule implements generic interface PHPStan\\\\Rules\\\\Rule but does not specify its types\\: TNodeType$#',
    'count' => 1,
    'path' => __DIR__ . '/src/Rules/RequireCopyrightInformationInFirstCommentRule.php',
];
$ignoreErrors[] = [
    'message' => '#^Constructor in Shrug\\\\ZealousStan\\\\Rules\\\\RequireCopyrightInformationInFirstCommentRule has parameter \\$copyrightIdentifier with default value\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/Rules/RequireCopyrightInformationInFirstCommentRule.php',
];
$ignoreErrors[] = [
    'message' => '#^Class Shrug\\\\ZealousStan\\\\Rule\\\\RequireLicenseInformationInFirstCommentRule implements generic interface PHPStan\\\\Rules\\\\Rule but does not specify its types\\: TNodeType$#',
    'count' => 1,
    'path' => __DIR__ . '/src/Rules/RequireLicenseInformationInFirstCommentRule.php',
];
$ignoreErrors[] = [
    'message' => '#^Constructor in Shrug\\\\ZealousStan\\\\Rule\\\\RequireLicenseInformationInFirstCommentRule has parameter \\$requiredLicenseIdentifier with default value\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/Rules/RequireLicenseInformationInFirstCommentRule.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
