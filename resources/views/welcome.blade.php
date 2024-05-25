@extends('layouts.public')
@section('content')
    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>upto 75% off</h3>
                <p>If you’re an Bookaholic and need books, NextReads has great deals on a wide range of books. Shop for
                    these books from top authors and avail hugely discounted prices</p>
                <a href="#featured" class="btn">shop now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="{{ asset('assets/image/book-1.png') }}"
                            alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{ asset('assets/image/book-2.png') }}"
                            alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{ asset('assets/image/book-3.png') }}"
                            alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{ asset('assets/image/book-4.png') }}"
                            alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{ asset('assets/image/book-5.png') }}"
                            alt=""></a>
                    <a href="#" class="swiper-slide"><img src="{{ asset('assets/image/book-6.png') }}"
                            alt=""></a>
                </div>
                <img src="{{ asset('assets/image/stand.png') }}" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>order over ₹100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured books</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <a href="./product.html"> <img src="{{ asset('assets/image/book-1.png') }}" alt=""> </a>
                    </div>
                    <div class="content">
                        <h3>Engineering Mathematics-I</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <a href="./product.html"> <img src="{{ asset('assets/image/book-2.png') }}" alt=""> </a>
                    </div>
                    <div class="content">
                        <h3>Engineering Mechanics</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <a href="product.html"><img src="{{ asset('assets/image/book-3.png') }}" alt=""> </a>
                    </div>
                    <div class="content">
                        <h3>Applied Physics-I</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/image/book-4.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Engineering Drawing</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/image/book-5.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Engineering Mathematics-II</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/image/book-6.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Introduction to Automata Theory, Languages and Computation</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/image/book-7.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Software Engineering</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/image/book-8.png.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Database System Concepts</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/image/book-9.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Cryptography and Network Security</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('assets/image/book-10.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Mobile Communications</h3>
                        <div class="price">₹15.99 <span>₹20.99</span></div>
                        <a href="./cart.html" class="btn">add to cart</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->

    <!-- newsletter section starts -->

    <section class="newsletter">

        <form action="">
            <h3>subscribe for latest updates</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">
        </form>

    </section>

    <!-- newsletter section ends -->

    <!-- category section starts  -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading"> <span>Category</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('assets/image/book-1.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Semester 1</h3>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('assets/image/book-4.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Semester 2</h3>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('assets/image/book-6.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Semester 3</h3>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('assets/image/book-7.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Semester 4</h3>
                    </div>
                </a>

            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('assets/image/book-8.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Semester 5</h3>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('assets/image/book-9.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Semester 6</h3>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('assets/image/book-10.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Semester 7</h3>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="{{ asset('assets/image/book3.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h3>Semester 8</h3>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- category section ends -->

    <!-- deal section starts  -->

    <section class="deal">

        <div class="content">
            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Checkout before this deal expires at midnight.</p>
            <a href="#featured" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="{{ asset('assets/image/deal-img.jpg') }}" alt="">
        </div>

    </section>

    <!-- deal section ends -->

    <!-- reviews section starts  -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> <span>client's reviews</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="{{ asset('assets/image/pic-1.png') }}" alt="">
                    <h3>Vansh </h3>
                    <p>First of all it customer service is excellent. We get all author book for Mumbai University.
                        People should try here affordable and best price.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('assets/image/pic-2.png') }}" alt="">
                    <h3>Bharat </h3>
                    <p>Best book store almost all books are available for prepartion of exam related or other books are
                        available on reaonable price also.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('assets/image/pic-3.png') }}" alt="">
                    <h3>Tejaswani </h3>
                    <p>Customer Service is good. Greetings to customer and making the required Books available to
                        Customers is very good.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="{{ asset('assets/image/pic-4.png') }}" alt="">
                    <h3>Vidhika </h3>
                    <p>This book centre have large amount of a books. The engineering study material all semester books
                        are available.then the peacefull and nice book centre.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('assets/image/pic-5.png') }}" alt="">
                    <h3>Ashutosh</h3>
                    <p>I migrated to the online platform on Just books because I was finding it difficult to go to their
                        libraries before closing time.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="{{ asset('assets/image/pic-6.png') }}" alt="">
                    <h3>Deepali </h3>
                    <p>I love the product because it is very easy to find. The book are in really organized manner you
                        can easily find the book you want.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- reviews section ends -->

    <!-- feedback section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> <span>feedback</span> </h1>

        <section class="newsletter">

            <form action="">
                <h3>give your feedback here...</h3>
                <a href="./feedback.html" class="btn">Feedback</a>
                <!-- <a href="./feedback.html"><input type="submit" value="feedback"> -->
                </a>
            </form>

        </section>
    </section>
@endsection
