<!-- thừa kế từ app.blade.php -->
@extends('layout.app')
<!-- Nội dung trang con  -->
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <!-- Hiển thị thông báo lỗi -->
            @include('errors.503') 
           <!-- form nhập thông tin -->
           <form action="{{url('tasks')}}" method="POST" class="form-horizontal" role="form">
                   {{csrf_field()}}
                   <div class="form-group">
                        <label class="col-sm-2 control-label">Tasks</label>
                        <div class="col-sm-10">
                          <input class="form-control" id="task-name" type="text" name="name">
                        </div>
                      </div>
                   <div class="form-group">
                       <div class="col-sm-10 col-sm-offset-2">
                           <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                   </div>
           </form>
        </div>
    </div>
    {{-- Hiển thị all task --}}
    @if (count($tasks)>0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Show Tasks
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Task</th>
                            <th>Create at</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->name}}</td>
                                <td>{{$task->created_at}}</td>
                                <td>
                                    <form action="tasks/{{$task->id}}" method="POST" >
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger">Delete Task</button>
                                        <input type="hidden" name="method" value="DELETE" >
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    @endif
@endsection
        