@extends('layouts.modal')
@section($id)
<div class="panel panel-default">
                        <div class="panel-heading">
                            ادخال بيانات الزوار 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{request()->root()}}/visiter/store" accept-charset="UTF-8" enctype="multipart/form-data" method="POST">
									{{csrf_field()}}	
									<div class="form-group">
                                            <label>الاسم</label>
                                            <input type="text" name="name" required class="form-control">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>اختر النوع</label>
                                            <select name="gender" required class="form-control">
                                                    <option value="1">ذكر</option>
                                                    <option value="2">انثي</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>اختر النوع</label>
                                            <select name="social_status" required class="form-control">
                                                    <option value="1">اعزب</option>
                                                    <option value="2">متزوج</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>الهاتف</label>
                                            <input type="text" name="phone" required class="form-control">
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