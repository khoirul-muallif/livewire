<div class="max-w-2xl mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Buat Post Baru</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit="save" class="space-y-4">
        <div>
            <label class="block text-sm font-medium mb-2">Judul</label>
            <input 
                type="text" 
                wire:model="title" 
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                placeholder="Masukkan judul post"
            >
            @error('title') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-2">Konten</label>
            <textarea 
                wire:model="content" 
                rows="6"
                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"
                placeholder="Tulis konten post..."
            ></textarea>
            @error('content') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        </div>

        <button 
            type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-medium"
        >
            Simpan Post
        </button>
    </form>
</div>