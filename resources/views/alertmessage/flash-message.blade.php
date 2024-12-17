@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>     -->
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>     -->
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>     -->
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>     -->
    <strong>{{ $message }}</strong>
</div>
@endif
  
@if ($errors->has('password'))
<div class="alert alert-danger">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>     -->
    {{ $errors->first('password') }}
</div>
@endif

@if ($errors->has('category'))
 <div class="alert alert-danger">
    <span>{{ $errors->first('category') }}</span>
</div>
@endif

@if ($message = Session::get('not found'))
<div class="text-red-500 mt-2">
    <strong>{{ $message }}</strong>
</div>
@endif