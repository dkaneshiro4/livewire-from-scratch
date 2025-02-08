<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-6 p-4 absolute border rounded-md bg-gray-700 border-indigo-600"> <!-- Margin for spacing below input field -->
{{--        <div class="absolute top-0 right-0 pt-1 pr-3 pb-1">--}}
{{--            <button type="button" wire:click="dispatch('search.clear-results')" >x</button>--}}
{{--        </div>--}}
        @if (count($results) == 0)
           <p>No results found.</p>
        @endif
        @foreach($results as $result)
            <div class="p-2" wire:key="{{ $result->id }}"> <!-- Optional formatting for results -->
                <a href="/articles/{{ $result->id }}" wire:navigate class="hover:text-blue-500 hover:underline">
                    {{ $result->title }}
                </a>
            </div>
        @endforeach
    </div>
</div>
