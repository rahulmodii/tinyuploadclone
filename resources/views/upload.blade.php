@extends('layout.app')
@section('marzi')
    

<form enctype="multipart/form-data" method="post" action="{{ route('uploader.store')}}">
    
    <input type="file" id="file" name="name">
   
     {{ csrf_field() }}
    <input type="submit" name="submit"><br>
    @if($errors->has('name'))
    <span class="error">{{
        $errors->first('name')
    }}</span>
    
    @endif
</form>

<div style="margin-top: 30px;">
<a href="{{ $raju }}" target="_blank">{{ $raju }}</a>
</div>

@endsection