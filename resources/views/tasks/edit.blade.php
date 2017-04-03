@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">
                <div class="page-header">
                    <h3>Edit job: {{ $job->title }}</h3>
                </div>

                <form action="{{ route('tasks.edit', $job->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="title" class="form-control form-roll" value="{{ $job->title }}">
                    </div>
                    <div class="form-group">
                        <textarea name="body" cols="30" rows="10" class="form-control">{{ $job->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-default btn-sm">
                        <a href="{{ route('tasks.delete', $job->id) }}" class="btn btn-danger btn-sm pull-right">Delete</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

