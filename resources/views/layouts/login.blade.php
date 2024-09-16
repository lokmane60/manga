<!-- resources/views/links/create.blade.php -->
<form action="{{ route('login.store') }}" method="POST">
    @csrf
    <label for="link1">email:</label>
    <input type="text" name="email" required>
    
    <label for="link2">password:</label>
    <input type="password" name="password" required>

    
    <button type="submit">Save</button>
</form>