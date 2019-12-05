@extends('layouts.layouts')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">الحجز المبدئي</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#create-futurebooking">
                        اضافة
</button>

                        @include('admin.futurebooking.create',['id' => 'create-futurebooking'])
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            <th>من تاريخ</th>
                                            <th>الي تاريخ</th>
                                            <th>المدة </th>
                                            <th>الغرفة</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
										@foreach($data as $d)
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$d->visiter->name}}</td>
                                            <td>{{$d->start_date}}</td>
                                            <td>{{$d->end_date}}</td>
                                            <td>{{$d->duration}}</td>
                                            <td>{{$d->room->name}}</td>
											<td>
                                            <a name="" id="" class="btn btn-warning" data-toggle="modal" data-target="#update-futurebooking-{{ $d->id }}" href="{{request()->root()}}/floor/futurebooking/{{$d->id}}" role="button">تعديل </a>
                                            @include('admin.futurebooking.update',['id' => 'update-futurebooking-'.$d->id, 'edit' => $d])
                                            </td>
			                                <td><a name="" id="" class="btn btn-danger" href="{{request()->root()}}/futurebooking/destroy/{{$d->id}}" role="button">حذف </a></td>
                                        
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