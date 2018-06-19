<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PGDAEM</title>
</head>
<body>
   <form action="savepgdaem.php" method="POST">
    <table>
        <tr>
            <td><label for="program">Program:</label></td>
            <td><input name='program' type="text" value='PGDAEM' readonly></td>
        </tr>
        <tr>
            <td><label for="batch">Batch:</label></td>
            <td><select name="batch" id="batch">
                <option value="2014-15">2014-15</option>
                <option value="2015-16">2015-16</option>
                <option value="2016-17">2016-17</option>
                <option value="2017-18">2017-18</option>
                <option value="2018-19">2018-19</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="state">State:</label></td>
            <td><select name="state" id="state">
                <option value="assam">Assam</option>
                <option value="nagaland">Nagaland</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="semester">Semester</label></td>
            <td><select name="semester" id="semester">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="name">Candidate Name:</label></td>
            <td><input id="Name" name='canname' type="text"></td>
        </tr>
        <tr>
            <td><label for="id">Candidate ID:</label></td>
            <td><input type="text" name="id" id="id" value='<?php echo time(); ?>'></td>
        </tr>
        <tr>
            <td><label for="designation">Designation:</label></td>
            <td><input type="text" name="designation" id="designation"></td>
        </tr>
        <tr>
            <td><label for="address">Address</label></td>
            <td><input name='address' type="text" id="address"></td>
        </tr>
        <tr>
            <td><label for="phone">Phone NO: </label></td>
            <td><input type="text" name="phoneno" id="phone"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td><label for="qualificationi">Qualification:</label></td>
            <td><input type="text" name="qualification" id="qualification"></td>
        </tr>
        <tr>
            <td><label for="discipline">Discipline:</label></td>
            <td><input type="text" name="discipline" id="discipline"></td>
        </tr>
        <tr>
            <td><label for="lenofservice">Length Of Service:</label></td>
            <td><input type="text" name="lenofservice" id="lenofservice"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
            <td><input type="reset" value="Reset"></td>
        </tr>
    </table>
</form>
    
    
</body>
</html>