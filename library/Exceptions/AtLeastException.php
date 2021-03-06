<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions;

class AtLeastException extends AbstractGroupedException
{
    public static $defaultTemplates = array(
        self::MODE_DEFAULT => array(
            self::NONE => 'At least {{howMany}} of the {{failed}} required rules must pass for {{name}}',
            self::SOME => 'At least {{howMany}} of the {{failed}} required rules must pass for {{name}}, only {{passed}} passed.',
        ),
        self::MODE_NEGATIVE => array(
            self::NONE => 'At least {{howMany}} of the {{failed}} required rules must not pass for {{name}}',
            self::SOME => 'At least {{howMany}} of the {{failed}} required rules must not pass for {{name}}, only {{passed}} passed.',
        ),
    );
}
