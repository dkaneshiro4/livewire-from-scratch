<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-6 p-4 absolute border rounded-md bg-gray-700 border-indigo-600"> <!-- Margin for spacing below input field -->
        @if (count($results) == 0)
           <p>No results found.</p>
        @endif
        @foreach($results as $result)
            <div class="p-2"> <!-- Optional formatting for results -->
                <a href="/articles/{{ $result->id }}" class="hover:text-blue-500 hover:underline">
                    {{ $result->title }}
                </a>
            </div>
        @endforeach
    </div>
</div>
