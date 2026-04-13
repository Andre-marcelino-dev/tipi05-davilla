<!DOCTYPE html>
<html lang="tt-Br">
<head>
@include('partials.head')
</head>
<body>

<div class="page-wrapper">
    @include('partials.preloader')

    @include('partials.header')

    <main>
    @yeld('content')
   </main>

   @include('partials.footer')

</div>

@include('partials.script')
    
</body>
</html>