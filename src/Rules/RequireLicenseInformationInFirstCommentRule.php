<?php

declare(strict_types=1);

/*
 * This file is part of the Symfony project "shrug/zealous-stan".
 *
 * Copyright (C) 2023 Martin Adler <mteu@mailbox.org>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

namespace Shrug\ZealousStan\Rule;

use PhpParser\Node;
use PhpParser\Node\Stmt\Namespace_;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;

final class RequireLicenseInformationInFirstCommentRule implements Rule
{
    /**
     * @var string
     */
    private $requiredLicenseIdentifier = '';

    private const GPL20 = '
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
';

    private const GPL30 = '
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
';

    private const SUPPORTED_LICENSES = [
        'GPL-2.0' => self::GPL20,
        'GPL-3.0' => self::GPL30,
    ];

    public function __construct(
        string $requiredLicenseIdentifier = '',
    ) {
        $this->requiredLicenseIdentifier = $requiredLicenseIdentifier;
    }

    public function getNodeType(): string
    {
        return Namespace_::class;
    }

    public function processNode(Node $node, Scope $scope): array
    {
        $comments = $node->getComments();
        $firstComment = false !== reset($comments) ? reset($comments) : null;
        $licenseText = self::SUPPORTED_LICENSES[$this->requiredLicenseIdentifier] ?? $this->requiredLicenseIdentifier;

        if ('' === $licenseText) {
            return [];
        }

        if (null === $firstComment) {
            return [
                'File is missing a PHPDoc comment block that could contain license information.',
            ];
        }

        if (false === strpos($firstComment->getText(), $licenseText)) {
            return [
                sprintf(
                    'File does not include a \'%s\' license.',
                    $this->requiredLicenseIdentifier,
                ),
            ];
        }

        return [];
    }
}
