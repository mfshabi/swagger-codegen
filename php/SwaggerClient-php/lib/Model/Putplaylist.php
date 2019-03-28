<?php
/**
 * Putplaylist
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 5centscdn API
 *
 * This is a simple API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: you@your-company.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.5
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Putplaylist Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Putplaylist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Putplaylist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'type' => 'string',
'length' => 'string',
'schedule' => 'string',
'scheduleontime' => 'string',
'scheduleondatetime' => 'string',
'files' => '\Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'type' => null,
'length' => null,
'schedule' => null,
'scheduleontime' => null,
'scheduleondatetime' => null,
'files' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
'type' => 'type',
'length' => 'length',
'schedule' => 'schedule',
'scheduleontime' => 'scheduleontime',
'scheduleondatetime' => 'scheduleondatetime',
'files' => 'files'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'type' => 'setType',
'length' => 'setLength',
'schedule' => 'setSchedule',
'scheduleontime' => 'setScheduleontime',
'scheduleondatetime' => 'setScheduleondatetime',
'files' => 'setFiles'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'type' => 'getType',
'length' => 'getLength',
'schedule' => 'getSchedule',
'scheduleontime' => 'getScheduleontime',
'scheduleondatetime' => 'getScheduleondatetime',
'files' => 'getFiles'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['scheduleontime'] = isset($data['scheduleontime']) ? $data['scheduleontime'] : null;
        $this->container['scheduleondatetime'] = isset($data['scheduleondatetime']) ? $data['scheduleondatetime'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Playlist name.<br>Name should have minimum 2 chars, and maximum 32 chars length.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Values can be 'live' or 'file'.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param string $length Length should be in the format hh:mm:ss. length would be set if type is 'live'.
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return string
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param string $schedule The values can be  'instant', ' scheduleontime' or 'scheduleondatetime'
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets scheduleontime
     *
     * @return string
     */
    public function getScheduleontime()
    {
        return $this->container['scheduleontime'];
    }

    /**
     * Sets scheduleontime
     *
     * @param string $scheduleontime Scheduleontime should be in the format of hh:mm:ss. <br>It can be use if the 'schedule'  is 'scheduleontime'.
     *
     * @return $this
     */
    public function setScheduleontime($scheduleontime)
    {
        $this->container['scheduleontime'] = $scheduleontime;

        return $this;
    }

    /**
     * Gets scheduleondatetime
     *
     * @return string
     */
    public function getScheduleondatetime()
    {
        return $this->container['scheduleondatetime'];
    }

    /**
     * Sets scheduleondatetime
     *
     * @param string $scheduleondatetime Scheduleondatetime's format should be yyyy-mm-dd hh:min:sec . <br>It can be used if  'schedule' is 'scheduleondatetime'.
     *
     * @return $this
     */
    public function setScheduleondatetime($scheduleondatetime)
    {
        $this->container['scheduleondatetime'] = $scheduleondatetime;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
