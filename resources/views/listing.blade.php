@extends('default.layout')
@section('content')
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">

                <div class="document-title">
                    <h1>Row Version</h1>

                    <ul class="breadcrumb">
                        <li><a href="#">Superlist</a></li>
                        <li><a href="#">Listing</a></li>
                    </ul>
                </div><!-- /.document-title -->



                <form class="filter" method="post" action="http://preview.byaviators.com/template/superlist/listing-row.html?">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" placeholder="Keyword" class="form-control">
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" title="Select Location">
                                    <option>Bronx</option>
                                    <option>Brooklyn</option>
                                    <option>Manhattan</option>
                                    <option>Staten Island</option>
                                    <option>Queens</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" title="Select Category">
                                    <option value="">Automotive</option>
                                    <option value="">Jobs</option>
                                    <option value="">Nightlife</option>
                                    <option value="">Services</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="filter-actions">
                                <a href="#"><i class="fa fa-close"></i> Reset Filter</a>
                                <a href="#"><i class="fa fa-save"></i> Save Search</a>
                            </div><!-- /.filter-actions -->
                        </div><!-- /.col-* -->

                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Redefine Search Result</button>
                        </div><!-- /.col-* -->
                    </div><!-- /.row -->
                </form>


                <h2 class="page-title">
                    1802 results matching your query

                    <form method="get" action="http://preview.byaviators.com/template/superlist/listing-row.html?" class="filter-sort">
                        <div class="form-group">
                            <select title="Sort by">
                                <option name="price">Price</option>
                                <option name="rating">Rating</option>
                                <option name="title">Title</option>
                            </select>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <select title="Order">
                                <option name="ASC">Asc</option>
                                <option name="DESC">Desc</option>
                            </select>
                        </div><!-- /.form-group -->
                    </form>
                </h2><!-- /.page-title -->

                <div class="cards-row">

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-1.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Vacation</a></div><!-- /.card-row-label -->

                                <div class="card-row-price">$100 / night</div><!-- -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Trip To Paris, France</a></h2>
                                <div class="card-row-content"><p>And why did 'I' have to take a cab? Bender, quit destroying the universe! I've been there. My folks were always on me to groom myself and...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>

                                    <dd>Price</dd><dt>$100 / night</dt>



                                    <dd>Category</dd><dt>Vacation</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-2.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Coffee</a></div><!-- /.card-row-label -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Tasty Brazil Coffee</a></h2>
                                <div class="card-row-content"><p>What are you hacking off? Is it my torso?! 'It is!' My precious torso! You guys realize you live in a sewer, right? Who am I making this ...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>



                                    <dd>Category</dd><dt>Coffee</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-3.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Food</a></div><!-- /.card-row-label -->

                                <div class="card-row-price">$12 / person</div><!-- -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Healthy Breakfast</a></h2>
                                <div class="card-row-content"><p>Well, then good news! It's a suppository. It's toe-tappingly tragic! Moving along… Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cr...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>

                                    <dd>Price</dd><dt>$12 / person</dt>



                                    <dd>Category</dd><dt>Food</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-4.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Restaurant</a></div><!-- /.card-row-label -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Coffee &amp; Newspaper</a></h2>
                                <div class="card-row-content"><p>Pansy. No! I want to live! There are still too many things I don't own! And then the battle's not so bad? And I'd do it again! And perhap...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>



                                    <dd>Category</dd><dt>Restaurant</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-5.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Vacation</a></div><!-- /.card-row-label -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Boat Trip</a></h2>
                                <div class="card-row-content"><p>Shut up and take my money! Stop! Don't shoot fire stick in space canoe! Cause explosive decompression! You know the worst thing about bei...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>



                                    <dd>Category</dd><dt>Vacation</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-6.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Restaurant</a></div><!-- /.card-row-label -->

                                <div class="card-row-price">$28 / person</div><!-- -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Italian Restaurant</a></h2>
                                <div class="card-row-content"><p>I daresay that Fry has discovered the smelliest object in the known universe! I saw you with those two 'ladies of the evening' at Elzars....</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>

                                    <dd>Price</dd><dt>$28 / person</dt>



                                    <dd>Category</dd><dt>Restaurant</dt>



                                    <dd>Location</dd><dt></dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-7.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Pub</a></div><!-- /.card-row-label -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Best Brazil Coffee</a></h2>
                                <div class="card-row-content"><p>I love this planet! I've got wealth, fame, and access to the depths of sleaze that those things bring. Now, now. Perfectly symmetrical vi...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>



                                    <dd>Category</dd><dt>Pub</dt>



                                    <dd>Location</dd><dt></dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-8.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Shop</a></div><!-- /.card-row-label -->

                                <div class="card-row-price">$3 / cup</div><!-- -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Retro Shop</a></h2>
                                <div class="card-row-content"><p>Stop! Don't shoot fire stick in space canoe! Cause explosive decompression! Shut up and get to the point! Bender, we're trying our best. ...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>

                                    <dd>Price</dd><dt>$3 / cup</dt>



                                    <dd>Category</dd><dt>Shop</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-9.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Event</a></div><!-- /.card-row-label -->

                                <div class="card-row-price">$13 / ticket</div><!-- -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Wine Tasting</a></h2>
                                <div class="card-row-content"><p>Why would I want to know that? One hundred dollars. Noooooo! You can crush me but you can't crush my spirit! Oh, how awful. Did he at lea...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>

                                    <dd>Price</dd><dt>$13 / ticket</dt>



                                    <dd>Category</dd><dt>Event</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-10.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Coworking</a></div><!-- /.card-row-label -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Affordable Office</a></h2>
                                <div class="card-row-content"><p>Why, those are the Grunka-Lunkas! They work here in the Slurm factory. No, she'll probably make me do it. When will that be? File not fou...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>



                                    <dd>Category</dd><dt>Coworking</dt>




                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-11.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Food</a></div><!-- /.card-row-label -->

                                <div class="card-row-price">$8 / person</div><!-- -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Quick Breakfast</a></h2>
                                <div class="card-row-content"><p>Ah, the 'Breakfast Club' soundtrack! I can't wait til I'm old enough to feel ways about stuff! If rubbin' frozen dirt in your crotch is w...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>

                                    <dd>Price</dd><dt>$8 / person</dt>



                                    <dd>Category</dd><dt>Food</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                    <div class="card-row">
                        <div class="card-row-inner">
                            <div class="card-row-image" data-background-image="assets/img/tmp/product-12.jpg">
                                <div class="card-row-label"><a href="listing-detail.html">Landmark</a></div><!-- /.card-row-label -->

                            </div><!-- /.card-row-image -->

                            <div class="card-row-body">
                                <h2 class="card-row-title"><a href="listing-detail.html">Monumental City</a></h2>
                                <div class="card-row-content"><p>Ven ve voke up, ve had zese wodies. No! I want to live! There are still too many things I don't own! Hey, what kinda party is this? There...</p></div><!-- /.card-row-content -->
                            </div><!-- /.card-row-body -->

                            <div class="card-row-properties">
                                <dl>



                                    <dd>Category</dd><dt>Landmark</dt>



                                    <dd>Location</dd><dt>New York / Village</dt>


                                    <dd>Rating</dd>
                                    <dt>
                                    <div class="card-row-rating">
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    </div><!-- /.card-row-rating -->
                                    </dt>
                                </dl>
                            </div><!-- /.card-row-properties -->
                        </div><!-- /.card-row-inner -->
                    </div><!-- /.card-row -->

                </div><!-- /.cards-row -->


                <div class="pager">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">5</a></li>
                        <li class="active"><a>6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div><!-- /.pagination -->


            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
@endsection