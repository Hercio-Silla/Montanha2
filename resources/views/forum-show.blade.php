<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/admin/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap-theme.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/css/ionicons.min.css">

    <link rel="stylesheet" href="/assets/css/puredesign.css">

    <link rel="stylesheet" href="/assets/css/flexslider.css">

    <link rel="stylesheet" href="/assets/css/owl.carousel.css">

    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/css/jquery.fullPage.css">

    <link rel="stylesheet" href="/assets/forum/assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/forum/assets1/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="/assets/forum/assets1/slick/slick.css">
    <link rel="stylesheet" href="/assets/forum/assets1/slick/slick-theme.css">
    <link rel="stylesheet" href="/assets/forum/assets1/elagent-icon/style.css">
    <link rel="stylesheet" href="/assets/forum/assets1/animation/animate.css">
    <link rel="stylesheet" href="/assets/forum/css1/style.css">
    <link rel="stylesheet" href="/assets/forum/css1/responsive.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
      
        <div id="myloader">
            <span class="loader">
                <div class="inner-loader"></div>
            </span>
        </div>
        
        <div id="main-wrap" class="full-width">
            <header id="header" class="fixed transparent full-width">
                <div class="container">
                    <nav class="navbar navbar-default white">
                        <div id="logo">
                            <a class="navbar-brand" href="/montanha">
                                <img src="/assets/img/logo1.png" class="normal" alt="logo">
                                <img src="/assets/img/logo1.png" class="retina" alt="logo">
                                <img src="/assets/img/logoputih.png" class="normal white-logo" alt="logo">
                                <img src="/assets/img/logo1.png" class="retina white-logo" alt="logo">
                            </a>
                        </div>
                        @include('component.topbar')
                        <div id="menu-responsive-classic">
                            <div class="menu-button">
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                            </div>
                        </div>
                        <div id="search-box" class="full-width">
                            <form role="search" id="search-form" class="black big">
                                <div class="form-input">
                                    <input class="form-field black big" type="search" placeholder="Search...">
                                    <span class="form-button big">
                                            <button type="button">
                                                <i class="icon ion-ios-search"></i>
                                            </button>
                                        </span>
                                </div>
                            </form>
                            <button class="close-search-box">
                                    <i class="icon ion-ios-close-empty"></i>
                                </button>
                        </div>
                    </nav>
                </div>
            </header>
            
           <div id="page-content" class="header-static footer-fixed">
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(/assets/img/forum.jpg)">
                            <div class="container text text-center">
                                <h1 class="white margin-bottom-small">Forum Tanggapan</h1>
                                <p class="heading white">Bagikan Tanggapan Anda</p>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                </div>
                <div id="page-wrap" class="content-section fullpage-wrap grey-background">
                    <div class="container text">
                    <section class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    @if(\Session::get('message'))
                                    <div class="alert alert-primary" role="alert">
                                        {{ \Session::get('message') }}
                                    </div>
                                    @endif
                                    
                                    {{-- Content --}}

                                    <!-- Forum post top area -->
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="forum-post-top">
                                                <a class="author-avatar" href="#">
                                                    <img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" alt="" width="50">
                                                </a>
                                                <div class="forum-post-author">
                                                    <a class="author-name" href="#"> {{ $question->user->name ?? "Guest" }} </a>
                                                    <div class="forum-author-meta">
                                                        <div class="author-badge">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                                                <path fill-rule="evenodd"  fill="rgb(131, 135, 147)"
                                                                    d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z"/>
                                                            </svg>
                                                            <span>{{ $question->user->email ?? "Guest" }}</span>
                                                        </div>
                                                        <div class="author-badge">
                                                            <i class="icon_calendar"></i>
                                                            <a href="">{{ $question->created_at->format('D M Y H:i') . ' WIB' }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Forum post content -->
                                    <div class="q-title">
                                        <span class="question-icon" title="Question">Q:</span>
                                        <h1>{{ $question->title }}</h1>
                                        {{-- <a href="#" class="badge">Features</a> --}}
                                    </div>
                                    <div class="forum-post-content">
                                        <div class="content">
                                            {!! $question->description !!}
                                        </div>
                                        <div class="forum-post-btm">
                                            <div class="taxonomy forum-post-tags">
                                                <i class="icon_tags_alt"></i>
                                                <a href="#">{{ $question->tag }}</a>
                                            </div>
                                            <div class="taxonomy forum-post-cat">
                                                <img src="img/forum/logo-favicon.png" alt=""><a href="#">Montanha</a>
                                            </div>
                                        </div>

                                        @if(auth()->check())
                                        <div class="action-button-container action-btns">
                                            <button class="action_btn btn-ans ask-btn reply-btn" id="reply-btn">Balas</button>
                                        </div>

                                        <div class="reply-section mt-3" hidden>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Balas</h5>
                                                </div>
                                                <div class="card-body">
                                                    <form class="d-flex flex-column" action="{{ route('forum-answer.store') }}" method="post">
                                                        @csrf
                                                        <input type="text" value="{{ auth()->user()->id }}" name="user_id" hidden>
                                                        <input type="text" value="{{ $question->id }}" name="question_id" hidden>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Deskripsi</label>
                                                            <textarea name="description" required class="form-control" id="" cols="3" rows="3" name="description"></textarea>
                                                        </div>

                                                        <button type="submit" class="action_btn btn-ans ask-btn reply-btn">Kirim</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    <!-- All answer -->
                                    <div class="all-answers">
                                        <h3 class="title">Semua Balasan</h3>

                                        @foreach ($question->answers as $answer)
                                        <div class="forum-comment">
                                            <div class="forum-post-top">
                                                <a class="author-avatar" href="#">
                                                    <img src="https://icons.veryicon.com/png/o/miscellaneous/two-color-icon-library/user-286.png" alt="author avatar" width="50">
                                                </a>
                                                <div class="forum-post-author">
                                                    <a class="author-name" href="#">{{ $answer->user->name }}</a>
                                                    <div class="forum-author-meta">
                                                        <div class="author-badge">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                                                <path fill-rule="evenodd"  fill="rgb(131, 135, 147)"
                                                                    d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z"/>
                                                            </svg>
                                                            <span>{{ $answer->user->email }}</span>
                                                        </div>
                                                        <div class="author-badge">
                                                            <i class="icon_calendar"></i>
                                                            <a href="">{{ $answer->created_at->format('d M Y H:i') . ' WIB' }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>{!! $answer->description !!}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
                    <div class="row margin-leftright-null color-background">
                        <!-- <div class="col-md-12 text text-center">
                            <h4 class="big white margin-bottom-small">Would you like more info about other trips?</h4>
                            <a href="#" target="_blank" class="btn-alt small white margin-null active shadow">Contact us</a>
                        </div> -->
                    </div>
                </div>
            </div>
            
            <!--  Footer. Class fixed for fixed footer  -->
        <footer class="fixed full-width">
            <div class="container">
                <div class="row no-margin" style="display: flex;flex-direction: row;justify-content: center;column-gap: 200px;">
                      
                    <div class="col-sm-4 col-md-2 padding-leftright-null">
                        <h6 class="heading white margin-bottom-extrasmall"><u>Contacts</u></h6>
                        <ul class="info">
                            <!-- <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i> Seismo Group</a></li> -->
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> @montanha</a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> @montanha</a></li>
                            <li><a href="#"><i class="" aria-hidden="true"></i> +62 08123456789</a></li>
                            <li><a href="#"><i class="" aria-hidden="true"></i> montanha@gmail.com</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-4 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall"><u>Address</u></h6>
                            <ul class="info">
                                <li><a href="https://goo.gl/maps/MWKTrmCoqMSqpR3F8" target="_blank" rel="noopener">Jl.Imam Bonjol No.03<br>Kelurahan Pendrikan Kidul</br>Kecamatan Semarang Tengah</br>
                                Kota Semarang, Jawa Tengah, Indonesia</br></a></li>
                            </ul>
                    </div>
                    
                </div>

                <div class="copy">
                    <div class="row no-margin">
                        <div class="col-md-8 padding-leftright-null">
                            &copy; 2023 Montanha - Hiking &amp; made by <a href="http://www.patrickdavid.it">Seismo Group</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Popup itself -->
            <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
                You may put any HTML here. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.
            </div>
              
        </div>
        
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.flexslider-min.js"></script>
        <script src="/assets/js/jquery.fullPage.min.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/isotope.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>
        <script src="/assets/js/smooth.scroll.min.js"></script>
        <script src="/assets/js/jquery.appear.js"></script>
        <script src="/assets/js/jquery.countTo.js"></script>
        <script src="/assets/js/jquery.scrolly.js"></script>
        <script src="/assets/js/plugins-scroll.js"></script>
        <script src="/assets/js/imagesloaded.min.js"></script>
        <script src="/assets/js/pace.min.js"></script>
        <script src="/assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </body>
</html>


<script>
    $(document).ready(function() {
        $(".select2").select2({
            width: '100%',
        });

        @if(request()->has('type'))
        $('#ask-modal').modal('show'); 
        @endif

        $('#reply-btn').on('click', function(e) {
            e.preventDefault();
            
            $(this).attr('hidden', true)
            $('.reply-section').attr('hidden', false)
        })

        $('#login-modal').on('show.bs.modal', function () {
            let modal_el = $(this);
            modal_el.addClass('show');
        })

        $('#login-modal').on('hide.bs.modal', function () {
            let modal_el = $(this);
            modal_el.removeClass('show');
        })

        $('#view-modal').on('show.bs.modal', function () {
            let modal_el = $(this);
            modal_el.addClass('show');
        })

        $('#view-modal').on('hide.bs.modal', function () {
            let modal_el = $(this);
            modal_el.removeClass('show');
        })
    })
</script>
