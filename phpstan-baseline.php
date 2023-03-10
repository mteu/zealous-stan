<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
    'message' => '#^Class Shrug\\\\ZealousStan\\\\Rules\\\\RequireCopyrightNoticeInFirstCommentRule implements generic interface PHPStan\\\\Rules\\\\Rule but does not specify its types\\: TNodeType$#',
    'count' => 1,
    'path' => __DIR__ . '/src/Rules/RequireCopyrightNoticeInFirstCommentRule.php',
];
$ignoreErrors[] = [
    'message' => '#^Constructor in Shrug\\\\ZealousStan\\\\Rules\\\\RequireCopyrightNoticeInFirstCommentRule has parameter \\$copyrightIdentifier with default value\\.$#',
    'count' => 1,
    'path' => __DIR__ . '/src/Rules/RequireCopyrightNoticeInFirstCommentRule.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
