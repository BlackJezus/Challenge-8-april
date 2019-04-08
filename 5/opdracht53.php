<?php
function idOptions()
{
    $conn = mysqli_connect('localhost', 'root', '', 'dbchallenge');
    $query = "SELECT user_id FROM users";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_all($result);
    echo "<option value=''></option>";
    foreach ($data as $values) {
        foreach ($values as $value) {
            echo "<option value='" . $value . "'>" . $value . "</option>";
        }
    }
    mysqli_close($conn);
}