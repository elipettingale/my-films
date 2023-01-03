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