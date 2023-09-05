@extends('layouts.master')
@section('page_title', 'Green University Student MarkSheet')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title font-weight-bold">Fill The Form To Manage Marks</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            @include('pages.support_team.marks.selector')
        </div>
    </div>

    <div class="card">
                     @include('pages.support_team.marks.edit')
            {{--@include('pages.support_team.marks.random')--}}
    </div>

    {{--Marks Manage End--}}

@endsection
