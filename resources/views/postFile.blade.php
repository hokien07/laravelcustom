<form action="{{route('postFile')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <input type="file" name="myfile">
    <input type="submit">
</form>