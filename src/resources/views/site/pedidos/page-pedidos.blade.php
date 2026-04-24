<!--Page Title-->

   @php
        $bannerPedidos = asset('davilla/pedidios/bannerpedidos.png')
    @endphp
    <section class="page-title" style="background-image:url('{{ $bannerPedidos}}');">
        <div class="auto-container">
            <h1>Shop</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->