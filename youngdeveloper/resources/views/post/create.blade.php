@extends('admin.dashboard')

@section('content')
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form id="createPost" class="form-horizontal form-row-seperated" action="{{ URL::action('PostController@store') }}" method="Post" enctype="multipart/form-data">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="exampleInputEmail1">Name Post</label>
            <input type="text" class="form-control" placeholder="User Name" name="title">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Content</label>
            <textarea name="content" class="form-control" rows="3"></textarea>
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <input style="display: none;" type="text" class="form-control" placeholder="User Name" name="idCategory">
            <select id="selectpicker_category_post" class="form-control selectpicker">
           
            <?php foreach($categories as $category):  ?>
              <option value="<?php echo $category -> getId()?>"><?php echo $category->getName()?></option>
            <?php endforeach; ?>
            
            </select>
        </div>
        
        <div class="form-group">
            <label for="filename">Image</label>
            <input type="file" onchange="readURL(this);" name="thumbnail" accept="image/*">
            <img id="blah" src="#" alt="image's post" />
        </div>

        <input type="submit" value="Create" class="btn btn-default"></input>
    </form>
</div>
@endsection