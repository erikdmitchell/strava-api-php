<?php
/**
 * ActivityZone
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Strava API v3
 *
 * The [Swagger Playground](https://developers.strava.com/playground) is the easiest way to familiarize yourself with the Strava API by submitting HTTP requests and observing the responses before you write any client code. It will show what a response will look like with different endpoints depending on the authorization scope you receive from your athletes. To use the Playground, go to https://www.strava.com/settings/api and change your “Authorization Callback Domain” to developers.strava.com. Please note, we only support Swagger 2.0. There is a known issue where you can only select one scope at a time. For more information, please check the section “client code” at https://developers.strava.com/docs.
 *
 * OpenAPI spec version: 3.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
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
 * ActivityZone Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityZone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActivityZone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'score' => 'int',
'distribution_buckets' => '\Swagger\Client\Model\TimedZoneDistribution',
'type' => 'string',
'sensor_based' => 'bool',
'points' => 'int',
'custom_zones' => 'bool',
'max' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'score' => null,
'distribution_buckets' => null,
'type' => null,
'sensor_based' => null,
'points' => null,
'custom_zones' => null,
'max' => null    ];

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
        'score' => 'score',
'distribution_buckets' => 'distribution_buckets',
'type' => 'type',
'sensor_based' => 'sensor_based',
'points' => 'points',
'custom_zones' => 'custom_zones',
'max' => 'max'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'score' => 'setScore',
'distribution_buckets' => 'setDistributionBuckets',
'type' => 'setType',
'sensor_based' => 'setSensorBased',
'points' => 'setPoints',
'custom_zones' => 'setCustomZones',
'max' => 'setMax'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'score' => 'getScore',
'distribution_buckets' => 'getDistributionBuckets',
'type' => 'getType',
'sensor_based' => 'getSensorBased',
'points' => 'getPoints',
'custom_zones' => 'getCustomZones',
'max' => 'getMax'    ];

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

    const TYPE_HEARTRATE = 'heartrate';
const TYPE_POWER = 'power';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HEARTRATE,
self::TYPE_POWER,        ];
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['distribution_buckets'] = isset($data['distribution_buckets']) ? $data['distribution_buckets'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sensor_based'] = isset($data['sensor_based']) ? $data['sensor_based'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['custom_zones'] = isset($data['custom_zones']) ? $data['custom_zones'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets distribution_buckets
     *
     * @return \Swagger\Client\Model\TimedZoneDistribution
     */
    public function getDistributionBuckets()
    {
        return $this->container['distribution_buckets'];
    }

    /**
     * Sets distribution_buckets
     *
     * @param \Swagger\Client\Model\TimedZoneDistribution $distribution_buckets distribution_buckets
     *
     * @return $this
     */
    public function setDistributionBuckets($distribution_buckets)
    {
        $this->container['distribution_buckets'] = $distribution_buckets;

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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sensor_based
     *
     * @return bool
     */
    public function getSensorBased()
    {
        return $this->container['sensor_based'];
    }

    /**
     * Sets sensor_based
     *
     * @param bool $sensor_based sensor_based
     *
     * @return $this
     */
    public function setSensorBased($sensor_based)
    {
        $this->container['sensor_based'] = $sensor_based;

        return $this;
    }

    /**
     * Gets points
     *
     * @return int
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param int $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets custom_zones
     *
     * @return bool
     */
    public function getCustomZones()
    {
        return $this->container['custom_zones'];
    }

    /**
     * Sets custom_zones
     *
     * @param bool $custom_zones custom_zones
     *
     * @return $this
     */
    public function setCustomZones($custom_zones)
    {
        $this->container['custom_zones'] = $custom_zones;

        return $this;
    }

    /**
     * Gets max
     *
     * @return int
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param int $max max
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

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
