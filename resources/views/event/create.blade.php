@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="main__add">
            <div class="main__b">
                <div class=""><h1>Add new EVENT</h1></div>
            </div>
        <div class="">
            <form action="{{ route('events.store') }}" id="book-form" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" class="">Title</label>
                    <input type="text" name="title" placeholder="Заголовок события"
                           class="form-control @error('title') border-red-500 @enderror" value="{{ old('title') }}">
                    @error('title')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="body" class="">Body</label>
                    <input type="body" name="body" placeholder="Добавить событие"
                           class="form-control  @error('body') border-red-500 @enderror" value="">
                    @error('body')
                    <div class="text-red-500">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

