@extends('layouts.Admin.layouts')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> نوع المحتويات</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ادخال بيانات نوع المحتوي
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#create-component-type">
                        اضافة
</button>
@include('admin.componentsType.create',['id' => 'create-component-type'])
<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            <th>المحتوي</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										@foreach($co as $p)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$p->name}}</td>
                                            <td>{{$p->component->name}}</td>
                                            

											<td>
                                                <a name="" id="" class="btn btn-warning" data-toggle="modal" data-target="#update-comT-{{ $p->id }}"  role="button">تعديل </a>
                                                @include('admin.componentsType.update',['id' => 'update-comT-'.$p->id, 'edit' => $p])
                                            </td>
			                                <td><a name="" id="" class="btn btn-danger" href="{{request()->root()}}/admin/componentsType/delete/{{$p->id}}" role="button">حذف </a></td>
                                            <td><a name="" id="" class="btn btn-primary"  data-toggle="modal" data-target="#photo-{{ $p->id }}" href="{{request()->root()}}/admin/componentsType/view/{{$p->photos_id}}">عرض الصورة </a>
                                            @include('photo',['id' => 'photo-'.$p->id, 'photo' => $p])
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                      
					
				
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        @endsection