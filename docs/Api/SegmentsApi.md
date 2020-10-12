# Swagger\Client\SegmentsApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exploreSegments**](SegmentsApi.md#exploresegments) | **GET** /segments/explore | Explore segments
[**getLoggedInAthleteStarredSegments**](SegmentsApi.md#getloggedinathletestarredsegments) | **GET** /segments/starred | List Starred Segments
[**getSegmentById**](SegmentsApi.md#getsegmentbyid) | **GET** /segments/{id} | Get Segment
[**starSegment**](SegmentsApi.md#starsegment) | **PUT** /segments/{id}/starred | Star Segment

# **exploreSegments**
> \Swagger\Client\Model\ExplorerResponse exploreSegments($bounds, $activity_type, $min_cat, $max_cat)

Explore segments

Returns the top 10 segments matching a specified query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bounds = array(3.4); // float[] | The latitude and longitude for two points describing a rectangular boundary for the search: [southwest corner latitutde, southwest corner longitude, northeast corner latitude, northeast corner longitude]
$activity_type = "activity_type_example"; // string | Desired activity type.
$min_cat = 56; // int | The minimum climbing category.
$max_cat = 56; // int | The maximum climbing category.

try {
    $result = $apiInstance->exploreSegments($bounds, $activity_type, $min_cat, $max_cat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->exploreSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bounds** | [**float[]**](../Model/float.md)| The latitude and longitude for two points describing a rectangular boundary for the search: [southwest corner latitutde, southwest corner longitude, northeast corner latitude, northeast corner longitude] |
 **activity_type** | **string**| Desired activity type. | [optional]
 **min_cat** | **int**| The minimum climbing category. | [optional]
 **max_cat** | **int**| The maximum climbing category. | [optional]

### Return type

[**\Swagger\Client\Model\ExplorerResponse**](../Model/ExplorerResponse.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoggedInAthleteStarredSegments**
> \Swagger\Client\Model\SummarySegment[] getLoggedInAthleteStarredSegments($page, $per_page)

List Starred Segments

List of the authenticated athlete's starred segments. Private segments are filtered out unless requested by a token with read_all scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number. Defaults to 1.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getLoggedInAthleteStarredSegments($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getLoggedInAthleteStarredSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number. Defaults to 1. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\SummarySegment[]**](../Model/SummarySegment.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentById**
> \Swagger\Client\Model\DetailedSegment getSegmentById($id)

Get Segment

Returns the specified segment. read_all scope required in order to retrieve athlete-specific segment information, or to retrieve private segments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the segment.

try {
    $result = $apiInstance->getSegmentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the segment. |

### Return type

[**\Swagger\Client\Model\DetailedSegment**](../Model/DetailedSegment.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **starSegment**
> \Swagger\Client\Model\DetailedSegment starSegment($starred, $id)

Star Segment

Stars/Unstars the given segment for the authenticated athlete. Requires profile:write scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$starred = true; // bool | 
$id = 789; // int | The identifier of the segment to star.

try {
    $result = $apiInstance->starSegment($starred, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->starSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **starred** | **bool**|  |
 **id** | **int**| The identifier of the segment to star. |

### Return type

[**\Swagger\Client\Model\DetailedSegment**](../Model/DetailedSegment.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

