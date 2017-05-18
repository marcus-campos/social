@extends('template')

@section('container')
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <div class="profile-detail card-box">
                <div>
                    <img src="{{ $profile->photo }}" class="img-circle" alt="profile-image">

                    <ul class="list-inline status-list m-t-20">
                        <li>
                            <h3 class="text-primary m-b-5">0</h3>
                            <p class="text-muted">Amigos</p>
                        </li>

                        <li>
                            <h3 class="text-success m-b-5">0</h3>
                            <p class="text-muted">Seguidores</p>
                        </li>
                    </ul>

                    <button type="button" class="btn btn-pink btn-custom btn-rounded waves-effect waves-light">Seguir</button>

                    <hr>
                    <h4 class="text-uppercase font-600">Sobre</h4>
                    <p class="text-muted font-13 m-b-30">
                        {{ $profile->description }}
                    </p>

                    <div class="text-left">
                        <p class="text-muted font-13"><strong>Nome :</strong> <span class="m-l-15">{{ $profile->name }}</span></p>

                        <p class="text-muted font-13"><strong>Telefone :</strong><span class="m-l-15">{{ $profile->phone }}</span></p>

                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ \Illuminate\Support\Facades\Auth::user()->email }}</span></p>

                        <p class="text-muted font-13"><strong>Cidade :</strong> <span class="m-l-15">{{ $profile->city }}</span></p>

                    </div>

                </div>

            </div>

            {{--<div class="card-box">
                <h4 class="m-t-0 m-b-20 header-title"><b>Friends <span class="text-muted">(154)</span></b></h4>

                <div class="friend-list">
                    <a href="#">
                        <img src="assets/images/users/avatar-1.jpg" class="img-circle thumb-md" alt="friend">
                    </a>

                    <a href="#">
                        <img src="assets/images/users/avatar-2.jpg" class="img-circle thumb-md" alt="friend">
                    </a>

                    <a href="#">
                        <img src="assets/images/users/avatar-3.jpg" class="img-circle thumb-md" alt="friend">
                    </a>

                    <a href="#">
                        <img src="assets/images/users/avatar-4.jpg" class="img-circle thumb-md" alt="friend">
                    </a>

                    <a href="#">
                        <img src="assets/images/users/avatar-5.jpg" class="img-circle thumb-md" alt="friend">
                    </a>

                    <a href="#">
                        <img src="assets/images/users/avatar-6.jpg" class="img-circle thumb-md" alt="friend">
                    </a>

                    <a href="#">
                        <img src="assets/images/users/avatar-7.jpg" class="img-circle thumb-md" alt="friend">
                    </a>

                    <a href="#" class="text-center">
                        <span class="extra-number">+89</span>
                    </a>
                </div>
            </div>--}}
        </div>


        <div class="col-lg-9 col-md-8">
            <div class="card-box">
                @foreach($posts as $post)
                    <div class="comment">
                        <img src="{{ $post->profile->photo }}" alt="" class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="{{ route('profile.index', ['id' => $post->profile->id])  }}" title="">{{ $post->profile->name }}</a><span>{{ $post->created_at }}</span>
                                </div>
                                {{ $post->content }}
                            </div>
                            <div class="comment-footer">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="m-t-30 text-center">
                        {!! $posts->links() !!}
                    </div>
            </div>
        </div>

    </div>

@endsection