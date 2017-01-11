<?php
use Floor9design\SearchStringParser\ParserImplementation;

/**
 * ParserImplementationTest.php
 *
 * PHPUnit tests for ParserImplementation
 *
 * php 5.3+
 *
 * @category  None
 * @package   League\Floor9design\SearchStringParser
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright floor9design.com
 * @license   GPL 3.0 (http://www.gnu.org/copyleft/gpl.html)
 * @version   0.9
 * @link      http://floor9design.com/
 * @see       http://floor9design.com/
 * @since     File available since Release 1.0
 *
 */

/**
 * Class ParserImplementationTest
 *
 * Provides a set of testing tools for the ParserImplementation class.
 * There is not 100% coverage in this test as some methods are protected.
 * However, these are caught with child classes tests, so this should still offer 100% project testing.
 *
 * @category  None
 * @package   Floor9design\SearchStringParser;
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright floor9design.com
 * @license   GPL 3.0 (http://www.gnu.org/copyleft/gpl.html)
 * @version   0.9
 * @link      http://floor9design.com/
 * @see       http://floor9design.com/
 * @since     File available since Release 1.0
 */
class ParserImplementationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Floor9design\SearchStringParser\ParserImplementation
     */
    private $pi;

    /**
     * Set up objects for testing
     */
    public function setUp()
    {
        $this->pi = $this->getMockForAbstractClass(ParserImplementation::class);
    }

    /**
     * Test the delimiter accessors
     */
    public function testDelimiterAccessors()
    {
        $expected = 'delimiter';

        $this->pi->setDelimiter($expected);
        $output = $this->pi->getDelimiter();

        $this->assertEquals($expected, $output);
    }
}
