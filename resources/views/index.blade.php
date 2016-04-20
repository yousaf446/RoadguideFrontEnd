@extends('default.layout')
@section('content')
<div class="main">
    <div class="main-inner">
        <div class="content">
            <div class="mt-150">
                <div class="hero-image">
                    <div class="hero-image-inner" style="background-image: url('assets/img/tmp/slider-large-3.jpg');">
                        <div class="hero-image-content">
                            <div class="container">
                                <h1>Directory Template</h1>

                                <p>Create your own directory website by using Superlist template <br> incorporating all features of modern directory website.</p>

                                <a href="listing-row.html" class="btn btn-primary btn-lg">View Listings</a>
                                <a href="listing-submit.html" class="btn btn-secondary btn-lg">Submit</a>
                            </div><!-- /.container -->
                        </div><!-- /.hero-image-content -->

                        <div class="hero-image-form-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-8 col-lg-4 col-lg-offset-7">
                                        <form method="get" action="http://preview.byaviators.com/template/superlist/?">
                                            <h2>Start Searching</h2>

                                            <div class="hero-image-keyword form-group">
                                                <input type="text" class="form-control" placeholder="Keyword">
                                            </div><!-- /.form-group -->

                                            <div class="hero-image-location form-group">
                                                <select class="form-control" title="Location">
                                                    <option>Bronx</option>
                                                    <option>Brooklyn</option>
                                                    <option>Manhattan</option>
                                                    <option>Staten Island</option>
                                                    <option>Queens</option>
                                                </select>
                                            </div><!-- /.form-group -->

                                            <div class="hero-image-category form-group">
                                                <select class="form-control" title="Category">
                                                    <option value="">Automotive</option>
                                                    <option value="">Jobs</option>
                                                    <option value="">Nightlife</option>
                                                    <option value="">Services</option>
                                                </select>
                                            </div><!-- /.form-group -->

                                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                                        </form>
                                    </div><!-- /.col-* -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div><!-- /.hero-image-form-wrapper -->
                    </div><!-- /.hero-image-inner -->
                </div><!-- /.hero-image -->

            </div>

            <div class="container">
                <div class="page-header">
                    <h1>Most Searched Places</h1>
                    <p>List of most searched places in our directory.</p>
                </div><!-- /.page-header -->

                <div class="cards-simple-wrapper">
                    <div class="row">





                        <div class="col-sm-6 col-md-3">
                            <div class="card-simple" data-background-image="assets/img/tmp/product-2.jpg">
                                <div class="card-simple-background">
                                    <div class="card-simple-content">
                                        <h2><a href="listing-detail.html">Tasty Brazil Coffee</a></h2>
                                        <div class="card-simple-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.card-rating -->

                                        <div class="card-simple-actions">
                                            <a href="#" class="fa fa-bookmark-o"></a>
                                            <a href="listing-detail.html" class="fa fa-search"></a>
                                            <a href="#" class="fa fa-heart-o"></a>
                                        </div><!-- /.card-simple-actions -->
                                    </div><!-- /.card-simple-content -->

                                    <div class="card-simple-label">Coffee</div>

                                </div><!-- /.card-simple-background -->
                            </div><!-- /.card-simple -->
                        </div><!-- /.col-* -->



                        <div class="col-sm-6 col-md-3">
                            <div class="card-simple" data-background-image="assets/img/tmp/product-3.jpg">
                                <div class="card-simple-background">
                                    <div class="card-simple-content">
                                        <h2><a href="listing-detail.html">Healthy Breakfast</a></h2>
                                        <div class="card-simple-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.card-rating -->

                                        <div class="card-simple-actions">
                                            <a href="#" class="fa fa-bookmark-o"></a>
                                            <a href="listing-detail.html" class="fa fa-search"></a>
                                            <a href="#" class="fa fa-heart-o"></a>
                                        </div><!-- /.card-simple-actions -->
                                    </div><!-- /.card-simple-content -->

                                    <div class="card-simple-label">Food</div>

                                    <div class="card-simple-price">$12 / person</div>

                                </div><!-- /.card-simple-background -->
                            </div><!-- /.card-simple -->
                        </div><!-- /.col-* -->



                        <div class="col-sm-6 col-md-3">
                            <div class="card-simple" data-background-image="assets/img/tmp/product-4.jpg">
                                <div class="card-simple-background">
                                    <div class="card-simple-content">
                                        <h2><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>
                                        <div class="card-simple-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.card-rating -->

                                        <div class="card-simple-actions">
                                            <a href="#" class="fa fa-bookmark-o"></a>
                                            <a href="listing-detail.html" class="fa fa-search"></a>
                                            <a href="#" class="fa fa-heart-o"></a>
                                        </div><!-- /.card-simple-actions -->
                                    </div><!-- /.card-simple-content -->

                                    <div class="card-simple-label">Restaurant</div>

                                </div><!-- /.card-simple-background -->
                            </div><!-- /.card-simple -->
                        </div><!-- /.col-* -->



                        <div class="col-sm-6 col-md-3">
                            <div class="card-simple" data-background-image="assets/img/tmp/product-5.jpg">
                                <div class="card-simple-background">
                                    <div class="card-simple-content">
                                        <h2><a href="listing-detail.html">Boat Trip</a></h2>
                                        <div class="card-simple-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.card-rating -->

                                        <div class="card-simple-actions">
                                            <a href="#" class="fa fa-bookmark-o"></a>
                                            <a href="listing-detail.html" class="fa fa-search"></a>
                                            <a href="#" class="fa fa-heart-o"></a>
                                        </div><!-- /.card-simple-actions -->
                                    </div><!-- /.card-simple-content -->

                                    <div class="card-simple-label">Vacation</div>

                                </div><!-- /.card-simple-background -->
                            </div><!-- /.card-simple -->
                        </div><!-- /.col-* -->



                        <div class="col-sm-6 col-md-3">
                            <div class="card-simple" data-background-image="assets/img/tmp/product-6.jpg">
                                <div class="card-simple-background">
                                    <div class="card-simple-content">
                                        <h2><a href="listing-detail.html">Italian Restaurant</a></h2>
                                        <div class="card-simple-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.card-rating -->

                                        <div class="card-simple-actions">
                                            <a href="#" class="fa fa-bookmark-o"></a>
                                            <a href="listing-detail.html" class="fa fa-search"></a>
                                            <a href="#" class="fa fa-heart-o"></a>
                                        </div><!-- /.card-simple-actions -->
                                    </div><!-- /.card-simple-content -->

                                    <div class="card-simple-label">Restaurant</div>

                                    <div class="card-simple-price">$28 / person</div>

                                </div><!-- /.card-simple-background -->
                            </div><!-- /.card-simple -->
                        </div><!-- /.col-* -->



                        <div class="col-sm-6 col-md-3">
                            <div class="card-simple" data-background-image="assets/img/tmp/product-7.jpg">
                                <div class="card-simple-background">
                                    <div class="card-simple-content">
                                        <h2><a href="listing-detail.html">Best Brazil Coffee</a></h2>
                                        <div class="card-simple-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.card-rating -->

                                        <div class="card-simple-actions">
                                            <a href="#" class="fa fa-bookmark-o"></a>
                                            <a href="listing-detail.html" class="fa fa-search"></a>
                                            <a href="#" class="fa fa-heart-o"></a>
                                        </div><!-- /.card-simple-actions -->
                                    </div><!-- /.card-simple-content -->

                                    <div class="card-simple-label">Pub</div>

                                </div><!-- /.card-sCheck whats going on in the city now.imple-background -->
                            </div><!-- /.card-simple -->
                        </div><!-- /.col-* -->



                        <div class="col-sm-6 col-md-3">
                            <div class="card-simple" data-background-image="assets/img/tmp/product-8.jpg">
                                <div class="card-simple-background">
                                    <div class="card-simple-content">
                                        <h2><a href="listing-detail.html">Retro Shop</a></h2>
                                        <div class="card-simple-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.card-rating -->

                                        <div class="card-simple-actions">
                                            <a href="#" class="fa fa-bookmark-o"></a>
                                            <a href="listing-detail.html" class="fa fa-search"></a>
                                            <a href="#" class="fa fa-heart-o"></a>
                                        </div><!-- /.card-simple-actions -->
                                    </div><!-- /.card-simple-content -->

                                    <div class="card-simple-label">Shop</div>

                                    <div class="card-simple-price">$3 / cup</div>

                                </div><!-- /.card-simple-background -->
                            </div><!-- /.card-simple -->
                        </div><!-- /.col-* -->



                        <div class="col-sm-6 col-md-3">
                            <div class="card-simple" data-background-image="assets/img/tmp/product-9.jpg">
                                <div class="card-simple-background">
                                    <div class="card-simple-content">
                                        <h2><a href="listing-detail.html">Wine Tasting</a></h2>
                                        <div class="card-simple-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- /.card-rating -->

                                        <div class="card-simple-actions">
                                            <a href="#" class="fa fa-bookmark-o"></a>
                                            <a href="listing-detail.html" class="fa fa-search"></a>
                                            <a href="#" class="fa fa-heart-o"></a>
                                        </div><!-- /.card-simple-actions -->
                                    </div><!-- /.card-simple-content -->

                                    <div class="card-simple-label">Event</div>

                                    <div class="card-simple-price">$13 / ticket</div>

                                </div><!-- /.card-simple-background -->
                            </div><!-- /.card-simple -->
                        </div><!-- /.col-* -->

                    </div><!-- /.row -->
                </div><!-- /.cards-simple-wrapper -->
            </div><!-- /.container -->

        </div><!-- /.content -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
@endsection