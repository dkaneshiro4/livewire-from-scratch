<div class="flex justify-center items-center"> <!-- Center horizontally & vertically -->
    <form class="w-full"> <!-- Set a fixed width to align input, button, and results -->
        <div class="flex space-x-2"> <!-- Flex for inline alignment -->
            <input
                type="text"
                class="p-4 flex-1 border rounded-md bg-gray-700"
                placeholder="{{ $placeholder }}"
                wire:model.live.debounce="searchText"
            />
        </div>
        <livewire:search-results :$results :show="!empty($searchText)" />
    </form>
</div>
