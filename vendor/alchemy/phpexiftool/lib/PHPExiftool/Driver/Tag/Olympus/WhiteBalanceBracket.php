<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class WhiteBalanceBracket extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'WhiteBalanceBracket';

    protected $FullName = 'mixed';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'White Balance Bracket';

    protected $flag_Permanent = true;

}
