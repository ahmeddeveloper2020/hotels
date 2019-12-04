@extends('layouts.layouts')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> بيانات الزوار</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#create-visiter">
                        اضافة
</button>

                        @include('admin.visiter.create',['id' => 'create-visiter'])
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            <th>النوع</th>
                                            <th>الحالة الاجتماعية</th>
                                            <th>الهاتف</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
										@foreach($data as $d)
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->gender == '1' ? 'ذكر':'انثي'}}</td>
                                            <td>{{$d->social_status == '1' ? 'اعزب':'متزوج'}}</td>
                                            <td>{{$d->phone}}</td>
											<td>
                                            <a name="" id="" class="btn btn-warning" data-toggle="modal" data-target="#update-visiter-{{ $d->id }}" href="{{request()->root()}}/floor/visiter/{{$d->id}}" role="button">تعديل </a>
                                            @include('admin.visiter.update',['id' => 'update-visiter-'.$d->id, 'edit' => $d])
                                            </td>
			                                <td><a name="" id="" class="btn btn-danger" href="{{request()->root()}}/visiter/destroy/{{$d->id}}" role="button">حذف </a></td>
                                        
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