<div>
    <form>
        <div class="mt-2">
            <input
                type="text"
                class="p-4 w-9/12 border rounded-md  dark:bg-gray-700"
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
        <div class="mt-6">
            @foreach($results as $result)
                <div class="p-2">
                    {{ $result->title }}
                </div>
            @endforeach
        </div>
    </form>
</div>
