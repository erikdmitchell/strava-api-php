<?php
/**
 * DetailedActivity
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
use \Swagger\Client\ObjectSerializer;

/**
 * DetailedActivity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DetailedActivity extends SummaryActivity 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DetailedActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
'photos' => '\Swagger\Client\Model\PhotosSummary',
'gear' => '\Swagger\Client\Model\SummaryGear',
'calories' => 'float',
'segment_efforts' => '\Swagger\Client\Model\DetailedSegmentEffort[]',
'device_name' => 'string',
'embed_token' => 'string',
'splits_metric' => '\Swagger\Client\Model\Split[]',
'splits_standard' => '\Swagger\Client\Model\Split[]',
'laps' => '\Swagger\Client\Model\Lap[]',
'best_efforts' => '\Swagger\Client\Model\DetailedSegmentEffort[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
'photos' => null,
'gear' => null,
'calories' => 'float',
'segment_efforts' => null,
'device_name' => null,
'embed_token' => null,
'splits_metric' => null,
'splits_standard' => null,
'laps' => null,
'best_efforts' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
'photos' => 'photos',
'gear' => 'gear',
'calories' => 'calories',
'segment_efforts' => 'segment_efforts',
'device_name' => 'device_name',
'embed_token' => 'embed_token',
'splits_metric' => 'splits_metric',
'splits_standard' => 'splits_standard',
'laps' => 'laps',
'best_efforts' => 'best_efforts'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
'photos' => 'setPhotos',
'gear' => 'setGear',
'calories' => 'setCalories',
'segment_efforts' => 'setSegmentEfforts',
'device_name' => 'setDeviceName',
'embed_token' => 'setEmbedToken',
'splits_metric' => 'setSplitsMetric',
'splits_standard' => 'setSplitsStandard',
'laps' => 'setLaps',
'best_efforts' => 'setBestEfforts'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
'photos' => 'getPhotos',
'gear' => 'getGear',
'calories' => 'getCalories',
'segment_efforts' => 'getSegmentEfforts',
'device_name' => 'getDeviceName',
'embed_token' => 'getEmbedToken',
'splits_metric' => 'getSplitsMetric',
'splits_standard' => 'getSplitsStandard',
'laps' => 'getLaps',
'best_efforts' => 'getBestEfforts'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['photos'] = isset($data['photos']) ? $data['photos'] : null;
        $this->container['gear'] = isset($data['gear']) ? $data['gear'] : null;
        $this->container['calories'] = isset($data['calories']) ? $data['calories'] : null;
        $this->container['segment_efforts'] = isset($data['segment_efforts']) ? $data['segment_efforts'] : null;
        $this->container['device_name'] = isset($data['device_name']) ? $data['device_name'] : null;
        $this->container['embed_token'] = isset($data['embed_token']) ? $data['embed_token'] : null;
        $this->container['splits_metric'] = isset($data['splits_metric']) ? $data['splits_metric'] : null;
        $this->container['splits_standard'] = isset($data['splits_standard']) ? $data['splits_standard'] : null;
        $this->container['laps'] = isset($data['laps']) ? $data['laps'] : null;
        $this->container['best_efforts'] = isset($data['best_efforts']) ? $data['best_efforts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the activity
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets photos
     *
     * @return \Swagger\Client\Model\PhotosSummary
     */
    public function getPhotos()
    {
        return $this->container['photos'];
    }

    /**
     * Sets photos
     *
     * @param \Swagger\Client\Model\PhotosSummary $photos photos
     *
     * @return $this
     */
    public function setPhotos($photos)
    {
        $this->container['photos'] = $photos;

        return $this;
    }

    /**
     * Gets gear
     *
     * @return \Swagger\Client\Model\SummaryGear
     */
    public function getGear()
    {
        return $this->container['gear'];
    }

    /**
     * Sets gear
     *
     * @param \Swagger\Client\Model\SummaryGear $gear gear
     *
     * @return $this
     */
    public function setGear($gear)
    {
        $this->container['gear'] = $gear;

        return $this;
    }

    /**
     * Gets calories
     *
     * @return float
     */
    public function getCalories()
    {
        return $this->container['calories'];
    }

    /**
     * Sets calories
     *
     * @param float $calories The number of kilocalories consumed during this activity
     *
     * @return $this
     */
    public function setCalories($calories)
    {
        $this->container['calories'] = $calories;

        return $this;
    }

    /**
     * Gets segment_efforts
     *
     * @return \Swagger\Client\Model\DetailedSegmentEffort[]
     */
    public function getSegmentEfforts()
    {
        return $this->container['segment_efforts'];
    }

    /**
     * Sets segment_efforts
     *
     * @param \Swagger\Client\Model\DetailedSegmentEffort[] $segment_efforts segment_efforts
     *
     * @return $this
     */
    public function setSegmentEfforts($segment_efforts)
    {
        $this->container['segment_efforts'] = $segment_efforts;

        return $this;
    }

    /**
     * Gets device_name
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->container['device_name'];
    }

    /**
     * Sets device_name
     *
     * @param string $device_name The name of the device used to record the activity
     *
     * @return $this
     */
    public function setDeviceName($device_name)
    {
        $this->container['device_name'] = $device_name;

        return $this;
    }

    /**
     * Gets embed_token
     *
     * @return string
     */
    public function getEmbedToken()
    {
        return $this->container['embed_token'];
    }

    /**
     * Sets embed_token
     *
     * @param string $embed_token The token used to embed a Strava activity
     *
     * @return $this
     */
    public function setEmbedToken($embed_token)
    {
        $this->container['embed_token'] = $embed_token;

        return $this;
    }

    /**
     * Gets splits_metric
     *
     * @return \Swagger\Client\Model\Split[]
     */
    public function getSplitsMetric()
    {
        return $this->container['splits_metric'];
    }

    /**
     * Sets splits_metric
     *
     * @param \Swagger\Client\Model\Split[] $splits_metric The splits of this activity in metric units (for runs)
     *
     * @return $this
     */
    public function setSplitsMetric($splits_metric)
    {
        $this->container['splits_metric'] = $splits_metric;

        return $this;
    }

    /**
     * Gets splits_standard
     *
     * @return \Swagger\Client\Model\Split[]
     */
    public function getSplitsStandard()
    {
        return $this->container['splits_standard'];
    }

    /**
     * Sets splits_standard
     *
     * @param \Swagger\Client\Model\Split[] $splits_standard The splits of this activity in imperial units (for runs)
     *
     * @return $this
     */
    public function setSplitsStandard($splits_standard)
    {
        $this->container['splits_standard'] = $splits_standard;

        return $this;
    }

    /**
     * Gets laps
     *
     * @return \Swagger\Client\Model\Lap[]
     */
    public function getLaps()
    {
        return $this->container['laps'];
    }

    /**
     * Sets laps
     *
     * @param \Swagger\Client\Model\Lap[] $laps laps
     *
     * @return $this
     */
    public function setLaps($laps)
    {
        $this->container['laps'] = $laps;

        return $this;
    }

    /**
     * Gets best_efforts
     *
     * @return \Swagger\Client\Model\DetailedSegmentEffort[]
     */
    public function getBestEfforts()
    {
        return $this->container['best_efforts'];
    }

    /**
     * Sets best_efforts
     *
     * @param \Swagger\Client\Model\DetailedSegmentEffort[] $best_efforts best_efforts
     *
     * @return $this
     */
    public function setBestEfforts($best_efforts)
    {
        $this->container['best_efforts'] = $best_efforts;

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
