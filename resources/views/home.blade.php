@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="https://scontent-syd2-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com&_nc_ohc=Qs0j1hhrQ-IAX_8vGqf&tp=1&oh=173771a0c1049c9564118a883026ce38&oe=603FF9E7" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>123 </strong>posts</div>
                <div class="pr-5"><strong>123k </strong>followers</div>
                <div class="pr-5"><strong>123 </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-syd2-1.cdninstagram.com/v/t51.2885-15/e35/c2.0.824.824a/s320x320/143377875_747593889489606_5323934135154740495_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=4dEPFR913mEAX8PrrK0&tp=1&oh=6f892167e48e470e60681def9f87d906&oe=603F0DAE" alt="">
        </div>
        <div class="col-4">
            <img src="https://scontent-syd2-1.cdninstagram.com/v/t51.2885-15/e35/c2.0.824.824a/s320x320/143377875_747593889489606_5323934135154740495_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=4dEPFR913mEAX8PrrK0&tp=1&oh=6f892167e48e470e60681def9f87d906&oe=603F0DAE" alt="">
        </div>
        <div class="col-4">
            <img src="https://scontent-syd2-1.cdninstagram.com/v/t51.2885-15/e35/c2.0.824.824a/s320x320/143377875_747593889489606_5323934135154740495_n.jpg?_nc_ht=scontent-syd2-1.cdninstagram.com&_nc_cat=106&_nc_ohc=4dEPFR913mEAX8PrrK0&tp=1&oh=6f892167e48e470e60681def9f87d906&oe=603F0DAE" alt="">
        </div>
    </div>
</div>
@endsection
