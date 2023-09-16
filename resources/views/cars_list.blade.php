@extends('layouts.app')
@section('content')
    <div id="" class="mt-1 container" style="background: url('{{asset('./img/header/slide3.jpg')}}');background-size:cover;background-position:center center;background-attachment:fixed;border-radius:0px 0px 30px 30px;" >
       
    <div class="page-banner-title">
    <div class="text-center">
        <br><br>
        <br>
        <br><br>
        <br>
    <h2 style="color: white;">Nos voitures</h2>
    <a href="#"><i class="lni-home" style="color: white;"></i> Home</a>
    <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
    <span class="current" style="color: white;"> Nos voitures</span>
    </div>
    <br><br>
    <br>
    <br><br>
    <br>
    </div>
    </div>
    
    
    <div class="main-container section-padding">
    <div class="container">
    <div class="row">
<div class="col-lg-8 col-md-12 col-xs-12">
    
    <div class="product-filter">
    
    <div class="sort-by">
    <span>Sort by:</span>
    <div class="sort-by-select">
    <select class="classic">
    <option>Default Order</option>
    <option>Price Low to High</option>
    <option>Price High to Low</option>
    <option>Newest Properties</option>
    <option>Oldest Properties</option>
    </select>
    </div>
    </div>
    
    <div class="layout-switcher">
    <a href="#" class="list">
    <i class="lni-menu"></i>
    </a>
    <a href="#" class="grid active">
    <i class="lni-grid"></i>
    </a>
    </div>
    </div>
    
    
<div class="listing-container grid-layout">
@foreach ($cars as $car )
<div class="card property-main animate__animated">
    <div class="property-wrap">
        <div class="property-item">
             <div class="item-thumb">
                 <a class="hover-effect" href="{{route('user.cars.show' , $car->uuid) }}">
                  <img class="img-fluid"  src="{{asset($car->img)}}" alt="" data-pagespeed-url-hash="1470735303" src="https://static.medias24.com/content/uploads/2022/11/28/Dacia_Stepway.png?x38928" onload="pagespeed.switchToHighResAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);">
                 </a>
             </div>
             <div class="item-body">
                <h3 class="property-title"><a href=""> {{$car->name}}</a></h3>
                <div class="adderess"><i class="lni-map-marker"></i> Drive Street, Los Angeles, US</div>
              <div class="pricin-list">
                <div class="property-price">
                    <span> {{$car->price}} DH</span>
                </div>
              </div>
              </div>
        </div>
    </div>
</div>
@endforeach    
    <div class="pagination-container">
        <nav class="">
        <ul class="pagination">
        <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
        </ul>
        </nav>
    </div>
