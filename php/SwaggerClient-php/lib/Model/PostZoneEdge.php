<?php
/**
 * PostZoneEdge
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
 * PostZoneEdge Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostZoneEdge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostZoneEdge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compression' => 'string',
'compressionlevel' => 'string',
'disposition' => 'string',
'stripcookie' => 'string',
'xff' => 'string',
'cors' => 'string',
'webp' => 'string',
'pseudostreaming' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'compression' => null,
'compressionlevel' => null,
'disposition' => null,
'stripcookie' => null,
'xff' => null,
'cors' => null,
'webp' => null,
'pseudostreaming' => null    ];

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
        'compression' => 'compression',
'compressionlevel' => 'compressionlevel',
'disposition' => 'disposition',
'stripcookie' => 'stripcookie',
'xff' => 'xff',
'cors' => 'cors',
'webp' => 'webp',
'pseudostreaming' => 'pseudostreaming'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compression' => 'setCompression',
'compressionlevel' => 'setCompressionlevel',
'disposition' => 'setDisposition',
'stripcookie' => 'setStripcookie',
'xff' => 'setXff',
'cors' => 'setCors',
'webp' => 'setWebp',
'pseudostreaming' => 'setPseudostreaming'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compression' => 'getCompression',
'compressionlevel' => 'getCompressionlevel',
'disposition' => 'getDisposition',
'stripcookie' => 'getStripcookie',
'xff' => 'getXff',
'cors' => 'getCors',
'webp' => 'getWebp',
'pseudostreaming' => 'getPseudostreaming'    ];

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
        $this->container['compression'] = isset($data['compression']) ? $data['compression'] : null;
        $this->container['compressionlevel'] = isset($data['compressionlevel']) ? $data['compressionlevel'] : null;
        $this->container['disposition'] = isset($data['disposition']) ? $data['disposition'] : null;
        $this->container['stripcookie'] = isset($data['stripcookie']) ? $data['stripcookie'] : null;
        $this->container['xff'] = isset($data['xff']) ? $data['xff'] : null;
        $this->container['cors'] = isset($data['cors']) ? $data['cors'] : null;
        $this->container['webp'] = isset($data['webp']) ? $data['webp'] : null;
        $this->container['pseudostreaming'] = isset($data['pseudostreaming']) ? $data['pseudostreaming'] : null;
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
     * Gets compression
     *
     * @return string
     */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /**
     * Sets compression
     *
     * @param string $compression The values can be Y or N.<br> Set to Y if edge compression should be enabled.<br> Set to N if edge compression should be disabled.
     *
     * @return $this
     */
    public function setCompression($compression)
    {
        $this->container['compression'] = $compression;

        return $this;
    }

    /**
     * Gets compressionlevel
     *
     * @return string
     */
    public function getCompressionlevel()
    {
        return $this->container['compressionlevel'];
    }

    /**
     * Sets compressionlevel
     *
     * @param string $compressionlevel Set the value of edge[compressionlevel] when edge[compression] is enabled. <br>The values can be 1, 2, 3, 4, 5, 6.
     *
     * @return $this
     */
    public function setCompressionlevel($compressionlevel)
    {
        $this->container['compressionlevel'] = $compressionlevel;

        return $this;
    }

    /**
     * Gets disposition
     *
     * @return string
     */
    public function getDisposition()
    {
        return $this->container['disposition'];
    }

    /**
     * Sets disposition
     *
     * @param string $disposition Values can be Y or N<br> Set to Y to enable edge disposition. <br> Set to N  to disable edge disposition.
     *
     * @return $this
     */
    public function setDisposition($disposition)
    {
        $this->container['disposition'] = $disposition;

        return $this;
    }

    /**
     * Gets stripcookie
     *
     * @return string
     */
    public function getStripcookie()
    {
        return $this->container['stripcookie'];
    }

    /**
     * Sets stripcookie
     *
     * @param string $stripcookie Values can be Y or N<br> Set to Y to enable. <br> Set to N  to disable.
     *
     * @return $this
     */
    public function setStripcookie($stripcookie)
    {
        $this->container['stripcookie'] = $stripcookie;

        return $this;
    }

    /**
     * Gets xff
     *
     * @return string
     */
    public function getXff()
    {
        return $this->container['xff'];
    }

    /**
     * Sets xff
     *
     * @param string $xff Values can be Y or N<br> Set to Y to enable. <br> Set to N  to disable.
     *
     * @return $this
     */
    public function setXff($xff)
    {
        $this->container['xff'] = $xff;

        return $this;
    }

    /**
     * Gets cors
     *
     * @return string
     */
    public function getCors()
    {
        return $this->container['cors'];
    }

    /**
     * Sets cors
     *
     * @param string $cors Values can be Y or N<br> Set to Y to enable. <br> Set to N  to disable.
     *
     * @return $this
     */
    public function setCors($cors)
    {
        $this->container['cors'] = $cors;

        return $this;
    }

    /**
     * Gets webp
     *
     * @return string
     */
    public function getWebp()
    {
        return $this->container['webp'];
    }

    /**
     * Sets webp
     *
     * @param string $webp Values can be Y or N.<br> Set to Y to enable WebP.<br> Set to N to disable WebP.
     *
     * @return $this
     */
    public function setWebp($webp)
    {
        $this->container['webp'] = $webp;

        return $this;
    }

    /**
     * Gets pseudostreaming
     *
     * @return string
     */
    public function getPseudostreaming()
    {
        return $this->container['pseudostreaming'];
    }

    /**
     * Sets pseudostreaming
     *
     * @param string $pseudostreaming Values can be Y or N.<br> Set to Y to enable pseudo stream seeking.<br> Set to N to disable  pseudo stream seeking.
     *
     * @return $this
     */
    public function setPseudostreaming($pseudostreaming)
    {
        $this->container['pseudostreaming'] = $pseudostreaming;

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
