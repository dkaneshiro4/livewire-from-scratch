<div>
    <form
        wire:submit="changeName()"
    >
        <div class="mt-2">
            <select
                class="p-4 rounded-md  dark:bg-gray-700"
                wire:model.fill="greeting"
            >
                <option value="Hello">Hello</option>
                <option value="Aloha">Aloha</option>
                <option value="Hey">Hey</option>
                <option value="Wassup">Wassup</option>
            </select>
            <input
                type="text"
                class="p-4 rounded-md  dark:bg-gray-700"
                wire:model="name"
            />
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
            >
                Greet
            </button>
        </div>
    </form>
    @if ($name != '')
        <div class="mt-6">
            {{ $greeting }}, {{ $name }}!!!
        </div>
    @endif
</div>
