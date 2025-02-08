<div class="m-auto w-1/2 mb-4">
    <table>
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
                <th class="py-3 px-6">Title</th>
                <th class="py-3 px-6"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr class="border-b bg-gray-800 border-gray-700" wire:key="{{ $article->id }}">
                    <td class="py-3 px-6">{{ $article->title }}</td>
                    <td class="py-3 px-6">
                        <button class="text-gray-200 p-2 bg-red-700 hover:bg-red-900 rounded-sm"
                                wire:click="delete({{ $article->id }})"
                                wire:confirm="Are you sure you want to delete this article?"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
