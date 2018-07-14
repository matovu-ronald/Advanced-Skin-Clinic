@extends('layouts.app')

@section('title')
{!! $page->title !!}
@endsection

@section('desc')
{!! $page->meta_description !!}
@endsection

@section('keywords')
{!! $page->meta_keywords !!}
@endsection

@section('content')
{!! $page->content !!}
@endsection
