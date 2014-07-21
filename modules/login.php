
<form action="/users/login.php" method="post">

    <input type="hidden" name="action" value="login">

    <label>Username:</label>
    <input type="text" name="username">

    <label>Password:</label>
    <input type="password" name="password">

    <button type="submit">Login</button>
</form>
<a href="/index.php?action=new_account">Create New Account</a>
