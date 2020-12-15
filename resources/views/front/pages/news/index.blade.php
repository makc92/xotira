@extends('layouts.page')

@section('page_styles')
    @livewireStyles
@endsection

@section('page_content')
    <livewire:front.show-news />
@endsection

@section('page_scripts')
    @livewireScripts
@endsection

