
<form method=post action='/upload' enctype="multipart/form-data" >
    {{ csrf_field() }}


    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}" placeholder="Enter name">
    </div>



    <input type="file" name="filename" id="filename">



    <div class="col-md-6">
        <input id="password" type="password"  name="password" >

    </div>
    </div>



    <button type="submit">save</button>
</form>