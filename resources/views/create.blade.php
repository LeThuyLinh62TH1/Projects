@extends('layout')
@section('content')
<div class ="container">
    <div class = "card">
        <div class ="card-header">
            <div class ="row">
                <div class ="col-md-6">
                    <h3> Add new Journal</h3>
                </div>
                <div class="col-md-6">
                    <a href ="{{route('journals.index')}}" class="btn btn-primary float-end">Journals Details</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action ="{{route('journals.store')}}"method = "POST">
                @csrf 
                <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <strong>JID</strong>
                            <input type="text" name ="id" class="form-control" placeholder="Enter journal's id">
                        </div>
                        <div class="form-group">
                        <strong>Title</strong>
                            <input type="text" name ="title" class="form-control" placeholder="Enter journal's title">
                        </div>
                        <div class="form-group">
                        <strong>Editor</strong>
                        <input type="text" name ="editor" class="form-control" placeholder="Enter journal's editor">
                        </div>
                        <div class="form-group">
                        <strong>ISSN</strong>
                            <input type="text" name ="issn" class="form-control" placeholder="Enter ISSN" value="2049-3630">
                        </div>
                        <div class="form-group">
                        <strong>PublicationDate</strong>
                        <input type="text" name ="publication_date" class="form-control" placeholder="Enter journal's Publication Date"">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection