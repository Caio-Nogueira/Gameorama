@extends('layouts.app')
@section('content')
    @include('partials.navbar')
    @push('scripts')
        <script defer src = {{ asset('js/ajax.js') }}></script>
        <script defer src = {{ asset('js/search.js') }}></script>
        <script defer src = {{ asset('js/search_follows.js') }}></script>
        <script defer src = {{ asset('js/report.js') }}></script>
    @endpush
<section class="container g-0 mx-auto my-4 col-lg-7 ">
    <header class="p-4 p-lg-5 mb-3 bg-white rounded" style="height:fit-content">
        <h3 class="mb-3 color-orange">Results for</h3>
        <h2 id="query" class="fw-bold">{{$query}}</h2>
    </header>

    <section class="pill-navigation mb-1">
        <ul class="nav nav-pills mb-1 justify-content-space-between bg-white rounded" id="pills-tab"
            role="tablist">
            <li class="nav-item col" role="presentation">
                <button class="nav-link active w-100" id="pills-posts-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-posts" type="button" role="tab" aria-controls="pills-posts"
                    aria-selected="false">Posts</button>
            </li>
            <li class="nav-item col" role="presentation">
                <button class="nav-link w-100" id="pills-topics-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-topics" type="button" role="tab" aria-controls="pills-topics"
                    aria-selected="false">Topics</button>
            </li>
            <li class="nav-item col" role="presentation">
                <button class="nav-link w-100" id="pills-members-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-members" type="button" role="tab" aria-controls="pills-members"
                    aria-selected="false">Members</button>
            </li>
        </ul>

        <div class="tab-content " id="pills-tabContent">
            <div class="tab-pane fade show active reportable" id="pills-posts" role="tabpanel" aria-labelledby="pills-posts-tab">
                <section id="posts"></section>
            </div>
            <div class="tab-pane fade" id="pills-topics" role="tabpanel" aria-labelledby="pills-topics-tab">
                <section id="topics"></section>
            </div>
            <div class="tab-pane fade" id="pills-members" role="tabpanel" aria-labelledby="pills-members-tab">
                <section id="members"></section>
            </div>
        </div>
    </section>
    
</section>
@include('partials.report_post')
@include('partials.footer')
@endsection
