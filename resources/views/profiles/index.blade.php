@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 25" class="rounded-circle"><path d="M16.5 13.5c0 .828-.56 1.5-1.25 1.5s-1.25-.672-1.25-1.5.56-1.5 1.25-1.5 1.25.672 1.25 1.5zm-7.75-1.5c-.69 0-1.25.672-1.25 1.5s.56 1.5 1.25 1.5 1.25-.672 1.25-1.5-.56-1.5-1.25-1.5zm15.25 2.313c0 1.765-.985 3.991-3.139 4.906-2.063 3.295-4.987 5.781-8.861 5.781-3.741 0-6.846-2.562-8.861-5.781-2.154-.916-3.139-3.142-3.139-4.906 0-2.053.754-3.026 1.417-3.489-.39-1.524-1.03-5.146.963-7.409.938-1.065 2.464-1.54 4.12-1.274.719-1.532 3.612-2.141 5.5-2.141 3 0 6.609.641 9.141 3.516 1.969 2.236 1.648 5.741 1.388 7.269.676.446 1.471 1.419 1.471 3.528zm-9.6 4.687h-4.8s.678 1.883 2.4 1.883c1.788 0 2.4-1.883 2.4-1.883zm7.063-6.508c-4.11.393-7.778-3.058-9.073-5.274-.081.809.186 2.557.969 3.355-3.175.064-5.835-1.592-7.46-3.868-.837 1.399-1.242 3.088-1.242 4.775 0 .722-.746 1.208-1.406.914-.14-.063-.436-.101-.671.053-1 .648-.895 4.183 1.553 5.012.224.076.413.228.536.43.655 1.086 1.354 1.98 2.086 2.722.922.633 1.056-1.875 1.667-2.72.686-.949 2.455-1.126 3.578-.322 1.124-.804 2.892-.627 3.578.322.611.846.745 3.354 1.667 2.72.731-.741 1.43-1.636 2.086-2.722.123-.202.313-.354.536-.43 2.363-.8 2.596-4.185 1.596-4.967z"/></svg>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }} </strong>posts</div>
                <div class="pr-5"><strong>123k </strong>followers</div>
                <div class="pr-5"><strong>123 </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
