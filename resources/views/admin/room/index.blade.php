@extends('layouts.layouts')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> بيانات الفرف</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#create-room">
                        اضافة
</button>

                        @include('admin.room.create',['id' => 'create-room'])
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            <th>الفئة</th>
                                            <th>السعر</th>
                                            <th>الحالة </th>
                                            <th>الطابق </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
										@foreach($data as $d)
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->roomclass->name}}</td>
                                            <td>{{$d->price}}</td>
                                            <td>{{$d->status == '0' ? 'متاح':'غير متاح'}}</td>
                                            <td>{{$d->floor->name}}</td>
											<td>
                                            <a name="" id="" class="btn btn-warning" data-toggle="modal" data-target="#update-room-{{ $d->id }}" href="{{request()->root()}}/floor/room/{{$d->id}}" role="button">تعديل </a>
                                            @include('admin.room.update',['id' => 'update-room-'.$d->id, 'edit' => $d])
                                            </td>
			                                <td><a name="" id="" class="btn btn-danger" href="{{request()->root()}}/room/destroy/{{$d->id}}" role="button">حذف </a></td>
                                        
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
				</div>
                    </div>
					
				
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

@endsection