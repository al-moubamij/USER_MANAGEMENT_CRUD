<?php
include 'header.php';
if(!isset($_GET['id'] )|| empty($_GET['id']) ){
    header("Location: /medium%20crud/VIEW/");
    exit ; //insure further code is not executed
}else{
    $stmt = $connect->prepare('SELECT * FROM user WHERE id = :id');
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT); 
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    $stmt = $connect->prepare('UPDATE user SET 
    name = :name, 
    email_id = :email_id,
    mobile_no = :mobile_no where id = :id ');
    $stmt->bindParam(':name', $_POST['name'], PDO::PARAM_STR); 
    $stmt->bindParam(':email_id', $_POST['emailid'], PDO::PARAM_STR); //don't miss str or int 
    $stmt->bindParam(':mobile_no', $_POST['mobileno'], PDO::PARAM_INT); 
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);//dont miss id with get
    $stmt->execute();
    header("Location: /medium%20crud/VIEW/");
}
?>

<form method="POST" action="#">
        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $userData['name']?>">
        </div>
        <br>
        <div class="form-group">
            <label for="emailid">Email address</label>
            <input type="email" name="emailid" class="form-control" id="emailid" aria-describedby="emailHelp" placeholder="Enter email id" value="<?php echo $userData['email_id']?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <br />
            <div class="form-group">
                <label for="mobileno">Mobile No</label>
                <input type="number" name="mobileno" class="form-control" id="mobileno" placeholder="Mobile No" value="<?php echo $userData['mobile_no']?>">
            </div>
            <br />
            <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;
            <a href="index.php" class="btn btn-danger">Exit</a>
        </div>
        </form>