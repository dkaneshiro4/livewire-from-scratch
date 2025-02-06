<div class="flex justify-center items-center"> <!-- Center horizontally & vertically -->
    <form class="w-9/12"> <!-- Set a fixed width to align input, button, and results -->
        <div class="flex space-x-2"> <!-- Flex for inline alignment -->
            <input
                type="text"
                class="p-4 flex-1 border rounded-md dark:bg-gray-700"
                placeholder="Type something to search..."
                wire:model.live.debounce="searchText"
            />

            <button class="text-white font-medium rounded-md p-4 bg-indigo-600 disabled:bg-indigo-400"
                    wire:click.prevent="clear()"
                {{ empty($searchText) ? 'disabled' : '' }}
            >
                Clear
            </button>
        </div>

        <div class="mt-6"> <!-- Margin for spacing below input field -->
            @foreach($results as $result)
                <div class="p-2"> <!-- Optional formatting for results -->
                    <a href="/articles/{{ $result->id }}" class="hover:text-blue-500 hover:underline">
                        {{ $result->title }}
                    </a>
                </div>
            @endforeach
        </div>
    </form>
</div>
