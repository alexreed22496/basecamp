<div class="card min-h-200px">
    <h3 class="font-normal text-xl py-4 -ml-5 mb-3 border-l-4 border-red-500 pl-4">
        <a href="{{ $project->path() }}"
            class="text-black no-underline"
        >
            {{ $project->title }}
        </a>
    </h3>

    <div class="text-gray-400 mb-10">{{ Str::limit($project->description) }}</div>

    <footer>
        <form method="POST" action="{{ $project->path() }}" class="text-right">
            @method('DELETE')
            @csrf
            <button type="submit" class="text-xs">Delete</button>
        </form>
    </footer>
</div>
