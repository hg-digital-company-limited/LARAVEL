<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="{{ $isEditMode ? 'update' : 'store' }}">
        <input type="text" wire:model="title" placeholder="Title">
        @error('title')
            <span class="error">{{ $message }}</span>
        @enderror

        <textarea wire:model="content" placeholder="Content"></textarea>
        @error('content')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit">{{ $isEditMode ? 'Update' : 'Create' }}</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>
                        <button wire:click="edit({{ $post->id }})">Edit</button>
                        <button wire:click="delete({{ $post->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
</div>
