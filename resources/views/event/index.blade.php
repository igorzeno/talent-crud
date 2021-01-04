@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="main">
            <div class="main__b">
                <div class=""><h1>CRUD Admin</h1></div>
                <div class="admin__btn"><a href="{{route('events.create')}}" class="btn btn-success"> Create</a></div>
            </div>
            <div class="">
                <table class="table table-striped mt-5">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Body</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->body }}</td>
{{--                            <td>{{ $event->type }}</td>--}}
                            <td style="text-align:right;">
                                <a href="/events/{{ $event->id }}" class="btn btn-info">View</a>
                                <a href="/events/{{ $event->id }}/edit" class="btn btn-success">Edit</a>
                                <a href="/events/{{ $event->id  }}/destroy?return={{ urlencode($_SERVER['REQUEST_URI']??'1')}}" class="btn btn-danger">Dellete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="paginate">
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
