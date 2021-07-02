@extends('layouts.app4')

@section('css')
<style>
    .inline {
        display: inline;
    }
    .btn-custom {
        font-size: 12px !important;
        margin: 0px !important;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Practical Sessions') }} <a href="{{route('practicals.create')}}" class="btn btn-primary">New</a></div>
                @include('edu.partials.session')
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Overview</th>
                                <th scope="col">Lesson</th>
                                <th scope="col">Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($practicals as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->overview}}</td>
{{--                                    <td>{{$item->lesson()->first()->title}}</td>--}}
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{route('practicals.edit', ['practical' => $item->id])}}" class="btn btn-success btn-custom">edit</a>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{route('practicals.destroy', ['practical' => $item->id])}}" class="inline" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="submit" class="btn btn-danger btn-custom" value="delete">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
{{--                    {{$practicals->links()}}--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
