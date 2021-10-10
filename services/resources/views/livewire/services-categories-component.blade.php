<div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>Services Category</h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div class="row">
                <div class="col-md-12">
                    <ul class="services-lines full-services">
                        @foreach ($scategories as $scategory)
                        <li>
                            <div class="item-service-line">
                                <i class="fa"><a href="servicesbycategory/1.html">
                                    <img class="icon-img" src="{{asset('')}}/{{$scategory->image}}" style="height: 50px; width:50px;">
                                </a></i>
                                <h5>{{$scategory->name}}</h5>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="content_info content_resalt">
            <div class="container">
                <div class="row">
                    <div class="titles">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
