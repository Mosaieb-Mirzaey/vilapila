@extends('present.master')
@section('page')
    <!--Banner-->
    <section Id="banner">
        <div class="bannerContent container">
            <div class="title text-white text-center pb-2">
                <h3 class="mb-3">اجاره و رزرو ویلا، سوئیت، خانه سنتی در سراسر ایران</h3>
                <h6 class="mb-5">رزرو هتل، رزرو هتل آپارتمان و خرید اینترنتی بلیط هواپیما و بلیط اتوبوس با بهترین قیمت در همه شهرهای ایران</h6>
            </div>
            <div class="dataBox p-2 mx-auto">
                <div class="search-background bg-transparent">
                    <div class="form row no-gutters ">
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="form-group input-city m-1 border-0">
                                <label for="seleCity">جستجوی شهر</label>
                                <input type="text" id="seleCity" class="form-control" placeholder="شهر مورد نظرتان را انتخاب کنید">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-12">
                            <div id="input-arrival-time" class="form-group m-1 bg-white">
                                <label for="arrival-time">تاریخ ورود</label>
                                <input id="arrival-time" type="text" class="form-control" placeholder="انتخاب تاریخ" aria-label="arrival-time">
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-12">
                            <div id="input-departure-time" class="form-group m-1 bg-white">
                                <label for="departure-time">تاریخ خروج</label>
                                <input type="text" id="departure-time" class="form-control" placeholder="انتخاب تاریخ" aria-label="departure-time">
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12">
                            <div class="search-btn m-1 p-0 bg-white">
                                <button href="#" class="btn btn-primary w-100 h-100">
                                    جستوجوی اقامتگاه&nbsp;
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Counter Top-->
    <section id="counterTop">
        <div class="container">
            <div class="card border-0 mb-0 box-shadow-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="d-flex">
                                <div>
                                    <div class="iconCover1">
                                        <img class="counterIcon" src="/template/image/icon/windows1.png" alt="">
                                    </div>
                                </div>
                                <div class="mr-4 mt-1">
                                    <h3 class="counter mb-0 font-weight-bold">535</h3>
                                    <p class="mb-0 text-muted">سوئیت</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex">
                                <div>
                                    <div class="iconCover2">
                                        <img class="counterIcon" src="/template/image/icon/vila3.png" alt="">
                                    </div>
                                </div>
                                <div class="mr-4 mt-1">
                                    <h3 class="counter mb-0 font-weight-bold">3,183</h3>
                                    <p class="mb-0 text-muted">ویلا</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex">
                                <div>
                                    <div class="iconCover3">
                                        <img class="counterIcon" src="/template/image/icon/vila2.png" alt="">
                                    </div>
                                </div>
                                <div class="mr-4 mt-1">
                                    <h3 class="counter mb-0 font-weight-bold">230</h3>
                                    <p class="mb-0 text-muted">خانه سنتی و بوم گردی</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Step-1-->
    <section class="step1">
        <div class="container">
            <div class="title text-center mt-5 pb-2">
                <h3 class="mb-3 sectionTitle">دسته بندی های برتر</h3>
                <h6 class="">رزرو هتل، رزرو هتل آپارتمان و خرید اینترنتی بلیط هواپیما و بلیط اتوبوس با بهترین قیمت در همه شهرهای ایران</h6>
            </div>
            <div class="owl-carousel owl-loaded">
                <div class="owl-stage-outer position-relative">
                    <div class="owl-stage ">
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="titleContain text-center">
                                        <h4 class="h-card text-white">رامسر</h4>
                                    </div>
                                    <div class="card-img-overlay" onmouseover="step1HoverIn(this)" onmouseout="step1HoverOut(this)">
                                        <h6><a href="#">رامسر</a></h6>
                                        <p>220 اقامتگاه</p>
                                        <div>
                                            <a href="#">استخردار</a>
                                            <a href="#">کلبه جنگلی</a>
                                            <a href="#">ساحلی</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-2.png" alt="Card image cap">
                                    <div class="titleContain text-center">
                                        <h4 class="h-card text-white">رامسر</h4>
                                    </div>
                                    <div class="card-img-overlay" onmouseover="step1HoverIn(this)" onmouseout="step1HoverOut(this)">
                                        <h6><a href="#">رامسر</a></h6>
                                        <p>220 اقامتگاه</p>
                                        <div>
                                            <a href="#">استخردار</a>
                                            <a href="#">کلبه جنگلی</a>
                                            <a href="#">ساحلی</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-3.png" alt="Card image cap">
                                    <div class="titleContain text-center">
                                        <h4 class="h-card text-white">رامسر</h4>
                                    </div>
                                    <div class="card-img-overlay" onmouseover="step1HoverIn(this)" onmouseout="step1HoverOut(this)">
                                        <h6><a href="#">رامسر</a></h6>
                                        <p>220 اقامتگاه</p>
                                        <div>
                                            <a href="#">استخردار</a>
                                            <a href="#">کلبه جنگلی</a>
                                            <a href="#">ساحلی</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-4.png" alt="Card image cap">
                                    <div class="titleContain text-center">
                                        <h4 class="h-card text-white">رامسر</h4>
                                    </div>
                                    <div class="card-img-overlay" onmouseover="step1HoverIn(this)" onmouseout="step1HoverOut(this)">
                                        <h6><a href="#">رامسر</a></h6>
                                        <p>220 اقامتگاه</p>
                                        <div>
                                            <a href="#">استخردار</a>
                                            <a href="#">کلبه جنگلی</a>
                                            <a href="#">ساحلی</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="titleContain text-center">
                                        <h4 class="h-card text-white">رامسر</h4>
                                    </div>
                                    <div class="card-img-overlay" onmouseover="step1HoverIn(this)" onmouseout="step1HoverOut(this)">
                                        <h6><a href="#">رامسر</a></h6>
                                        <p>220 اقامتگاه</p>
                                        <div>
                                            <a href="#">استخردار</a>
                                            <a href="#">کلبه جنگلی</a>
                                            <a href="#">ساحلی</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="titleContain text-center">
                                        <h4 class="h-card text-white">رامسر</h4>
                                    </div>
                                    <div class="card-img-overlay" onmouseover="step1HoverIn(this)" onmouseout="step1HoverOut(this)">
                                        <h6><a href="#">رامسر</a></h6>
                                        <p>220 اقامتگاه</p>
                                        <div>
                                            <a href="#">استخردار</a>
                                            <a href="#">کلبه جنگلی</a>
                                            <a href="#">ساحلی</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="titleContain text-center">
                                        <h4 class="h-card text-white">رامسر</h4>
                                    </div>
                                    <div class="card-img-overlay" onmouseover="step1HoverIn(this)" onmouseout="step1HoverOut(this)">
                                        <h6><a href="#">رامسر</a></h6>
                                        <p>220 اقامتگاه</p>
                                        <div>
                                            <a href="#">استخردار</a>
                                            <a href="#">کلبه جنگلی</a>
                                            <a href="#">ساحلی</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="titleContain text-center">
                                        <h4 class="h-card text-white">رامسر</h4>
                                    </div>
                                    <div class="card-img-overlay" onmouseover="step1HoverIn(this)" onmouseout="step1HoverOut(this)">
                                        <h6><a href="#">رامسر</a></h6>
                                        <p>220 اقامتگاه</p>
                                        <div>
                                            <a href="#">استخردار</a>
                                            <a href="#">کلبه جنگلی</a>
                                            <a href="#">ساحلی</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Advantages -->
    <section class="advantage">
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex justify-content-around">
                    <div class="box boxRight d-flex justify-content-around">
                        <div class="my-auto">
                            <img class="advantageIcon my-auto" src="/template/image/icon/advantage-1.png" alt="support icon">
                        </div>
                        <div class="text-white my-auto">
                            <h6 class="pt-2">گفتگو با میزبان پیش از پرداخت</h6>
                            <p>امکان گفتگوی آنلاین پیش از پرداخت رزرو</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-around">
                    <div class="box bg-white d-flex justify-content-around">
                        <div class="iconBg d-flex ml-auto">
                            <img class="advantageIcon my-auto mx-auto" src="/template/image/icon/advantage-2.png" alt="support icon">
                        </div>
                        <div class="my-auto mx-auto">
                            <h6 class="pt-2">تضمین تمیزی اقامتگاه</h6>
                            <p>آسودگی خاطر از نظافت و تمیزی اقامتگاه‌ها</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-around">
                    <div class="box bg-white d-flex justify-content-around">
                        <div class="iconBg d-flex ml-auto">
                            <img class="advantageIcon my-auto mx-auto" src="/template/image/icon/advantage-3.png" alt="support icon">
                        </div>
                        <div class="my-auto mx-auto">
                            <h6 class="pt-2">پشتیبانی تا پایان سفر</h6>
                            <p>همراه شما در تمام مراحل از رزرو تاپایان سفر</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Step-2 & Divider-1 -->
    <section class="step2">
        <!--  Divider-1  -->
        <section class="divider1">
            <img src="/template/image/divider/section-divider-1.png" alt="divider">
        </section>
        <!--  End Divider-1  -->
        <div class="container">
            <div class="title mt-5 pb-2">
                <h3 class="sectionTitle mb-3 mr-2">اقامتگاه های ویژه و تایید شده</h3>
            </div>
            <div class="owl-carousel owl-loaded">
                <div class="owl-stage-outer position-relative">
                    <div class="owl-stage ">
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-2.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-3.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-4.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-2.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-3.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-4.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Step-3-->
    <section class="step3 bg-white mb-5">
        <!--  Divider-2  -->
        <section class="divider2">
            <img src="/template/image/divider/section-divider-2.png" class="w-100" alt="divider">
        </section>
        <!--  End Divider-2  -->
        <div class="container">
            <div class="title mt-4 pb-2">
                <h3 class="sectionTitle mr-2 mb-3">شهرهای برتر</h3>
            </div>
            <div class="owl-carousel owl-loaded">
                <div class="owl-stage-outer position-relative">
                    <div class="owl-stage ">
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <a href="#">
                                        <div class="card-img-overlay d-flex flex-column" onmouseover="step3HoverIn(this)" onmouseout="step3HoverOut(this)">
                                            <h6 class="mt-auto"><span>ماسال</span>&nbsp;&nbsp;<span class="text-warning">از <span class="step3-price">300</span> هزار تومان</span></h6>
                                            <p class="mb-1">بیش از 200 اقامتگاه</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="card-img-overlay d-flex flex-column" onmouseover="step3HoverIn(this)" onmouseout="step3HoverOut(this)">
                                        <h6 class="mt-auto"><span>ماسال</span>&nbsp;&nbsp;<span class="text-warning">از <span class="step3-price">300</span> هزار تومان</span></h6>
                                        <p class="mb-1">بیش از 200 اقامتگاه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="card-img-overlay d-flex flex-column" onmouseover="step3HoverIn(this)" onmouseout="step3HoverOut(this)">
                                        <h6 class="mt-auto"><span>ماسال</span>&nbsp;&nbsp;<span class="text-warning">از <span class="step3-price">300</span> هزار تومان</span></h6>
                                        <p class="mb-1">بیش از 200 اقامتگاه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="card-img-overlay d-flex flex-column" onmouseover="step3HoverIn(this)" onmouseout="step3HoverOut(this)">
                                        <h6 class="mt-auto"><span>ماسال</span>&nbsp;&nbsp;<span class="text-warning">از <span class="step3-price">300</span> هزار تومان</span></h6>
                                        <p class="mb-1">بیش از 200 اقامتگاه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="card-img-overlay d-flex flex-column" onmouseover="step3HoverIn(this)" onmouseout="step3HoverOut(this)">
                                        <h6 class="mt-auto"><span>ماسال</span>&nbsp;&nbsp;<span class="text-warning">از <span class="step3-price">300</span> هزار تومان</span></h6>
                                        <p class="mb-1">بیش از 200 اقامتگاه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="card-img-overlay d-flex flex-column" onmouseover="step3HoverIn(this)" onmouseout="step3HoverOut(this)">
                                        <h6 class="mt-auto"><span>ماسال</span>&nbsp;&nbsp;<span class="text-warning">از <span class="step3-price">300</span> هزار تومان</span></h6>
                                        <p class="mb-1">بیش از 200 اقامتگاه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="card-img-overlay d-flex flex-column" onmouseover="step3HoverIn(this)" onmouseout="step3HoverOut(this)">
                                        <h6 class="mt-auto"><span>ماسال</span>&nbsp;&nbsp;<span class="text-warning">از <span class="step3-price">300</span> هزار تومان</span></h6>
                                        <p class="mb-1">بیش از 200 اقامتگاه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card position-relative">
                                    <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                    <div class="card-img-overlay d-flex flex-column" onmouseover="step3HoverIn(this)" onmouseout="step3HoverOut(this)">
                                        <h6 class="mt-auto"><span>ماسال</span>&nbsp;&nbsp;<span class="text-warning">از <span class="step3-price">300</span> هزار تومان</span></h6>
                                        <p class="mb-1">بیش از 200 اقامتگاه</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Health Services-->
    <section class="healthServices">
        <div class="container">
            <a href="#" >
                <img class="d-flex w-100 mb-5" src="/template/image/Banner/healthServices.png" alt="Health Services">
            </a>
        </div>
    </section>


    <!--Step-3 & Divider-2 -->
    <section class="step3">
        <!--  Divider-2  -->
        <section class="divider1">
            <img src="/template/image/divider/section-divider-1.png" alt="divider">
        </section>
        <!--  End Divider-2  -->
        <div class="container">
            <div class="title mt-5 pb-2">
                <h3 class="sectionTitle mb-3 mr-2">اقامتگاه های ویژه و تایید شده</h3>
            </div>
            <div class="owl-carousel owl-loaded">
                <div class="owl-stage-outer position-relative">
                    <div class="owl-stage ">
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-2.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-3.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-4.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-1.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-2.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-3.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="card-bracket">
                                <div class="card" data-animation-in="animate__fadeIn">
                                    <div class="imgWrapper position-relative">
                                        <img class="card-img-top" src="/template/image/card/step1-4.png" alt="Card image cap">
                                        <a class="card-img-overlay w-100 h-100" onmouseover="step2HoverIn(this)" onmouseout="step2HoverOut(this)"></a>
                                    </div>
                                    <div class="badge-danger badge-offer py-1 px-2">
                                        <span class="tag-num">20% | ویژه</span>
                                    </div>
                                    <div class="badge-heart badge-pill">
                                <span class="tag ">
                                    <i class="fa fa-heart-o"></i>
                                </span>
                                    </div>
                                    <div class="card-body position-relative py-2 px-1">
                                        <h6 class="card-title mt-2">- بوم گردی مازندران، کلارآباد</h6>
                                        <div class="badge-primary badge-opinion py-1">
                                            <span class="tag">(57) نظر | </span>
                                            <span class="tag-num">4.0 <i class="fa fa-star-o"></i> </span>
                                        </div>
                                        <h6 class="card-title text-dark mr-2 mt-3">ویلا فوق لوکس در شهرک مجلل امیردشت</h6>
                                        <div class="suite-info mb-3 mt-4 d-flex justify-content-start">
                                            <div class="badge-light badge-room ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-bed text-dark"></i> 3 </span>
                                                <span>اتاق خواب</span>
                                            </div>
                                            <div class="badge-light badge-guest ml-1 py-1 text-primary">
                                            <span class="tag-num">
                                                <i class="fa fa-male text-dark"></i>
                                                <i class="fa fa-female text-dark"></i>
                                                8 </span>
                                                <span>نفر</span>
                                            </div>
                                            <div class="badge-light badge-aria ml-1 py-1 text-primary">
                                                <span class="tag-num"><i class="fa fa-crop text-dark"></i> 1000 </span>
                                                <span>متر</span>
                                            </div>
                                        </div>
                                        <div class="card-foot bg-light d-flex mt-4 justify-content-between">
                                            <div class="rental d-flex py-1 text-primary">
                                                <img  class="avatar ml-1"src="/template/image/profile/avatar-person.png" alt="image">
                                                <div class="border-left pl-1">
                                                    <h6 class="landlord m-0 p-0">مصیب میرزایی</h6>
                                                    <small class="text-muted">مهمان نواز و تایید شده</small>
                                                </div>
                                            </div>
                                            <div class="price border-left pl-1">
                                                <small class="text-danger"><s>800,000 تومان قبل</s></small>
                                                <h6 class="landlord m-0 p-0">500,000 تومان الان</h6>
                                            </div>
                                            <a href="#" class="btn btn-warning">
                                                رزرو
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection