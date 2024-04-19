<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab-5.2[php]</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    </style>
</head>
<body>
    
        <table border="1" height="auto" width="800px">
            <tr>
                <td colspan="8">
                <h1>Xcompany</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="field">
                        <fieldset> 
                            <legend>REGISTRATION <br></legend>
                            <form method="post" action="../REGISTRATION_CHECK.php">
                            <table>
                                <tr>
                                    <td colspan="4">
                                        <form action="">
                                            <h3>Name  :<input type="text"></h3>
                                            <h3>Email :<input type="text"></h3>
                                            <h3>User Name  :<input type="text"></h3>
                                            <h3>Password  :<input type="text"></h3>
                                            <h3>Confirm Password :<input type="text"></h3>
                                            <div class="field">
                                                <fieldset> 
                                                    <legend>Gender <br></legend>
                                                    <input type="radio"name="gender"required>Male
                                                    <input type="radio"name="gender"required>Female
                                                    <input type="radio"name="gender"required>other
                                                </fieldset><br>
                                            </div>
                                            <div class="field">
                                                <fieldset> 
                                                    <legend>Date of Birth</legend>
                                                    <input type="number"   name="dob1" value="" min="1" max="31"> <b> / </b>
                                                    <input type="number" name="dob2" value="" min="1" max="12"> <b> / </b>
                                                    <input type="number" name="dob3" value="" min="1800" max="2050"> (dd/mm/yyy)
                                                </fieldset><br>
                                            </div>
                                            <button>Submit</button><button>Reset</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            </fieldset><br>
                            
                    </div>
                </td>
            </tr>
            <tr>
                <td align="middle"colspan="8">
                <p>Copyright 2017</p>
                </td>
            </tr>
    </table>
</body>
</html>