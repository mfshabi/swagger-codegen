# PostRestream

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_method** | **string** | request method  PUT | 
**name** | **string** | Stream name.&lt;br&gt;Should be in the format part-1/part-2. Each part should have minimum 3 chars, separated by forward slash ‘/’, without any space | 
**restreamtype** | **string** | The values can be mediaserver or ffmpeg.&lt;br&gt; mediaserver: for restreaming via media server.&lt;br&gt; ffmpeg: for restreaming via ffmpeg server | 
**server** | [**\Swagger\Client\Model\StreamsrestreamnewServer**](StreamsrestreamnewServer.md) |  | [optional] 
**url** | [**\Swagger\Client\Model\StreamsrestreamnewUrl**](StreamsrestreamnewUrl.md) |  | [optional] 
**audioonly** | **string** | Values can be Y or N&lt;br&gt;Set to Y if the HLS audio only stream should be added to the manifest file | [optional] 
**domainlock** | [**\Swagger\Client\Model\StreamstimeshiftnewDomainlock**](StreamstimeshiftnewDomainlock.md) |  | [optional] 
**geoblock** | [**\Swagger\Client\Model\StreamsrestreamnewGeoblock**](StreamsrestreamnewGeoblock.md) |  | [optional] 
**backup** | **string** | A link to backup video to roll when there is no publish | [optional] 
**audiofix** | **string** | Used to transcode the audio stream to aac using ffmpeg if required.&lt;br&gt; Available only when &#x27;ffmpeg&#x27; restream type is chosen. | [optional] 
**securetoken** | [**\Swagger\Client\Model\StreamstimeshiftnewSecuretoken**](StreamstimeshiftnewSecuretoken.md) |  | [optional] 
**record** | [**\Swagger\Client\Model\StreamsrestreamnewRecord**](StreamsrestreamnewRecord.md) |  | [optional] 
**eac** | [**\Swagger\Client\Model\StreamsabrnewEac**](StreamsabrnewEac.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

