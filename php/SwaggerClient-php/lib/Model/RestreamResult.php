<?php
/**
 * RestreamResult
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
 * RestreamResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RestreamResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RestreamResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
'id' => 'int',
'serviceid' => 'int',
'name' => 'string',
'audioonly' => 'string',
'ssl' => 'string',
'parentid' => 'int',
'server' => 'string',
'backup' => 'string',
'deleted' => 'string',
'ssl_enabled' => 'string',
'record' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'id' => 'int32',
'serviceid' => 'int32',
'name' => null,
'audioonly' => null,
'ssl' => null,
'parentid' => 'int32',
'server' => null,
'backup' => null,
'deleted' => null,
'ssl_enabled' => null,
'record' => null    ];

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
        'type' => 'type',
'id' => 'id',
'serviceid' => 'serviceid',
'name' => 'name',
'audioonly' => 'audioonly',
'ssl' => 'ssl',
'parentid' => 'parentid',
'server' => 'server',
'backup' => 'backup',
'deleted' => 'deleted',
'ssl_enabled' => 'ssl_enabled',
'record' => 'record'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'id' => 'setId',
'serviceid' => 'setServiceid',
'name' => 'setName',
'audioonly' => 'setAudioonly',
'ssl' => 'setSsl',
'parentid' => 'setParentid',
'server' => 'setServer',
'backup' => 'setBackup',
'deleted' => 'setDeleted',
'ssl_enabled' => 'setSslEnabled',
'record' => 'setRecord'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'id' => 'getId',
'serviceid' => 'getServiceid',
'name' => 'getName',
'audioonly' => 'getAudioonly',
'ssl' => 'getSsl',
'parentid' => 'getParentid',
'server' => 'getServer',
'backup' => 'getBackup',
'deleted' => 'getDeleted',
'ssl_enabled' => 'getSslEnabled',
'record' => 'getRecord'    ];

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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['serviceid'] = isset($data['serviceid']) ? $data['serviceid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['audioonly'] = isset($data['audioonly']) ? $data['audioonly'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['parentid'] = isset($data['parentid']) ? $data['parentid'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['backup'] = isset($data['backup']) ? $data['backup'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['ssl_enabled'] = isset($data['ssl_enabled']) ? $data['ssl_enabled'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets serviceid
     *
     * @return int
     */
    public function getServiceid()
    {
        return $this->container['serviceid'];
    }

    /**
     * Sets serviceid
     *
     * @param int $serviceid serviceid
     *
     * @return $this
     */
    public function setServiceid($serviceid)
    {
        $this->container['serviceid'] = $serviceid;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets audioonly
     *
     * @return string
     */
    public function getAudioonly()
    {
        return $this->container['audioonly'];
    }

    /**
     * Sets audioonly
     *
     * @param string $audioonly audioonly
     *
     * @return $this
     */
    public function setAudioonly($audioonly)
    {
        $this->container['audioonly'] = $audioonly;

        return $this;
    }

    /**
     * Gets ssl
     *
     * @return string
     */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
     * Sets ssl
     *
     * @param string $ssl ssl
     *
     * @return $this
     */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;

        return $this;
    }

    /**
     * Gets parentid
     *
     * @return int
     */
    public function getParentid()
    {
        return $this->container['parentid'];
    }

    /**
     * Sets parentid
     *
     * @param int $parentid parentid
     *
     * @return $this
     */
    public function setParentid($parentid)
    {
        $this->container['parentid'] = $parentid;

        return $this;
    }

    /**
     * Gets server
     *
     * @return string
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     *
     * @param string $server server
     *
     * @return $this
     */
    public function setServer($server)
    {
        $this->container['server'] = $server;

        return $this;
    }

    /**
     * Gets backup
     *
     * @return string
     */
    public function getBackup()
    {
        return $this->container['backup'];
    }

    /**
     * Sets backup
     *
     * @param string $backup backup
     *
     * @return $this
     */
    public function setBackup($backup)
    {
        $this->container['backup'] = $backup;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return string
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param string $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets ssl_enabled
     *
     * @return string
     */
    public function getSslEnabled()
    {
        return $this->container['ssl_enabled'];
    }

    /**
     * Sets ssl_enabled
     *
     * @param string $ssl_enabled ssl_enabled
     *
     * @return $this
     */
    public function setSslEnabled($ssl_enabled)
    {
        $this->container['ssl_enabled'] = $ssl_enabled;

        return $this;
    }

    /**
     * Gets record
     *
     * @return string
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param string $record record
     *
     * @return $this
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

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
