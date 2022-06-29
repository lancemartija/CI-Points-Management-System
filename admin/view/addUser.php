<div>
    <form action="../includes/users.inc.php" method="POST">
        <label for="email">Firt Name</label>
        <input type="text" name="firstname" id="firstname" required><br>

        <label for="email">Middle Name</label>
        <input type="text" name="middlename" id="middlename" required><br>

        <label for="email">Last Name</label>
        <input type="text" name="lastname" id="lastname" required><br>

        <label for="email">Address</label>
        <input type="text" name="address" id="address" required><br>

        <label for="email">Contact Number</label>
        <input type="number" name="contact" id="contact" required><br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" required><br>

        <label for="email">Password</label>
        <input type="password" name="password" id="password" required><br>

        <label for="email">Confirm Password</label>
        <input type="password" name="passwordRepeat" id="passwordRepeat" required><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>

<?php
if (isset($_GET['status']) && $_GET['status'] == 'UserInputSuccess') { ?>
    <span>Input Success</span>
<?php } else if (isset($_GET['error']) && $_GET['error'] == 'InvalidEmail') { ?>
    <span>Invalid Email</span>
<?php } else if (isset($_GET['error']) && $_GET['error'] == 'PwdnotMatch') { ?>
    <span>Password Not Match</span>
<?php } else if (isset($_GET['error']) && $_GET['error'] == 'EmailTaken') { ?>
    <span> Email Taken</span>
<?php } else if (isset($_GET['error']) && $_GET['error'] == 'WeakPassword') {  ?>
    <span>Weak Password</span>
<?php } ?>