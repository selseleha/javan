@extends('layouts.app')

@section('content')


    <div class="container">


        <form  method="post" action="{{route('add.store')}}" >
            {{csrf_field()}}




            <div class="form-group">
                <label for="username">نام :</label>
                <input type="text" name="first_name" class="form-control" id="first_name">
            </div>

            <div class="form-group">
                <label for="username">نام خانوادگی:</label>
                <input type="text" name="last_name" class="form-control" id="username" >
            </div>




            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3" >

                        <input  type="number"  class="form-control input-lg" name="year" value="1340" min="1320" max="1400" >
                    </div>

                    <div class="col-lg-4" >
                        <select class="form-control input-lg" name="month">
                            <option value="1">فروردین</option>
                            <option value="2">اردیبهشت</option>
                            <option value="3">خرداد</option>
                            <option value="4">تیر</option>
                            <option value="5">مرداد</option>
                            <option value="6">شهریور</option>
                            <option value="7">مهر</option>
                            <option value="8">آبان</option>
                            <option value="9">آذر</option>
                            <option value="10">دی</option>
                            <option value="11">بهمن</option>
                            <option value="12">اسفند</option>
                        </select>
                    </div>

                    <div class="col-lg-3">

                        <select class="form-control input-lg" name="day">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>

                    <div class="col-lg-2" >
                        <label for="">تاریخ تولد:</label>
                    </div>
                </div>
            </div>

            <div class="form-group float-label-control">
                <label for="">شماره تماس</label>
                <input type="text" name="phone" class="form-control" >
            </div>

            <div class="form-group">
                <label for="">تحصیلات</label>
                <select class="form-control input-lg" name="tahsilat">
                    <option value="1">دیپلم</option>
                    <option value="2">کاردانی</option>
                    <option value="3">کارشناسی</option>
                    <option value="4">کارشناسی ارشد</option>
                    <option value="5">دکتری</option>
                </select>
            </div>

            <div class="form-group">
                <label for="reshteh">رشته:</label>
                <input type="text" name="reshteh" class="form-control" >
            </div>


            <div class="form-group">
                <label for="uni">دانشگاه:</label>
                <input type="text" name="uni" class="form-control" >
            </div>


            <div class="form-group">
                <label for="job">شغل:</label>
                <input type="text" name="job" class="form-control" >
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label  for="sex-0">
                            <input name="marry" id="sex-0" value="1"  type="radio">
                            مجرد
                        </label>
                    </div>
                    <div class="col-md-4">
                        <label  for="sex-1">
                            <input name="marry" id="sex-1" value="2" type="radio">
                            متاهل
                        </label>
                    </div>

                    <label class="col-md-4" for="marry">وضعیت تاهل</label>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="chk[]" value="sayer" > سایر
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" name="chk[]" value="honar"> هنری
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" name="chk[]" value="elm" > علمی
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" name="chk[]" value="varzesh"> ورزشی
                    </div>
                    <label class="col-md-2" for="interest">تخصص</label>
                </div>

            </div>



            <div class="form-group">
                <label  for="address">آدرس</label>

                <textarea class="form-control" name="address" id="address" name="address"> </textarea>
            </div>



            <div class="form-group">
                <label  for="address">توضیحات</label>

                <textarea class="form-control" id="text"  name="text" placeholder="توضیحات"></textarea>


            </div>






            <div class="form-group">
                <label for="photo">عکس</label>

                <input id="photo" name="photo" class="input-file" type="file">

            </div>

            <div class="form-group">
                <label for="a">رزومه</label>

                <input id="filename" name="filename" class="input-file" type="file">

            </div>



            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">ارسال</button>
            </div>


        </form>

    </div>