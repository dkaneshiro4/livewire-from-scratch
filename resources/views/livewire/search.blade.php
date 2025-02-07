<div class="flex justify-center items-center"> <!-- Center horizontally & vertically -->
    <form class="w-9/12"> <!-- Set a fixed width to align input, button, and results -->
        <div class="flex space-x-2"> <!-- Flex for inline alignment -->
            <input
                type="text"
                class="p-4 flex-1 border rounded-md bg-gray-700"
                placeholder="{{ $placeholder }}"
                wire:model.live.debounce="searchText"
            />

            <button class="text-white font-medium rounded-md p-4 bg-indigo-600 disabled:bg-indigo-400"
                    wire:click.prevent="clear()"
                {{ empty($searchText) ? 'disabled' : '' }}
            >
                Clear
            </button>
        </div>
        <livewire:search-results :$results :show="!empty($searchText)" />
    </form>
</div>
