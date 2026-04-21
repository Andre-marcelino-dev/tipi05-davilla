  <!-- Fluid Section one -->

  @php
      $fluid = asset('davilla/IMG/assorted-delicious-cookies-pastries-with-berries-dark-background.jpg');
  @endphp
  <section class="fluid-section-one" style="background-image: url('{{ $fluid }}');">
      <div class="outer-box clearfix">
          <!-- Content Column -->
          <div class="content-column left-column">
              <div class="inner-column">
                  <h2>A Melhor <br>Confeitaria da Região zona Leste</h2>

     <p style="
    text-align: justify; 
    hyphens: auto; 
    font-size: 1.5rem; 
    line-height: 1.4; 
    color: #222; 
    text-shadow: 1px 1px 2px rgba(255,255,255,0.8);
">
    Na <span style="color: #d81b60; font-weight: bold; border-bottom: 2px solid #ffb6c1;">Confeitaria Davilla</span>, 
    o aroma do café fresquinho encontra a delicadeza da nossa confeitaria artesanal. 
    Nossos <span style="font-style: italic;">bolos</span> são criados com massas leves, 
    enquanto nossos <span style="font-style: italic;">doces</span> trazem o equilíbrio perfeito. 
    Oferecemos o cenário ideal para você saborear o que a vida tem de 
    <strong style="text-transform: uppercase; letter-spacing: 1px;">mais doce</strong>.
</p>

              </div>
          </div>

          <!-- Image Column -->
          <div class="image-column">
              <div class="image-box">
                  <figure class="image1"><img src="{{ asset('davilla/IMG/chefe.png') }}" alt=""></figure>
              </div>
          </div>

      </div>
      </div>
  </section>
  <!--End Fluid Section one -->
