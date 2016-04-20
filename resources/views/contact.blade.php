@extends('default.layout')
@section('content')
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">

                <div class="document-title">
                    <h1>Contact v2</h1>

                    <ul class="breadcrumb">
                        <li><a href="#">Superlist</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div><!-- /.document-title -->



                <p>
                    Donec congue egestas nisi id varius. Curabitur ullamcorper consectetur risus, eget dapibus lacus. Maecenas sit amet dui dictum, tincidunt ante vel, semper purus. In hac habitasse platea dictumst. Vivamus hendrerit sem a rutrum ornare. Donec vehicula auctor eros. Etiam et enim tellus.
                </p>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Address</h3>

                                <p>
                                    13/2 Elizabeth Street,<br>
                                    Melbourne, Australia
                                </p>
                            </div><!-- /.col-sm-4 -->

                            <div class="col-sm-4">
                                <h3>Contacts</h3>

                                <p>
                                    1900-CO-WORKER<br>
                                    1800-3322-4453
                                </p>
                            </div><!-- /.col-sm-4 -->

                            <div class="col-sm-4">
                                <h3>Social Profiles</h3>

                                <ul class="social-links nav nav-pills">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div><!-- /.col-sm-4 -->
                        </div><!-- /.row -->

                        <div class="background-white p30 mt30">
                            <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Washington+D.C.+white+house&amp;aq=t&amp;sll=37.0625,-95.677068&amp;sspn=60.376022,92.460937&amp;ie=UTF8&amp;hq=Washington+D.C.+white+house&amp;t=m&amp;ll=38.896984,-77.036518&amp;spn=0.006295,0.006295&amp;output=embed" width="100%" height="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <h3>We’d love to hear from you</h3>

                        <div class="contact-form-wrapper clearfix background-white p30">
                            <form class="contact-form" method="post" action="http://preview.byaviators.com/template/superlist/contact-2.html?">
                                <div class="form-group">
                                    <label for="contact-form-name">Name</label>
                                    <input type="text" name="name" id="contact-form-name" class="form-control">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="contact-form-subject">Subject</label>
                                    <input type="text" name="subject" id="contact-form-subject" class="form-control">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="contact-form-email">E-mail</label>
                                    <input type="text" name="email" id="contact-form-email" class="form-control">
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <label for="contact-form-message">Message</label>
                                    <textarea class="form-control" id="contact-form-message" rows="6"></textarea>
                                </div><!-- /.form-group -->

                                <button class="btn btn-primary pull-right">Post Message</button>
                            </form><!-- /.contact-form -->
                        </div><!-- /.contact-form-wrapper -->
                    </div>
                </div><!-- /.row -->

            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
@endsection