# Postplaylist

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_method** | **string** | To cast request method POST to PUT | 
**name** | **string** | Playlist name.&lt;br&gt;Name should have minimum 2 chars, and maximum 32 chars length. | 
**type** | **string** | Values can be &#x27;live&#x27; or &#x27;file&#x27;. | [optional] 
**length** | **string** | Length should be in the format hh:mm:ss. length can be set if type is &#x27;live&#x27;. | [optional] 
**schedule** | **string** | The values can be  &#x27;instant&#x27;, &#x27; scheduleontime&#x27; or &#x27;scheduleondatetime&#x27; | [optional] 
**scheduleontime** | **string** | Scheduleontime should be in the format of hh:mm:ss. &lt;br/&gt;It can be use if the &#x27;schedule&#x27;  is &#x27;scheduleontime&#x27;. | [optional] 
**scheduleondatetime** | **string** | Scheduleondatetime&#x27;s format should be yyyy-mm-dd hh:min:sec . &lt;br&gt;It can be used if  &#x27;schedule&#x27; is &#x27;scheduleondatetime&#x27;. | [optional] 
**files** | [**\Swagger\Client\Model\StreamsscheduledplayliststreamidplaylistnewFiles**](StreamsscheduledplayliststreamidplaylistnewFiles.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

