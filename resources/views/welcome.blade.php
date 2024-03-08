<x-layouts.app>
    <main class="bg-emerald-300">
        <section class="container mx-auto md:flex ">
            <div class="py-8 px-4 md:px-0">
                <h1 class="main-color-1 text-6xl md:w-2/3"><span class="font-bold">Acquista e vendi articoli usati</span>
                    senza alzarti dal divano</h1>
                <button class="main-bg-color-1 p-2 mt-8 rounded-full text-white"><a href="">
                  </a>
                  <i
                        class="fa-solid fa-plus me-2 rounded-full border border-white p-1"></i>Vendi subito</button>
            </div>
            <img class="h-full md:w-1/3" src="{{ asset('images/business-people.jpg') }}" alt="img">
        </section>
    </main>
    <section class="container mx-auto">
        <h2 class="text-4xl text-slate-600 mt-8">Il meglio al miglior prezzo</h2>
        <div class="mt-8 flex justify-center md:justify-normal flex-wrap gap-4">
            @foreach ($products as $product)
                <x-product-card :product='$product'/>
            @endforeach
        </div>
    </section>
</x-layouts.app>
