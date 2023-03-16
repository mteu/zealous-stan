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

return [
    'parameters' => [
        'level' => 'max',
        'paths' => [
            'src',
        ],
        'ignoreErrors' => [
            '#^Constructor in [a-zA-Z0-9-_\\\\]+ has parameter [\\$a-zA-Z0-9_-]+ with default value.$#',
        ],
        'shrug' => [
            'copyrightIdentifier' => 'Copyright (C) 20',
            'requiredLicenseIdentifier' => 'GPL-3.0',
        ],
    ],
];
