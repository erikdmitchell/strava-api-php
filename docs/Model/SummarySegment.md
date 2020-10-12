# SummarySegment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of this segment | [optional] 
**name** | **string** | The name of this segment | [optional] 
**activity_type** | **string** |  | [optional] 
**distance** | **float** | The segment&#x27;s distance, in meters | [optional] 
**average_grade** | **float** | The segment&#x27;s average grade, in percents | [optional] 
**maximum_grade** | **float** | The segments&#x27;s maximum grade, in percents | [optional] 
**elevation_high** | **float** | The segments&#x27;s highest elevation, in meters | [optional] 
**elevation_low** | **float** | The segments&#x27;s lowest elevation, in meters | [optional] 
**start_latlng** | [**\Swagger\Client\Model\LatLng**](LatLng.md) |  | [optional] 
**end_latlng** | [**\Swagger\Client\Model\LatLng**](LatLng.md) |  | [optional] 
**climb_category** | **int** | The category of the climb [0, 5]. Higher is harder ie. 5 is Hors catégorie, 0 is uncategorized in climb_category. | [optional] 
**city** | **string** | The segments&#x27;s city. | [optional] 
**state** | **string** | The segments&#x27;s state or geographical region. | [optional] 
**country** | **string** | The segment&#x27;s country. | [optional] 
**private** | **bool** | Whether this segment is private. | [optional] 
**athlete_pr_effort** | [**\Swagger\Client\Model\SummarySegmentEffort**](SummarySegmentEffort.md) |  | [optional] 
**athlete_segment_stats** | [**\Swagger\Client\Model\SummaryPRSegmentEffort**](SummaryPRSegmentEffort.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

