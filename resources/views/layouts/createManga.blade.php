<!-- resources/views/links/create.blade.php -->
<form action="{{ route('links.store') }}" method="POST">
    @csrf
    <label for="link1">First Link:</label>
    <input type="text" name="image" required>
    
    <label for="link2">Second Link:</label>
    <input type="text" name="link" required>
    
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    
    <button type="submit">Save</button>
</form>
