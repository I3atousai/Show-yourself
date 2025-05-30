<?php
/**
 * Html2Pdf Library - Tests
 *
 * HTML => PDF converter
 * distributed under the OSL-3.0 License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2025 Laurent MINGUET
 */

namespace Spipu\Html2Pdf\Tests\Tag\Svg;

use Spipu\Html2Pdf\Exception\HtmlParsingException;
use Spipu\Html2Pdf\Tests\AbstractTest;

/**
 * Class PolylineErrorTest
 */
class PolylineErrorTest extends AbstractTest
{
    /**
     * test
     *
     * @return void
     */
    public function testCase()
    {
        $this->expectException(HtmlParsingException::class);
        $object = $this->getObject();
        $object->writeHTML('<polyline />');
        $object->output('test.pdf', 'S');
    }
}
