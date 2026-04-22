<!-- Fluid Section one -->
@php
    $fluid = asset('davilla/IMG/there-are-many-different-types-pastries-pink-plate.jpg');
@endphp
<section class="fluid-section-one" style="background-image: url({{ $fluid }});">
    <div class="outer-box clearfix">
        <!-- Content Column -->
        <div class="content-column left-column">
            <div class="inner-column">
<h2 style="
    color: #FFFFFF; 
    font-weight: 800;
    font-size: 3.8rem;         /* Diminuído levemente para melhor encaixe */
    line-height: 1.05;         /* Linhas mais próximas para um visual 'bold' e moderno */
    letter-spacing: -2px;      /* Letras mais juntas para impacto visual */
    text-align: center;        /* Centralizado para harmonia */
    margin-bottom: 20px;
">
    Sabor que Marca,<br>
    <span style="
        color: #d81b60; 
        letter-spacing: 1px;   /* Aumenta o respiro na linha de destaque */
        font-size: 0.9em;      /* Proporcionalmente menor que a linha de cima */
        display: block;
        margin-top: 5px;
    ">
        Tradição que Encanta.
    </span>
</h2>

                <p style="color: #d81b60; font-size: 1.1rem; line-height: 1.6; opacity: 0.9; max-width: 450px;">
                    Dos clássicos bolos caseiros aos doces finos mais sofisticados.
                    Na <span style="font-weight: bold; color: #0e0c0c;">Davilla</span>, cada receita é uma celebração de
                    sabor
                    pensada para tornar o seu momento ainda mais especial.
                </p>
                <div class="btn-box">
                    <a href="#" class="theme-btn btn-style-two large alt"
                        style="font-size: 1.2rem; color:#FFFFFF;: 10px 20px;">
                        <span></span>Confira nossa vitrine<span></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Image Column -->
        <div class="image-column">
            <div class="image-box">
                <figure class="image"><img src="https://via.placeholder.com/482x510" alt=""></figure>
            </div>
        </div>
        <!-- Content Column -->
        <div class="content-column right-column">
            <div class="inner-column">


            </div>
        </div>
    </div>
</section>
<!--End Fluid Section one -->
