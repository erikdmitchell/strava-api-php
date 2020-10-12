<?php
/**
 * ExplorerSegment
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
 * ExplorerSegment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExplorerSegment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExplorerSegment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'climb_category' => 'int',
'climb_category_desc' => 'string',
'avg_grade' => 'float',
'start_latlng' => '\Swagger\Client\Model\LatLng',
'end_latlng' => '\Swagger\Client\Model\LatLng',
'elev_difference' => 'float',
'distance' => 'float',
'points' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'name' => null,
'climb_category' => null,
'climb_category_desc' => null,
'avg_grade' => 'float',
'start_latlng' => null,
'end_latlng' => null,
'elev_difference' => 'float',
'distance' => 'float',
'points' => null    ];

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
        'id' => 'id',
'name' => 'name',
'climb_category' => 'climb_category',
'climb_category_desc' => 'climb_category_desc',
'avg_grade' => 'avg_grade',
'start_latlng' => 'start_latlng',
'end_latlng' => 'end_latlng',
'elev_difference' => 'elev_difference',
'distance' => 'distance',
'points' => 'points'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'climb_category' => 'setClimbCategory',
'climb_category_desc' => 'setClimbCategoryDesc',
'avg_grade' => 'setAvgGrade',
'start_latlng' => 'setStartLatlng',
'end_latlng' => 'setEndLatlng',
'elev_difference' => 'setElevDifference',
'distance' => 'setDistance',
'points' => 'setPoints'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'climb_category' => 'getClimbCategory',
'climb_category_desc' => 'getClimbCategoryDesc',
'avg_grade' => 'getAvgGrade',
'start_latlng' => 'getStartLatlng',
'end_latlng' => 'getEndLatlng',
'elev_difference' => 'getElevDifference',
'distance' => 'getDistance',
'points' => 'getPoints'    ];

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

    const CLIMB_CATEGORY_DESC_NC = 'NC';
const CLIMB_CATEGORY_DESC__4 = '4';
const CLIMB_CATEGORY_DESC__3 = '3';
const CLIMB_CATEGORY_DESC__2 = '2';
const CLIMB_CATEGORY_DESC__1 = '1';
const CLIMB_CATEGORY_DESC_HC = 'HC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClimbCategoryDescAllowableValues()
    {
        return [
            self::CLIMB_CATEGORY_DESC_NC,
self::CLIMB_CATEGORY_DESC__4,
self::CLIMB_CATEGORY_DESC__3,
self::CLIMB_CATEGORY_DESC__2,
self::CLIMB_CATEGORY_DESC__1,
self::CLIMB_CATEGORY_DESC_HC,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['climb_category'] = isset($data['climb_category']) ? $data['climb_category'] : null;
        $this->container['climb_category_desc'] = isset($data['climb_category_desc']) ? $data['climb_category_desc'] : null;
        $this->container['avg_grade'] = isset($data['avg_grade']) ? $data['avg_grade'] : null;
        $this->container['start_latlng'] = isset($data['start_latlng']) ? $data['start_latlng'] : null;
        $this->container['end_latlng'] = isset($data['end_latlng']) ? $data['end_latlng'] : null;
        $this->container['elev_difference'] = isset($data['elev_difference']) ? $data['elev_difference'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getClimbCategoryDescAllowableValues();
        if (!is_null($this->container['climb_category_desc']) && !in_array($this->container['climb_category_desc'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'climb_category_desc', must be one of '%s'",
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
     * @param int $id The unique identifier of this segment
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name The name of this segment
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets climb_category
     *
     * @return int
     */
    public function getClimbCategory()
    {
        return $this->container['climb_category'];
    }

    /**
     * Sets climb_category
     *
     * @param int $climb_category The category of the climb [0, 5]. Higher is harder ie. 5 is Hors catégorie, 0 is uncategorized in climb_category. If climb_category = 5, climb_category_desc = HC. If climb_category = 2, climb_category_desc = 3.
     *
     * @return $this
     */
    public function setClimbCategory($climb_category)
    {
        $this->container['climb_category'] = $climb_category;

        return $this;
    }

    /**
     * Gets climb_category_desc
     *
     * @return string
     */
    public function getClimbCategoryDesc()
    {
        return $this->container['climb_category_desc'];
    }

    /**
     * Sets climb_category_desc
     *
     * @param string $climb_category_desc The description for the category of the climb
     *
     * @return $this
     */
    public function setClimbCategoryDesc($climb_category_desc)
    {
        $allowedValues = $this->getClimbCategoryDescAllowableValues();
        if (!is_null($climb_category_desc) && !in_array($climb_category_desc, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'climb_category_desc', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['climb_category_desc'] = $climb_category_desc;

        return $this;
    }

    /**
     * Gets avg_grade
     *
     * @return float
     */
    public function getAvgGrade()
    {
        return $this->container['avg_grade'];
    }

    /**
     * Sets avg_grade
     *
     * @param float $avg_grade The segment's average grade, in percents
     *
     * @return $this
     */
    public function setAvgGrade($avg_grade)
    {
        $this->container['avg_grade'] = $avg_grade;

        return $this;
    }

    /**
     * Gets start_latlng
     *
     * @return \Swagger\Client\Model\LatLng
     */
    public function getStartLatlng()
    {
        return $this->container['start_latlng'];
    }

    /**
     * Sets start_latlng
     *
     * @param \Swagger\Client\Model\LatLng $start_latlng start_latlng
     *
     * @return $this
     */
    public function setStartLatlng($start_latlng)
    {
        $this->container['start_latlng'] = $start_latlng;

        return $this;
    }

    /**
     * Gets end_latlng
     *
     * @return \Swagger\Client\Model\LatLng
     */
    public function getEndLatlng()
    {
        return $this->container['end_latlng'];
    }

    /**
     * Sets end_latlng
     *
     * @param \Swagger\Client\Model\LatLng $end_latlng end_latlng
     *
     * @return $this
     */
    public function setEndLatlng($end_latlng)
    {
        $this->container['end_latlng'] = $end_latlng;

        return $this;
    }

    /**
     * Gets elev_difference
     *
     * @return float
     */
    public function getElevDifference()
    {
        return $this->container['elev_difference'];
    }

    /**
     * Sets elev_difference
     *
     * @param float $elev_difference The segments's evelation difference, in meters
     *
     * @return $this
     */
    public function setElevDifference($elev_difference)
    {
        $this->container['elev_difference'] = $elev_difference;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float $distance The segment's distance, in meters
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets points
     *
     * @return string
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param string $points The polyline of the segment
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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
