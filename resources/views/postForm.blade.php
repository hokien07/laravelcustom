<form action="{!! route('postForm') !!}" method="POST">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <input type="text" name="hoten" />
    <input type="submit">
</form>
