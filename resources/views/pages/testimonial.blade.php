@extends('layouts.app')

@section('title','Testimonial')

@section('content')
<main> 
   <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Members Testimonial</h2>
                    <!-- <p>Moments were giving them
                        <br>
                        the best experience
                    </p> -->
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/user pic@2x.png')}}" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Abu Dzar Al Ghifari</h3>
                            <p class="testimonial">
                                “ Pengalaman terbaik dengan wisata keliling Indonesia, pelayanan bagus dan menyenangkan terima kasih “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Bali
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/Testimoni-2.jpg')}}" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Shasa</h3>
                            <p class="testimonial">
                                “ The trip was amazing and
                                I saw something beautiful in
                                that Island that makes me
                                want to learn more “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Jogja
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('frontend/images/Testimoni-3.jpg')}}" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Elsa</h3>
                            <p class="testimonial">
                                “ I loved it when the waves
                                was shaking harder — I was
                                scared too “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Dieng
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="https://ui-avatars.com/api/?name=Reni" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Reni</h3>
                            <p class="testimonial">
                                “ I have nothing to say but wowwwww, thank Travonesia “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Semarang
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="https://ui-avatars.com/api/?name=John+Smith" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">John Smith</h3>
                            <p class="testimonial">
                                “ It was a fun experience and 
                                it always remains in my heart “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Bali
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="https://ui-avatars.com/api/?name=Paul+Honson" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Paul Honson</h3>
                            <p class="testimonial">
                                “ I loved this trip with
                                Travonesia “
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Jogja
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection