@if ( $products && count($products) > 0)
<div class="flex justify-center mt-3 px-2">
    <div class="max-w-7xl w-full">
        <h2 class="font-bold text-xl text-gray-900 inline">
            Productos destacados -
        </h2>
        <a class="inline text-blue-700 text-sm" href="{{ route('products.show') }}">
            Ver todos
        </a>
        <p class="text-sm font-semibold text-gray-600">
            Los mejores productos de todos abastos
        </p>
    </div>
</div>
<div class="flex justify-center px-2">
    <div class="owl-carousel owl-theme max-w-7xl my-1 text-center relative" id="carousel_products_categories">

        @foreach ($products as $product)

            @include('components.card_product')

        @endforeach

    </div>
</div>

<script>
    $('#carousel_products_categories').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:2
            },
            640:{
                items:3
            },
            768:{
                items:4
            },
            1024:{
                items:5
            }
        }
    })
</script>
@endif
