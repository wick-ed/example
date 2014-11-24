<?php

/**
 * AppserverIo\Apps\Example\Entities\Assertion
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Apps
 * @subpackage Example
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-apps/example
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Apps\Example\Entities;

/**
 * Doctrine entity that represents a assertion.
 *
 * @category   Appserver
 * @package    Apps
 * @subpackage Example
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-apps/example
 * @link       http://www.appserver.io
 *
 * @Entity
 * @Table(name="assertion")
 */
class Assertion
{

    /**
     * @var integer
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $assertionId;

    /**
     * @var string
     * @Column(type="string")
     */
    protected $type;

    /**
     * @var string
     * @Column(type="string")
     */
    protected $includeFile;

    /**
     * Returns the value of the class member assertionId.
     *
     * @return integer Holds the value of the class member assertionId
     */
    public function getAssertionId()
    {
        return $this->assertionId;
    }

    /**
     * Sets the value for the class member assertionId.
     *
     * @param integer $assertionId Holds the value for the class member assertionId
     *
     * @return void
     */
    public function setAssertionId($assertionId)
    {
        $this->assertionId = $assertionId;
    }

    /**
     * Returns the value of the class member type.
     *
     * @return string Holds the value of the class member type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value for the class member type.
     *
     * @param string $type Holds the value for the class member type
     *
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the value of the class member includeFile.
     *
     * @return string Holds the value of the class member includeFile
     */
    public function getIncludeFile()
    {
        return $this->includeFile;
    }

    /**
     * Sets the value for the class member includeFile.
     *
     * @param string $includeFile Holds the value for the class member includeFile
     *
     * @return void
     */
    public function setIncludeFile($includeFile)
    {
        $this->includeFile = $includeFile;
    }
}