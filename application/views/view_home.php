<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="http://localhost:8888/ci226/public/jquery/jquery-ui.min.css">
        <script src="http://localhost:8888/ci226/public/jquery/external/jquery/jquery.js"></script>
        <script src="http://localhost:8888/ci226/public/jquery/jquery-ui.min.js"></script>
        <script>
            $(function () {
                $("#tabs").tabs();

            });
        </script>
    </head>
    <body>

        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Add teacher</a></li>
                <li><a href="#tabs-2">Add student</a></li>
            </ul>
            <div id="tabs-1">
                <form method="post" >
                    <label>Name</label><br><br>
                    <input name="name" type="text"/><br><br>
                    <label>Mobile number</label><br><br>
                    <input name="mobileNumber" type="text"/><br><br>
                    <label>Address</label><br><br>
                    <input name="address" type="text"/><br><br>
                    <label>Password</label><br><br>
                    <input name="password" type="text"/><br><br>
                    <input type="submit" value="Submit" name="teacherSubmit">
                </form>
                

            </div>
            <div id="tabs-2">
                <form method="post">
                    <label>Name</label><br><br>
                    <input name="name" type="text"/><br><br>
                    <label>Gurdian name </label><br><br>
                    <input name="gurdianName" type="text"/><br><br>
                    <label>Address</label><br><br>
                    <input name="address" type="text"/><br><br>
                    <label>Enroll class</label><br><br>
                    <select>

                        <option value="one">One</option>
                        <option value="two">Two</option>
                        <option value="three">Four</option>
                        <option value="four">Five</option>
                    </select>
                    <br><br>
                    <br><br>

                    <input type="submit" value="Submit" name="studentSubmit">
                </form>
            </div>
            
        </div>


    </body>
</body>
</html>
