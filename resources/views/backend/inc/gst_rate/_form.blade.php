@if($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
     <button type="button" class="close" data-dismiss="alert">x</button>
     {{$message}}
   </div>
@endif

@if(count($errors->all()))
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
@endif
<div class="row">
    <div class="col-lg-12">
        {{Form::text('record[gst]', '', ['class' => 'squareInput', 'placeholder'=>'Enter GST Rate','required'=>'required'])}}
        {{Form::label('record[gst]', 'Enter GST Rate'), ['class' => 'active']}}
    </div>
</div>
