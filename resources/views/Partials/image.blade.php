@if(isset($entry->image))
    <!--a href="/{{$entry->Document}}"></a>-->
    <img src="/{{$entry->image}}" width="120px" alt="Image" />
    <!--embed src="/{{ $entry->document}}" /-->
@endif
