@extends('layouts.modal')
@section($id)
<div class="panel panel-default">
                        <div class="panel-heading">
                            ادخال بيانات الغرف 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{request()->root()}}/room/store" accept-charset="UTF-8" enctype="multipart/form-data" method="POST">
									{{csrf_field()}}	
									<div class="form-group">
                                            <label>الاسم</label>
                                            <input type="text" name="name" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>السعر</label>
                                            <input type="text" name="price" required class="form-control">
                                        </div> 
                                        <div class="form-group">
                                            <label>اختر الفئة</label>
                                            <select name="roomclass_id" required class="form-control">
                                            @foreach ($roomclass as $r)
                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>اختر الطابق</label>
                                            <select name="floor_id" required class="form-control">
                                            @foreach ($floor as $r)
                                                <option value="{{$r->id}}">{{$r->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-success">حفظ</button>
                                        <button type="reset" class="btn btn-light">الغاء</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        </div>
						<!-- /.panel-body -->
						@endsection