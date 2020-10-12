# Swagger\Client\SegmentEffortsApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEffortsBySegmentId**](SegmentEffortsApi.md#geteffortsbysegmentid) | **GET** /segment_efforts | List Segment Efforts
[**getSegmentEffortById**](SegmentEffortsApi.md#getsegmenteffortbyid) | **GET** /segment_efforts/{id} | Get Segment Effort

# **getEffortsBySegmentId**
> \Swagger\Client\Model\DetailedSegmentEffort[] getEffortsBySegmentId($segment_id, $start_date_local, $end_date_local, $per_page)

List Segment Efforts

Returns a set of the authenticated athlete's segment efforts for a given segment.  Requires subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentEffortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = 56; // int | The identifier of the segment.
$start_date_local = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO 8601 formatted date time.
$end_date_local = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO 8601 formatted date time.
$per_page = 30; // int | Number of items per page. Defaults to 30.

try {
    $result = $apiInstance->getEffortsBySegmentId($segment_id, $start_date_local, $end_date_local, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentEffortsApi->getEffortsBySegmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_id** | **int**| The identifier of the segment. |
 **start_date_local** | **\DateTime**| ISO 8601 formatted date time. | [optional]
 **end_date_local** | **\DateTime**| ISO 8601 formatted date time. | [optional]
 **per_page** | **int**| Number of items per page. Defaults to 30. | [optional] [default to 30]

### Return type

[**\Swagger\Client\Model\DetailedSegmentEffort[]**](../Model/DetailedSegmentEffort.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentEffortById**
> \Swagger\Client\Model\DetailedSegmentEffort getSegmentEffortById($id)

Get Segment Effort

Returns a segment effort from an activity that is owned by the authenticated athlete. Requires subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SegmentEffortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | The identifier of the segment effort.

try {
    $result = $apiInstance->getSegmentEffortById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentEffortsApi->getSegmentEffortById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the segment effort. |

### Return type

[**\Swagger\Client\Model\DetailedSegmentEffort**](../Model/DetailedSegmentEffort.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

