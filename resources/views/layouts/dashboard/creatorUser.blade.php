<!-- resources/views/links/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Link and Chapter</title>
    <link rel="stylesheet" href="{{ asset('css/cre.css') }}">
</head>
<body>
    <div class="form-container">
        <!-- First form for Link creation -->
        <form action="{{ route('links.store') }}" method="POST" class="form-card">
            @csrf
            <h2>Create a New Story</h2>
            <label for="link1">Image Link:</label>
            <input type="text" name="image" required>

            <label for="link2">Link:</label>
            <input type="text" name="link" required>

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <button type="submit">Save</button>
        </form>

        <!-- Second form for Chapter creation -->
        <form action="{{ route('chapter.store') }}" method="POST" class="form-card">
            @csrf
            <h2>Create a New Chapter</h2>
            <label for="link1">Image Link:</label>
            <input type="text" name="image" required>

            <label for="link2">Chapter Link:</label>
            <input type="text" name="link" required>

            <label for="nmanga">Name of the Manga:</label>
            <select name="nmanga" id="type">
                @foreach($mangas as $manga)
                    <option value="{{ $manga->id }}">{{ $manga->name }}</option>
                @endforeach
            </select>

            <label for="nchapter">Name of the Chapter:</label>
            <input type="text" name="nchapter" required>

            <label for="date">Date Released of the Chapter:</label>
            <input type="date" name="date" required>

            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
