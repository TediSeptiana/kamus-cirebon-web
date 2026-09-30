<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kamus Bahasa Cirebon</title>
</head>
<body>

    <h1>Kamus Digital Bahasa Cirebon</h1>
    <hr>

    {{-- FORM PENCARIAN --}}
    <form action="{{ route('dictionary.index') }}" method="GET">
        <label>Cari kata:</label>
        <input type="text" name="keyword" value="{{ $keyword }}" placeholder="Contoh: acar">

        <label>Kategori:</label>
        <select name="category_id">
            <option value="">-- Semua Kategori --</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}" {{ $categoryId == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Cari</button>
        <a href="{{ route('dictionary.index') }}">Reset</a>
    </form>

    <hr>

    {{-- INFO JUMLAH HASIL --}}
    <p>
        Menampilkan {{ $words->firstItem() ?? 0 }} - {{ $words->lastItem() ?? 0 }}
        dari total {{ $words->total() }} kata.
    </p>

    {{-- DAFTAR KATA --}}
    @forelse ($words as $word)
        <div style="margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">
            <h3>{{ $word->lemma }}</h3>

            <p>
                <strong>Arti:</strong> {{ $word->indonesian_meaning }} <br>
                <strong>Kelas Kata:</strong> {{ $word->word_class }} <br>
                <strong>Kategori:</strong> {{ $word->category->name ?? '-' }}
            </p>

            @if ($word->examples->count() > 0)
                <p><strong>Contoh Kalimat:</strong></p>
                <ul>
                    @foreach ($word->examples as $ex)
                        <li>
                            <em>{{ $ex->cirebon_sentence }}</em> <br>
                            &rarr; {{ $ex->indonesian_translation }}
                        </li>
                    @endforeach
                </ul>
            @endif

            @if ($word->audio_path)
                <p>
                    <strong>Audio:</strong>
                    <audio controls src="{{ asset('storage/' . $word->audio_path) }}"></audio>
                </p>
            @endif

            @if ($word->notes)
                <p><strong>Catatan:</strong> {{ $word->notes }}</p>
            @endif
        </div>
    @empty
        <p><strong>Tidak ada data kata yang ditemukan.</strong></p>
    @endforelse

    <hr>

    {{-- PAGINATION --}}
    <div>
        {{ $words->links() }}
    </div>

</body>
</html>