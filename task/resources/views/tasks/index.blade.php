@extends('layouts.master')


@section('content')

    <div class="row mt-5">
        
        <div class="col-md-6">

<!--             @if($errors->any())

                @foreach ($errors->all() as $error)

                    <div class="alert alert-danger">
                        {{$error}}
                    </div>

                @endforeach

            @endif 
            
            jer moze i jednostavnije-->
            <!-- vrijedi i za delete i za create jer lovim iz sessije -->
            @if(session()->has('msg'))

                <div class="alert alert-success">   {{session()->get('msg')}}   </div>

            @endif

            <div class="card">
        
                <div class="card-header">
        
                    Head of card.
        
                </div>
    
                <div class="card-body">

                    <form action="{{ route('task.create') }}" method="post">

                        @csrf

                        <div class="form-group">
                            <label for="task">Task</task>
                            <!-- hrani fillable var u Task-u -->
                            <input type="text" name="title" id="task" placeholder="task" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}">
                            <div class="invalid-feedback">
                                {{$errors->has('title') ?  $errors->first('title') : ''}}
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>     

                    </form>

                </div>

            </div>

        </div>

    </div>

    <div class="row mt-5">
        
        <div class="col-md-6">
        
            <div class="card">
        
                <div class="card-header">
        
                    View Tasks
        
                </div>
    
                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>
                            <th>Task</th>
                            <th class="table-cell-action">Action</th>
                        </tr>

                        @foreach ($tasks as $task)

                            <tr>
                                <td>{{ $task->title }}</td>
                                <td >
                                    <form action="{{ route('task.delete', $task->id) }}" method="post">
                                         @csrf
                                         @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"> Delete </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection