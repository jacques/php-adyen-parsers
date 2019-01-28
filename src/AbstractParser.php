<?php declare(strict_types=1);
/**
 * Adyen Parsers for PHP
 *
 * @author    Jacques Marneweck <jacques@siberia.co.za>
 * @copyright 2018-2019 Jacques Marneweck.  All rights strictly reserved.
 */

namespace Jacques\Adyen\Parsers;

use League\Csv\Reader;

abstract class AbstractParser
{
    /**
     * @var \League\Csv\Reader
     */
    protected $reader;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @param string $filename
     *
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function __construct($filename = null)
    {
        if (is_null($filename)) {
            throw new \InvalidArgumentException('Please pass in the filename to parse.');
        }

        if (!file_exists($filename)) {
            throw new \RuntimeException('Please ensure the file exists.');
        }

        if (!is_readable($filename)) {
            throw new \RuntimeException('Please ensure the file is readable.');
        }

        $this->filename = $filename;
    }
}
