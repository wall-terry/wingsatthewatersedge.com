
<form class="smart-form" action="/users/login.php" method="post">
    <h1>Enter Username and Password</h1>
    <input type="hidden" name="action" value="login">

    <label>Username:</label>
    <input type="text" name="username" placeholder="Enter Your UserName">

    <label>Password:</label>
    <input type="password" name="password" placeholder="Enter Your Password"><br>

    <button  type="submit">Login</button><br>  
</form>
 <form class="smart-form" action="/index.php" method="get">
     <input type="hidden" name="action" value="new_account">
     <button  type="submit">Create New Account</button>
 </form>  