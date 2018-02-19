@if(isset($theExpert) && !empty($theExpert->image))
    <div class="col-sm-2 side_image">
        <img src="{{ asset('images/experts/' . $theExpert->image) }}" alt="Image">
    </div>
    <div class="form-group has-float-label col-sm-10">
        <input type="file" name="image" class="form-control @if($errors->has('image')) redborder @endif" value="{{old('image')}}">
        <label for="image">Image</label>
        <small class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</small>
    </div>
@else
    <div class="form-group has-float-label col-sm-12">
        <input type="file" name="image" required="required" class="form-control @if($errors->has('image')) redborder @endif" value="{{old('image')}}">
        <label for="image">Image <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</small>
    </div>
@endif

<div class="language col-md-12">
    <h3 class="header smaller lighter blue">English Data: </h3>
    <br>

    <div class="form-group has-float-label col-sm-12">
        {{ Form::text('etitle', (isset($theExpert) ? $theExpert->translations()->where('language', 'en')->pluck('title')->first() : old('etitle')), ['required' => 'required', 'placeholder' => 'English Title', 'class' => 'form-control ' . ($errors->has('etitle') ? 'redborder' : '')]) }}
        <label for="etitle">English Name <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->has('etitle') ? $errors->first('etitle') : '' }}</small>
    </div>

    <div class="form-group col-sm-12">
        <label for="edescription">English Description <span class="astric">*</span></label>
        {{ Form::textarea('edescription', (isset($theExpert) ? $theExpert->translations()->where('language', 'en')->pluck('description')->first() : old('edescription')), ['id' => 'edescription', 'required' => 'required', 'placeholder' => 'English Description', 'class' => 'form-control ' . ($errors->has('edescription') ? 'redborder' : '')]) }}
        <small class="text-danger">{{ $errors->has('edescription') ? $errors->first('edescription') : '' }}</small>
    </div>
</div>

<div class="language col-md-12">
    <h3 class="header smaller lighter blue">Arabic Data: </h3>
    <br>

    <div class="form-group has-float-label col-sm-12">
        {{ Form::text('atitle', (isset($theExpert) ? $theExpert->translations()->where('language', 'ar')->pluck('title')->first() : old('atitle')), ['required' => 'required', 'placeholder' => 'Arabic Title', 'class' => 'form-control ' . ($errors->has('atitle') ? 'redborder' : '')]) }}
        <label for="atitle">Arabic Name <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->has('atitle') ? $errors->first('atitle') : '' }}</small>
    </div>

    <div class="form-group col-sm-12">
        <label for="adescription">Arabic Description <span class="astric">*</span></label>
        {{ Form::textarea('adescription', (isset($theExpert) ? $theExpert->translations()->where('language', 'ar')->pluck('description')->first() : old('adescription')), ['id' => 'adescription', 'required' => 'required', 'placeholder' => 'Arabic Description', 'class' => 'form-control ' . ($errors->has('adescription') ? 'redborder' : '')]) }}
        <small class="text-danger">{{ $errors->has('adescription') ? $errors->first('adescription') : '' }}</small>
    </div>
</div>

<div class="col-sm-12">
    {{ Form::submit('Add', ['class' => 'btn btn-sm btn-primary']) }}
</div>