</div>
</div>



    <div class="col-lg-4">
    
    <div class="sidebar sticky right">
    
    <div class="widget">
    <h3 class="sidebar-title">Find New Home</h3>
    <div class="row with-forms">
    <div class="col-md-12">
    <select class="classic">
    <option>Any Status</option>
    <option>For Sale</option>
    <option>For Rent</option>
    </select>
    </div>
    </div>
    <div class="row with-forms">
    <div class="col-md-12">
    <select class="classic">
    <option>All Types</option>
    <option>Apartments (3)</option>
    <option>Houses (2)</option>
    <option>Condos (1)</option>
    <option>Industrial (2)</option>
    <option>Land (3)</option>
    <option>Offices (1)</option>
    <option>Retail (2)</option>
    <option>Villas (1)</option>
    </select>
    </div>
    </div>
    <div class="row with-forms">
    <div class="col-md-12">
    <select class="classic">
    <option>All States</option>
    <option>Alabama</option>
    <option>Arkansas</option>
    <option>California</option>
    <option>Colorado</option>
    <option>Connecticut</option>
    <option>Florida</option>
    <option>Indiana</option>
    <option>New York</option>
    <option>Washington</option>
    <option>West Virginia</option>
    <option>Wisconsin</option>
    <option>Wyoming</option>
    </select>
    </div>
    </div>
    <div class="row with-forms">
    <div class="col-md-12">
    <select class="classic">
    <option>All Cities</option>
    <option>New York</option>
    <option>California</option>
    <option>Washington</option>
    <option>Chicago</option>
    <option>Phoenix</option>
    <option>Birmingham</option>
    </select>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <select class="classic">
    <option>Beds</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    </select>
    </div>
    <div class="col-md-6">
    <select class="classic">
    <option>Baths</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    </select>
    </div>
    </div>
    
    <div class="range-area">
    <label>Area Range</label>
    <div id="area-range">
    <input type="text" class="form-control">
    <span>sq ft to</span>
    <input type="text" class="form-control">
    <span>sq ft</span>
    </div>
    <div class="clearfix"></div>
    </div>
    
    <div class="price-range">
    <label>Price Range</label>
    <div id="area-price">
    <input type="text" class="form-control">
    <span>sq ft to</span>
    <input type="text" class="form-control">
    <span>sq ft</span>
    </div>
    <div class="clearfix"></div>
    </div>
    
    <div class="more-search-options">
    <h3 class="sidebar-title">Additional Features</h3>
    
    <div class="checkboxes one-in-row">
    <input id="check-2" type="checkbox" name="check">
    <label for="check-2">Air Conditioning</label>
    <input id="check-3" type="checkbox" name="check">
    <label for="check-3">Swimming Pool</label>
    <input id="check-4" type="checkbox" name="check">
    <label for="check-4">Central Heating</label>
    <input id="check-5" type="checkbox" name="check">
    <label for="check-5">Laundry Room</label>
    <input id="check-6" type="checkbox" name="check">
    <label for="check-6">Gym</label>
    <input id="check-7" type="checkbox" name="check">
    <label for="check-7">Alarm</label>
    <input id="check-8" type="checkbox" name="check">
    <label for="check-8">Window Covering</label>
    </div>
    </div>
    
    <button class="fullwidth btn btn-common">Search</button>
    </div>
    
    </div>
    
    </div>
    </div>
    </div>
    </div>
    
    
  
    
    <a href="" class="back-to-top" style="display: none;">
    <i class="lni-chevron-up"></i>
    </a>
    
    <div id="preloader" style="display: none;">
    <div class="loader" id="loader-1"></div>
    </div>
    
    
    <script type="text/javascript" data-pagespeed-no-defer="">pagespeed.lazyLoadImages.overrideAttributeFunctions();</script><script src="assets/js/jquery-min.js.pagespeed.jm.BnirE05kB4.js"></script>
    <script src="assets/js/popper.min.js+bootstrap.min.js+color-switcher.js.pagespeed.jc.6nCLgIEODy.js"></script><script>eval(mod_pagespeed_P8INEXrOJS);</script>
    <script src="assets/js/jquery.mixitup.js+jquery.counterup.min.js.pagespeed.jc.HXncZBtzLW.js"></script><script>eval(mod_pagespeed_Rlj_tHG3Nf);</script>
    <script>eval(mod_pagespeed_sa9ih0QZBv);</script>
    <script src="assets/js/ion.rangeSlider.js.pagespeed.jm.aMXmv-d1af.js"></script>
    <script src="assets/js/jquery.parallax.js"></script>
    <script src="assets/js/waypoints.min.js+wow.js+owl.carousel.min.js+jquery.slicknav.js+nivo-lightbox.js+jquery.slicknav.js+main.js+form-validator.min.js.pagespeed.jc.zQIGudS7Ob.js"></script><script>eval(mod_pagespeed_zgDaRAgh7F);</script>
   
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon="{&quot;rayId&quot;:&quot;7eea8f6999e00da5&quot;,&quot;version&quot;:&quot;2023.7.0&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;9a6015d415bb4773a0bff22543062d3b&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

    
@endsection