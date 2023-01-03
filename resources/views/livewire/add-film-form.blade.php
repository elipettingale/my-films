<div class="p-8">
    <form wire:submit.prevent="submitForm" action="#" method="POST">
      <div class="mb-5">
        <label
          for="title"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Title
        </label>
        <input
          wire:model.lazy="title"
          type="text"
          name="title"
          id="title"
          placeholder="Film title"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
        <div class="text-sm mt-1 text-red-500">
            @error('title'){{ $message }}@enderror
        </div>
      </div>
      <div class="mb-5">
        <label
          for="image"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Image
        </label>
        <input
          wire:model.lazy="image"
          type="text"
          name="image"
          id="image"
          placeholder="Image url"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
        <div class="text-sm mt-1 text-red-500">
            @error('image'){{ $message }}@enderror
        </div>
      </div>
      <div class="mb-5">
        <label
          for="release"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Release
        </label>
        <input
          wire:model.lazy="release"
          type="date"
          name="release"
          id="release"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
        <div class="text-sm mt-1 text-red-500">
            @error('release'){{ $message }}@enderror
        </div>
      </div>
      <div class="mb-5">
        <label
          for="summary"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Summary
        </label>
        <textarea
          wire:model.lazy="summary"
          rows="4"
          name="summary"
          id="summary"
          placeholder="Type the film summary"
          class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        ></textarea>
        <div class="text-sm mt-1 text-red-500">
            @error('summary'){{ $message }}@enderror
        </div>
      </div>
      <div>
        <button
          class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
        >
          Submit
        </button>
      </div>
    </form>
</div>
