# ExplorerSegment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of this segment | [optional] 
**name** | **string** | The name of this segment | [optional] 
**climb_category** | **int** | The category of the climb [0, 5]. Higher is harder ie. 5 is Hors catégorie, 0 is uncategorized in climb_category. If climb_category &#x3D; 5, climb_category_desc &#x3D; HC. If climb_category &#x3D; 2, climb_category_desc &#x3D; 3. | [optional] 
**climb_category_desc** | **string** | The description for the category of the climb | [optional] 
**avg_grade** | **float** | The segment&#x27;s average grade, in percents | [optional] 
**start_latlng** | [**\Swagger\Client\Model\LatLng**](LatLng.md) |  | [optional] 
**end_latlng** | [**\Swagger\Client\Model\LatLng**](LatLng.md) |  | [optional] 
**elev_difference** | **float** | The segments&#x27;s evelation difference, in meters | [optional] 
**distance** | **float** | The segment&#x27;s distance, in meters | [optional] 
**points** | **string** | The polyline of the segment | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

