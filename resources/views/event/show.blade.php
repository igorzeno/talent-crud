@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="main">
            <div class="main__b">
                <div class=""><h1>Show EVENT</h1></div>
                <div class="admin__btn"><a href="{{ route('events.index')}}" class="btn btn-success"> Вернуться обратно</a></div>
            </div>
            <div class="">
                <table class="table table-striped mt-5">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->body }}</td>
                            <td>{{ $event->created_at }}</td>
                            <td>{{ $event->updated_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
