@extends('template')

@section('container')
    <div class="row">

        <div class="col-lg-12 col-md-12">
            {!!  Form::open(['url' => route('post.store'), 'method' => 'post', 'class' => 'well']) !!}
                                    <span class="input-icon icon-right">
                                        <textarea name="content" rows="2" class="form-control"
                                                  placeholder="O que você está sentindo?"></textarea>
                                    </span>
                <div class="p-t-10 pull-right">
                    <button class="btn btn-sm btn-primary waves-effect waves-light" type="submit" >Publicar</button>
                </div>
                <ul class="nav nav-pills profile-pills m-t-10">
                    <li>
                        <a href="#" ><i class="fa fa-user"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-location-arrow"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class=" fa fa-camera"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-smile-o"></i></a>
                    </li>
                </ul>

            {!! Form::close() !!}

            <div class="card-box">
                {{--<div class="comment">
                    <img src="assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                    <div class="comment-body">
                        <div class="comment-text">
                            <div class="comment-header">
                                <a href="#" title="">Adam Jansen</a><span>about 2 minuts ago</span>
                            </div>
                            Story based around the idea of time lapse, animation to post soon!

                            <div class="m-t-15">
                                <a href="">
                                    <img src="assets/images/small/img1.jpg" class="thumb-md">
                                </a>
                                <a href="">
                                    <img src="assets/images/small/img2.jpg" class="thumb-md">
                                </a>
                                <a href="">
                                    <img src="assets/images/small/img3.jpg" class="thumb-md">
                                </a>
                            </div>
                        </div>

                        <div class="comment-footer">
                            <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                            <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                            <a href="#">Reply</a>
                        </div>
                    </div>

                    <div class="comment">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="#" title="">John Smith</a><span>about 1 hour ago</span>
                                </div>
                                Wow impressive!
                            </div>
                            <div class="comment-footer">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div class="comment">
                        <img src="assets/images/users/avatar-3.jpg" alt=""
                             class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="#" title="">Matt
                                        Cheuvront</a><span>about 2 hours ago</span>
                                </div>
                                Wow, that is really nice.
                            </div>
                            <div class="comment-footer">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                <a href="#">Reply</a>
                            </div>
                        </div>

                        <div class="comment">
                            <img src="assets/images/users/avatar-4.jpg" alt=""
                                 class="comment-avatar">
                            <div class="comment-body">
                                <div class="comment-text">
                                    <div class="comment-header">
                                        <a href="#" title="">Stephanie
                                            Walter</a><span>3 hours ago</span>
                                    </div>
                                    Nice work, makes me think of The Money Pit.
                                </div>
                                <div class="comment-footer">
                                    <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
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