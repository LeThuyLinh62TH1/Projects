@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Add new journal</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('journals.index') }}" class="btn btn-primary float-end">Journalist</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('journals.show',$journal->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <strong>JID</strong>
                            <input type="text" name ="id" value="{{$journal->id}}" class="form-control" placeholder="Enter journal's id">
                        </div>
                        <div class="form-group">
                        <strong>Title</strong>
                            <input type="text" name ="title" value="{{$journal->title}}" class="form-control" placeholder="Enter journal's title">
                        </div>
                        <div class="form-group">
                        <strong>Editor</strong>
                        <input type="text" name ="editor" value="{{$journal->editor}}" class="form-control" placeholder="Enter journal's editor">
                        </div>
                        <div class="form-group">
                        <strong>ISSN</strong>
                            <input type="text" name ="issn" value="{{$journal->issn}}" class="form-control" placeholder="Enter ISSN" value="2049-3630">
                        </div>
                        <div class="form-group">
                        <strong>PublicationDate</strong>
                        <input type="text" name ="publication_date" value="{{$journal->publication_date}}" class="form-control" placeholder="Enter journal's Publication Date"">
                        </div>
                    </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection