@extends('layouts.layouts')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">فئات الغرف</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#create-roomclass">
                        اضافة
</button>

                        @include('admin.roomclass.create',['id' => 'create-roomclass'])
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            <th>وصف</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
										@foreach($data as $d)
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->discription}}</td>
											<td>
                                            <a name="" id="" class="btn btn-warning" data-toggle="modal" data-target="#update-roomclass-{{ $d->id }}" href="{{request()->root()}}/floor/roomclass/{{$d->id}}" role="button">تعديل </a>
                                            @include('admin.roomclass.update',['id' => 'update-roomclass-'.$d->id, 'edit' => $d])
                                            </td>
			                                <td><a name="" id="" class="btn btn-danger" href="{{request()->root()}}/roomclass/destroy/{{$d->id}}" role="button">حذف </a></td>
                                        
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