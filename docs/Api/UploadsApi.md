# Swagger\Client\UploadsApi

All URIs are relative to *https://www.strava.com/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUpload**](UploadsApi.md#createupload) | **POST** /uploads | Upload Activity
[**getUploadById**](UploadsApi.md#getuploadbyid) | **GET** /uploads/{uploadId} | Get Upload

# **createUpload**
> \Swagger\Client\Model\Upload createUpload($file, $name, $description, $trainer, $commute, $data_type, $external_id)

Upload Activity

Uploads a new data file to create an activity from. Requires activity:write scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$trainer = "trainer_example"; // string | 
$commute = "commute_example"; // string | 
$data_type = "data_type_example"; // string | 
$external_id = "external_id_example"; // string | 

try {
    $result = $apiInstance->createUpload($file, $name, $description, $trainer, $commute, $data_type, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->createUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  | [optional]
 **name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **trainer** | **string**|  | [optional]
 **commute** | **string**|  | [optional]
 **data_type** | **string**|  | [optional]
 **external_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\Upload**](../Model/Upload.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadById**
> \Swagger\Client\Model\Upload getUploadById($upload_id)

Get Upload

Returns an upload for a given identifier. Requires activity:write scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: strava_oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UploadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_id = 789; // int | The identifier of the upload.

try {
    $result = $apiInstance->getUploadById($upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadsApi->getUploadById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_id** | **int**| The identifier of the upload. |

### Return type

[**\Swagger\Client\Model\Upload**](../Model/Upload.md)

### Authorization

[strava_oauth](../../README.md#strava_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

