@extends('layouts.frame')

@section('insidesection')

    <div class="banner-section">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">

                    <li>
                        <div class="slider-info">
                            <img src="images/slider-3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>Luxury</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-info">
                            <img src="images/slider-2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>Professional</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-info">
                            <img src="images/slider-1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>Welcome to Valkyria</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(function () {
                SyntaxHighlighter.all();
            });
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- FlexSlider -->
        <!-- slider -->
    </div>
    <div class="header " >
        <div class="container">
            <div class="header-menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand logo">
                                <h1><a href="index.html"><span>Valkyria  </span> Hotel</a></h1>
                            </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/" data-hover="Home">Trang chủ </a></li>
                                <li><a data-hover="Phòng ở" href="/accommodation">Phòng ở</a></li>
                                <li><a data-hover="Căn hộ" href="/apartment">Căn hộ</a></li>
                                <li><a data-hover="Tổ chức sự kiện" href="/event">Tổ chức sự kiện</a></li>
                                <li><a data-hover="Nhà hàng" href="/restaurant">Nhà hàng</a></li>


                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="welcome">
        <div class="container">
            @include('blocks.error')
            @include('blocks.message')
        <div class="container col-lg-3">
            <form action="{!! route('postResult') !!}" method="POST">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                <div class="form-group">
                    <label>Check In</label>
                    <input id="datepickerin" class="form-control" name="txtDateIn" placeholder="Please Enter Date Input" />
                </div>
                <div class="form-group">
                    <label>Check Out</label>
                    <input id="datepickerout" class="form-control" name="txtDateOut" placeholder="Please Enter Date Input" />
                </div>
                <div class="form-group">
                    <label>Check Out</label>
                    <input id="datepickerabc" class="form-control" name="txtDateaaa" placeholder="Please Enter Date Input" />
                </div>
                <div class="form-group">
                    <label>Type Of Room</label>
                    <select class="form-control" name="sltType">
                        <option value="0">Please Type Room</option>
                        @foreach($types as $item_type)
                            <option value="{!! $item_type['id'] !!}">{!! $item_type['name'] !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Number Of People</label>
                    <select class="form-control" name="sltNumber">
                        <option value="0">Please Choose Number</option>
                        @for($i = 1; $i < 11; $i++)
                            <option value="{!! $i !!}">{!! $i !!}</option>
                        @endfor
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Category Add</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
        </div>
        </div>
        <div class="container">
            <h2 class="tittle">Chào mừng quý khách đến với Valkyria</h2>
            <p class="wel text">Tọa lại tại vị trí đắc địa của thủ đô, nơi gần các trung tâm văn hóa, thương
                                mại, tài chính, sân bay Nội Bài và các cơ quan ngoại giao của chính phủ, khách sạn
                                Valkyria là một trong những khách sạn 5 sao đầu tiên với lối kiến trúc tinh
                                tế và tầm nhìn bao quát quang cảnh thành phố thơ mộng.</p>
            <p class="wel text">
                Kể từ ngày đầu thành lập đến nay, khách sạn Valkyria đã trở thành sự lựa chọn
                hàng đầu của du khách trong và ngoài nước đến nghỉ ngơi, thư giãn hay trong những chuyến công tác
                của mình. Khách hàng sẽ được tận hưởng không gian tự nhiên giữa lòng thành phố, vị trí
                thuận tiện gần những danh lam thằng cảnh nổi tiếng của đất nước, chất lượng phục vụ đẳng
                cấp và dịch vụ phòng ở vô cùng hiện đại.
            </p>


            <div class="wel-grids">
                <div class="col-md-3 wel-grid">
                    <a href="/accommodation"><img src="images/f1.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>Phòng ở </h4>
                    <p>Tận hưởng phòng ở thượng hạng tại khách sạn Valkyria.
                    </p>
                </div>
                <div class="col-md-3 wel-grid">
                    <a href="/apartment"><img src="images/f2.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>Căn hộ </h4>
                    <p> Tận hưởng dịch vụ căn hộ đẳng cấp, hiện đại, tiện nghi.</p>
                </div>
                <div class="col-md-3 wel-grid">
                    <a href="/event"><img src="images/f3.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>Tổ chức sự kiện</h4>
                    <p>Tổ chức Hội nghị, Hội thảo, Sự kiện và Tiệc cưới theo cách chuyên nghiệp.</p>
                </div>
                <div class="col-md-3 wel-grid">
                    <a href="/restaurant"><img src="images/f4.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>Nhà hàng sang trọng</h4>
                    <p>Tận hưởng tinh hoa và đẳng cấp ẩm thực bậc nhất.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection