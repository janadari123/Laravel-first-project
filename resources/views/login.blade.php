<!DOCTYPE html>
<html>
    <head>
        <title>Html Form</title>
    </head>

    <body>
        <form action="" method="post">
            <div>
                <label>Name</label>
                <input type="text" name="name"><br><br>
            </div>

            <div>
                <label>Username</label>
                <input type="text" name="uname"><br><br>
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email"><br><br>
            </div>

            <div>
                <label>Telephone No.</label>
                <input type="text" name="phone"><br><br>
            </div>

            <div>
                <label>Gender</label><br>
                <input type="radio" id="Male" name="gender" value="male">
                <label>Male</label><br><br>

                <input type="radio" id="Female" name="gender" value="female">
                <label>Female</label><br><br>

            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password"><br><br>
            </div>

            <div>
                <label>Reenter Password</label>
                <input type="password" name="password"><br><br>
            </div>

            <input type="submit" name="submit">
        </form>
    </body>
</html>
