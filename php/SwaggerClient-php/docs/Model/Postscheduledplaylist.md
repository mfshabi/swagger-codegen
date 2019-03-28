# Postscheduledplaylist

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_method** | **string** | To cast request method POST to PUT | 
**name** | **string** | Stream name should be in the format part-1/part-2. &lt;br&gt;Each part should have minimum 3 chars, separated by forward slash ‘/’, without any space. | 
**parent** | **string** | parent.codeshould be one of the parent code from the GET /streams/scheduledplaylist/parents call. | 
**audioonly** | **string** | Values can be Y or N. &lt;br&gt;Set to Y if the HLS audio only stream should be added to the manifest file.&lt;br&gt;Set to Y if the HLS audio only stream should not be added | [optional] 
**preroll** | **string** | Values can br Y or N&lt;br&gt;Set to Y if publish should be enabled. &lt;br&gt; Set to Y if publish should be disabled. | [optional] 
**loop** | **string** | Values can be Y or N. &lt;br&gt;Set to Y for loop schedules | [optional] 
**domainlock** | [**\Swagger\Client\Model\StreamstimeshiftnewDomainlock**](StreamstimeshiftnewDomainlock.md) |  | [optional] 
**geoblock** | [**\Swagger\Client\Model\StreamstimeshiftnewGeoblock**](StreamstimeshiftnewGeoblock.md) |  | [optional] 
**securetoken** | [**\Swagger\Client\Model\StreamstimeshiftnewSecuretoken**](StreamstimeshiftnewSecuretoken.md) |  | [optional] 
**rtmpauth** | [**\Swagger\Client\Model\StreamsabrnewRtmpauth**](StreamsabrnewRtmpauth.md) |  | [optional] 
**eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](StreamsabrnewEac.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

