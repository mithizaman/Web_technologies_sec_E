
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function validateName($name) {
        if (!empty($name) && preg_match('/^[a-zA-Z]+[\s][a-zA-Z]+$/', $name)) {
            return true;
        }
        return false;
    }

    
    function validateEmail($email) {
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    
    function validateGender($gender) {
        if (!empty($gender)) {
            return true;
        }
        return false;
    }

    
    function validateDOB($dob) {
        if (!empty($dob) && preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $dob)) {
            list($year, $month, $day) = explode('-', $dob);
            if ($year >= 1900 && $year <= 2016 && $month >= 1 && $month <= 12 && $day >= 1 && $day <= 31) {
                return true;
            }
        }
        return false;
    }

    
    function validatePassword($password) {
        if (!empty($password)) {
            return true;
        }
        return false;
    }

   
    function validatePasswordMatch($password, $confirm_password) {
        if ($password === $confirm_password) {
            return true;
        }
        return false;
    }

    
    $errors = [];
    $first_name = $_POST['first_name'];
    if (!validateName($first_name)) {
        $errors[] = "First name must contain two words and cannot be empty";
    }

    $last_name = $_POST['last_name'];
    if (!validateName($last_name)) {
        $errors[] = "Last name must contain two words and cannot be empty";
    }

    $email = $_POST['email'];
    if (!validateEmail($email)) {
        $errors[] = "Invalid email address";
    }

    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    if (!validateGender($gender)) {
        $errors[] = "Gender must be selected";
    }

    $dob = $_POST['dob'];
    if (!validateDOB($dob)) {
        $errors[] = "Invalid date of birth";
    }

    $password = $_POST['password'];
    if (!validatePassword($password)) {
        $errors[] = "Password cannot be empty";
    }

    $confirm_password = $_POST['confirm_password'];
    if (!validatePasswordMatch($password, $confirm_password)) {
        $errors[] = "Passwords do not match";
    }

    if (empty($errors)) {
        echo "Registration Successful!<br>";
        echo "First Name: $first_name <br>";
        echo "Last Name: $last_name <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "Date of Birth: $dob <br>";
    } else {
        foreach ($errors as $error) {
            echo "$error<br>";
        }
    }
}
?>
