@extends('layout')

@section('content')
<div class ="container">
    <div class = "card">
        <div class ="card-header">
            <div class ="row">
                <div class ="col-md-6">
                    <h3> Employees Details </h3>
                </div>
                <div class="col-md-6">
                    <a href ="{{route('journals.create')}}" class="btn btn-primary float-end">+ Add new journal</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('Notification'))
            <div class="alert alert-success">
                {{Session::get('Notification')}}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>JID</th>
                    <th>Title</th>
                    <th>Editor</th>
                    <th>ISSN</th>
                    <th>PublicationDate</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($journals as $journal)
                    <tr>
                    <td>{{$journal->id}}</td>
                    <td>{{$journal->title}}</td>
                    <td>{{$journal->editor}}</td>
                    <td>{{$journal->issn}}</td>
                    <td>{{$journal->publication_date}}</td>
                    <td>
                        <div class="d-flex">
                           <a href="{{ route('journals.edit', $journal->id) }}" class="btn btn-info me-2">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                    <form action="{{ route('journals.destroy', $journal->id) }}" method="POST">
                    @csrf
                   @method('DELETE')
                           <button type="submit" class="btn btn-danger me-2">
                                <i class="bi bi-trash"></i>
                            </button>
                    </form>
                            <a href="{{ route('journals.show', $journal->id) }}" class="btn btn-primary">
                                 <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </td>

                    <!-- <td>
                        <form action="{{route('journals.destroy', $journal->id)}}" METHOD ="POST">
                            <a href="{{route('journals.edit', $journal->id)}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            <a href="{{route('journals.show', $journal->id)}}"><i class="fa-solid fa-eye"></i></a>
                        </form>
                    </td> -->
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

