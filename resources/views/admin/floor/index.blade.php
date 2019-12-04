@extends('layouts.layouts')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">الطوايق</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#create-floor">
                        اضافة
</button>

                        @include('admin.floor.create',['id' => 'create-floor'])
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
										@foreach($floor as $f)
                                            <td>{{$loop->iteration}}</td>
											<td>{{$f->name}}</td>
											<td>
                                            <a name="" id="" class="btn btn-warning" data-toggle="modal" data-target="#update-floor-{{ $f->id }}" href="{{request()->root()}}/floor/edit/{{$f->id}}" role="button">تعديل </a>
                                            @include('admin.floor.update',['id' => 'update-floor-'.$f->id, 'edit' => $f])
                                            </td>
			                                <td><a name="" id="" class="btn btn-danger" href="{{request()->root()}}/floor/destroy/{{$f->id}}" role="button">حذف </a></td>
                                        
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