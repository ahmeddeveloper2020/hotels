@extends('layouts.modal')
@section($id)
<div class="panel panel-default">
                        <div class="panel-heading">
                            ادخال بيانات الحجز  
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{request()->root()}}/booking/store" accept-charset="UTF-8" enctype="multipart/form-data" method="POST">
                                    {{csrf_field()}}	
                                    <div class="form-group">
                                        <label>اختر الزائر</label>
                                        <select name="visiter_id" required class="form-control">
                                        @foreach ($visiter as $r)
                                            <option value="{{$r->id}}">{{$r->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
									<div class="form-group">
                                            <label>تاريخ الوصول</label>
                                            <input type="date" name="start_date" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>تاريخ المغادرة</label>
                                            <input type="date" name="end_date" required class="form-control">
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label>اختر الطابق</label>
                                            <select name="room_id" required class="form-control">
                                            @foreach ($room as $r)
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