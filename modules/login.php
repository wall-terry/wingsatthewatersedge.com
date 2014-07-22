
<form class="smart-form" action="/users/login.php" method="post">
    <h1>Enter Username and Password</h1>
    <input type="hidden" name="action" value="login">

    <label>Username:</label>
    <input type="text" name="username" placeholder="Enter Your UserName">

    <label>Password:</label>
    <input type="password" name="password" placeholder="Enter Your Password">

    <button  type="submit">Login</button><br>
    <button  onclick="/index.php?action=new_account">Create New Account</button>
</form>
 