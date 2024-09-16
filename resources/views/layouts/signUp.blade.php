<!-- resources/views/links/create.blade.php -->
<form action="{{ route('signUp.store') }}" method="POST">
    @csrf
    <label for="link1">email:</label>
    <input type="text" name="email" required>
    
    <label for="link2">password:</label>
    <input type="password" name="password" required>
    <label for="link2">name:</label>
    <input type="text" name="name" required>

    
    
    <label for="name">Please select your role:</label>
    <input type="radio" name="role" value="company_user" required>
    <label for="name">company user</label>
    <input type="radio" name="role"  value="creator_user" required>
    <label for="name">creator user</label>
    
    <button type="submit">Save</button>
</form>
