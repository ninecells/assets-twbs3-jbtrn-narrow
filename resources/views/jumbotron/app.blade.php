@extends('ncells::jumbotron.main')

@section('meta')
<meta name="author" content="{{ config('author', '9Cells') }}">
<meta name="description" content="{{ config('description', '9Cells') }}">
<meta name="keywords" content="{{ config('keywords', '9Cells,9Cells,9Cells') }}">

<meta property="og:site_name" content="ModernPUG">
<meta property="og:image" content="{{ config('og:image') }}" />
<meta property="og:title" content="{{ config('og:title', '9Cells') }}" />
<meta property="og:description" content="{{ config('og:description', '9Cells') }}" />
@endsection

@section('title')
{{ config('title', '9Cells') }}
@endsection

@section('site-name', '9Cells')

@section('head')
<link href="/vendor/ninecells/assets-twbs3-jbtrn-narrow/plugins/footer-margin.css" rel="stylesheet">
@endsection

@section('header')
<div class="header clearfix">
    <nav>
        <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active">
                <a href="#">Menu1</a>
            </li>
            <li role="presentation">
                <a href="#">Menu2</a>
            </li>
        </ul>
    </nav>
    <h3 class="text-muted"><a href="/">9Cells</a></h3>
</div>
@endsection
