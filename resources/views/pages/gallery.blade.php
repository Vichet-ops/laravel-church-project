<x-layout title="Gallery">
    <section class="pt-36 pb-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900">Photo Gallery</h1>
                <p class="text-gray-600 mt-3">Moments from our church life and events</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" data-pswp-gallery>
                @php
                    $files = glob(public_path('images/gallery/*.{jpg,jpeg,png,webp}'), GLOB_BRACE) ?: [];
                @endphp

                @forelse ($files as $path)
                    @php
                        $filename = basename($path);
                        $url = asset('images/gallery/' . $filename);
                        $alt = ucfirst(str_replace(['-', '_'], ' ', pathinfo($filename, PATHINFO_FILENAME)));
                        [$width, $height] = @getimagesize($path) ?: [1600, 1067];
                    @endphp
                    <a href="{{ $url }}" data-pswp-item data-pswp-width="{{ $width }}" data-pswp-height="{{ $height }}" class="group block overflow-hidden rounded-xl shadow-sm bg-white">
                        <img src="{{ $url }}" alt="{{ $alt }}" class="w-full h-36 object-cover group-hover:scale-105 transition-transform duration-500"/>
                    </a>
                @empty
                    <div class="col-span-full text-center text-gray-500">No images found in images/gallery/</div>
                @endforelse
            </div>
        </div>
    </section>
</x-layout>

