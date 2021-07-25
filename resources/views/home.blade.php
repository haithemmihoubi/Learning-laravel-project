@extends('layouts.app')

@section('content')
    <header class="bg-dark py-5">
        <div class="container px-2 px-lg-5 my-4">
            <div class="text-center text-primary">
                <h1 class="display-4 fw-bolder">Shop in style</h1>

            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

         @foreach($categories as $category)
             <h1>{{ $category->name }}</h1>
                @endforeach



             @foreach($products as $product)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$product->product_name}}</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
{{ $product->price }}                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-primary mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>

             @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
