@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ثبت خبر') }}</div>

                    <div class="card-body">
                        <form method="post" action="/info" enctype="multipart/form-data">
                            {{ csrf_field() }}




                            <div class="form-group">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    <textarea class="form-control" id="info"  name="info" placeholder="متن خبر"></textarea>





                                    <label for="category">cateory</label>
                                    <select name="category_id[]" id="category" class="form-control"  >

                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>

                                        @endforeach

                                    </select>

                                </div>
                            </div>
                            <input type="file" name="infoimg" id="infoimg">

                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
