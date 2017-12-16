@if(isset($theNew) && !empty($theNew->image))
    <div class="col-sm-2 side_image">
        <img src="{{ asset($theNew->image ? $theNew->image : 'images/no_image.png') }}" alt="Image">
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