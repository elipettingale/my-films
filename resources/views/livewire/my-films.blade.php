<div>
    <div class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach($films as $film)
            <div class="w-full">
                <div class="bg-white rounded-lg overflow-hidden shadow relative">
                    <img class="h-56 w-full object-cover object-center" src="{{ $film->image }}" alt="{{ $film->title }}">
                    <div class="p-4 h-auto md:h-40 lg:h-48">
                        <p class="block font-semibold mb-2 text-lg md:text-base lg:text-lg">
                            {{ $film->title }} ({{ $film->release->format('Y') }})
                        </p>
                        <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                            {{ $film->summary }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
