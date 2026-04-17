@php
$fluid = asset('davilla/IMG/pink-cupcakes-donuts-with-hearts-pink-background.jpg');
@endphp

<section class="fluid-section-one" style="background-image: url('{{$fluid}}');">
    <div class="outer-box clearfix">
        <div class="content-column left-column">
     
        </div>

        <div class="image-column">
            <div class="image-box">
                <figure class="image">
                    {{-- Caminho corrigido para a pasta public/davilla/images --}}
                    <img src="{{asset('davilla/images/icons/divider_2_light.png')}}" alt="">
                </figure>
            </div>
        </div>

        <div class="content-column right-column">
            <div class="inner-column">
                <h2>Any Candy <br>In Our Stone</h2>
                <span class="devider_icon_light"></span>
                <p>Lorem ipsum dolor sit Amet, consectetur adipiscing elit. Suspendisse condimentum nisi et dolor ornare</p>
                <div class="btn-box">
                    <a href="#" class="theme-btn btn-style-one large alt"><span></span>Make Order Now<span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>  