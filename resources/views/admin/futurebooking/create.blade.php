@extends('layouts.Admin.modal')
@section($id)
<div class="panel panel-default">
                        <div class="panel-heading">
                           ادخال بيانات انواع المحتوي
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{request()->root()}}/admin/componentsType/add" accept-charset="UTF-8" enctype="multipart/form-data" method="POST">
									{{csrf_field()}}	
									<div class="form-group">
                                            <label>نوع المحتوى</label>
                                            <input type="text" name="name" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label> السعر</label>
                                            <input type="text" name="price" required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>اختر المحتوى</label>
                                            <select name="component_id" required class="form-control">
                                            @foreach($comp as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>صورة</label>
                                            <input type="file" required name="file">
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
