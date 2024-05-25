<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextReads</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    @yield('css')
    <style>
        .search-result {
            position: absolute;
            top: 10%;
            left: 0;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1;
        }

        .search-result .box {
            padding: 1rem;
            border-bottom: 1px solid #f1f1f1;
        }

        .search-result .box a {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-bottom: 1px solid #f1f1f1;
        }

        .search-result .box a img {
            width: 50px;
            height: 70px;
            object-fit: cover;
            border-radius: 5px;
        }

        .search-result .box a .info h3 {
            font-size: 1rem;
            color: #333;
        }

        .search-result .box a .info small {
            font-size: 0.8rem;
            color: #777;
        }

        .search-result .box a:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>


    <header class="header">

        <div class="header-1">

            <a href="#arrivals" class="logo"> <i class="fas fa-book"></i> NextReads </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
                <div class="search-result">
                    <div class="box">
                        <h3>search result</h3>
                    </div>
                </div>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="{{ url('cart') }}" class="fas fa-shopping-cart"></a>
                <a href="{{ url('login') }}" class="fas fa-user" id="login-btn"></a>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="{{ url('/') }}">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">category</a>
                <a href="#reviews">reviews</a>
                <a href="{{ url('feedback') }}">feedback</a>
            </nav>
        </div>

    </header>


    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#feedback" class="fas fa-feedback"></a>
    </nav>


    @yield('content')


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="./index.html"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Category </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="./feedback.html"> <i class="fas fa-arrow-right"></i> feedback </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 8306953601 </a>
                <a href="#"> <i class="fas fa-phone"></i> 9145950051 </a>
                <a href="#"> <i class="fas fa-envelope"></i> shriyanshikhandelwal29@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> sethiraavi12@gmail.com </a>
                <img src="image/worldmap.png" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/shriyanshiii_khandelwal" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/next_reads_si?igsh=MWFndzIweTB6N2hsdw==" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/shriyanshi-khandelwal-894527228" class="fab fa-linkedin"></a>
            <a href="https://www.linkedin.com/in/rohit-m-3494521a2/" class="fab fa-linkedin"></a>
        </div>

        <div class="credit"> created by <span>Shriyanshi Khandelwal & Inshika Sharma </span>copyright &copy;2024 all
            rights reserved! </div>

    </section>



    <script src="{{ asset('assets/js/jQuery/jQuery.min.js') }}"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/product.js') }}"></script>


    <script>
        $('#search-box').on('keyup', function() {
            let value = $(this).val().toLowerCase();

            $.ajax({
                url: "{{ route('books.search') }}",
                type: "POST",
                data: {
                    value: value,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {

                    // clear search result
                    $('.search-result .box').html('');

                    data.data.forEach(book => {
                        $('.search-result').show();
                        $('.search-result .box').append(`
                            <a href="{{ url('product') }}/${book.id}" class="result">
                                <img src="${book.image}" alt="">
                                <div class="info">
                                    <h3>${book.title}</h3>
                                    <small>${book.author}</small>
                                </div>
                            </a>
                        `);
                    });
                }
            });

        })
    </script>

</body>

</html>
