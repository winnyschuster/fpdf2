<?php

/*
 * This file is part of the 'fpdf' package.
 *
 * For the license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author bibi.nu <bibi@bibi.nu>
 */

declare(strict_types=1);

namespace fpdf\Tests\Fixture;

use fpdf\PdfDocument;
use fpdf\Traits\PdfAttachmentTrait;

class PdfDocumentAttachment extends PdfDocument
{
    use PdfAttachmentTrait;
}
