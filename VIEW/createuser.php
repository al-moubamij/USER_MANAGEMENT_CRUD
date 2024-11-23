<?php
include_once "header.php";
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $connect->prepare('INSERT INTO user (name, email_id, mobile_no) VALUES (:name, :emailid, :mobileno)');
        $stmt->execute(array(
            ':name' => $_POST['name'],
            ':emailid' => $_POST['emailid'],
            ':mobileno' => $_POST['mobileno']
        ));
        header("Location: /medium%20crud/VIEW/");
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>

<form method="POST" action="#">
        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        </div>
        <br>
        <div class="form-group">
            <label for="emailid">Email address</label>
            <input type="email" name="emailid" class="form-control" id="emailid" aria-describedby="emailHelp" placeholder="Enter email id">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <br />
            <div class="form-group">
                <label for="mobileno">Mobile No</label>
                <input type="number" name="mobileno" class="form-control" id="mobileno" placeholder="Mobile No">
            </div>
            <br />
            <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;
            <a href="/pdocrud"><button type="button" class="btn btn-danger">Exit</button></a>
        </div>
        </form>
</body>
</html>