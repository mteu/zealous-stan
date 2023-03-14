<?php

declare(strict_types=1);

/*
 * This file is part of the PHPStan extension "shrug/zealous-stan".
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

namespace Shrug\ZealousStan\Rules;

use PhpParser\Node;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;

/**
 * @implements Rule<Node\Stmt>
 */
final class RequireCopyrightInformationInFirstCommentRule implements Rule
{
    public function __construct(
        private readonly string $copyrightIdentifier = '',
    ) {
    }

    /**
     * @return class-string<Node\Stmt>
     */
    public function getNodeType(): string
    {
        return Node\Stmt\Namespace_::class;
    }

    public function processNode(Node $node, Scope $scope): array
    {
        $comments = $node->getComments();
        $firstComment = false !== reset($comments) ? reset($comments) : null;

        if (null === $firstComment) {
            return [
                'File is missing a PHPDoc comment block that could contain a copyright notice.',
            ];
        }

        if (false === strpos($firstComment->getText(), $this->copyrightIdentifier)) {
            return [
                'File is missing the configured copyright notice in the PHPDoc comment block.',
        ];
        }

        return [];
    }
}
