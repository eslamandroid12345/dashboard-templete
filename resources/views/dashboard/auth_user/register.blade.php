<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('auth/css/login.css')}}">
    <title>تسجيل حساب جديد</title>

    <link rel="icon" type="{{asset('auth/imag/Logo.png')}}" href="{{asset('auth/images/MainLogo.png')}}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet" />
    <!-- End Google Fonts -->
    <!-- open links -->
    <link rel='stylesheet' href='https://cdn.jsd elivr.net/foundation/6.1.1/foundation.min.css'>
    <link rel="stylesheet" href="{{asset('auth/style.css')}}">
    <link rel="stylesheet" href="{{asset('auth/css/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('auth/css/all.min.css')}}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- end Links -->
</head>

<body>
<div class="container">


    <div class="forms-container">
        <div class="signin-signup">


            <form action="#" class="sign-in-form">
                <h2 class="title">انشاء حساب</h2>
                <div class="input-field">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="اسم المستخدم" />
                </div>
                <div class="input-field">
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="البريد الالكتروني" />
                </div>
                <div class="input-field">
                    <i class="fa fa-mobile-screen-button"></i>
                    <input class="tel" type="tel" placeholder="رقم الهاتف" />
                </div>
                <div class="input-field">
                    <i class="fa fa-fingerprint"></i>
                    <input type="password" placeholder="كلمة السر" />
                </div>
                <div class="input-field">
                    <i class="fa fa-fingerprint"></i>
                    <input type="password" placeholder="تأكيد كلمة السر" />
                </div>
                <div class="imagesinb">

                    <div class="small-12 large-4 columns">
                        <div class="containers">
                            <div class="imageWrapper">
                                <img class="image" src="{{asset('auth/images/avatar111.png')}}">
                            </div>
                        </div>
                        <button class="file-upload">
                            <input type="file" class="file-input">الصوره الشخصيه
                        </button>
                    </div>

                    <div class="small-12 large-4 columns">
                        <div class="containers">
                            <div class="imageWrapper1">
                                <img class="image" src="{{asset('auth/images/Coverrrr.png')}}">
                            </div>
                        </div>
                        <button class="file-upload">
                            <input type="file" class="file-input">صوره الغلاف
                        </button>
                    </div>


                </div>



                <input type="submit" class="btn" value="انشاء الحساب" />
                <p class="social-text">انشاء حساب عبر</p>
                <div class="social-media">



                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                        <h2> عن طريق جوجل </h2>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i> <h2> عن طريق فيسبوك </h2>
                    </a>
                </div>
            </form>
        </div>
    </div>



    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>هل لديك حساب بالفعل ؟</h3>
                <p>
                    تعالي سجل معنا و انضم الي مجتمعنا من هنا حتي تستفيد ب العديد من المميزات
                </p>
                <button class="btn transparent">
                    <a href="{{url('/login')}}">
                        تسجيل الدخول
                    </a>
                </button>
                <button class="btn transparent" id="sign-up-btn">
                    <a href="{{url('/')}}"> <i class="fa fa-house"></i></a>

                </button>

            </div>
            <img src="{{asset('auth/images/log4.svg')}}" class="image" alt="" />
        </div>

    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('auth/js/app.js')}}"></script>
<script src="{{asset('auth/js/script1111.js')}}"></script>

</body>

</html>
