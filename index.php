

<?php include_once("include/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>facebook.com | connect Together</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="bg-light">

    <nav class="navbar navabar-expand-lg navbar-dark bg-primary">
       <div class="container">
        <a href="index.php" class="navbar-brand mt-2">
            <h5>Facebook</h5>
        </a>
        <form method="post">

        <table class="ml-auto">
            <tr>
                <th class="small text-white">Username Or Email</th>
                <th class="small text-white">Password</th>
            </tr>
            <tr>
                <td><input type="text" name="username" placeholder="username/email" class="form-control form-control-sm"></td>
                <td><input type="password" name="password" placeholder="password" class="form-control form-control-sm"></td>
                <td><input type="submit" name="login" class="btn btn-info btn-sm"></td>
            </tr>
        </table>
        </form>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4">Welcome in No.1 Social Networking Site</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos itaque, animi ut pariatur impedit numquam rem mollitia incidunt nulla, magni expedita. Est odit vero consequuntur voluptatem, aliquam quasi accusamus consequatur.</p>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                       <h2 class="blockquote m-0 p-0">Create an Account</h2>
                       <small class="text-muted">100% Free of Cost</small>
                        <form method="post"  class="mt-2">
                         <div class="row">
                                <div class="form-group col">
                                <label for="fname" class="m-0 p-0 text-muted">First Name</label>
                                <input type="text" id="fname" name="fname" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label for="lname" class="m-0 p-0 text-muted">Last Name</label>
                                <input type="text" id="lname" name="lname" class="form-control">
                            </div>
                         </div>
                            <div class="form-group">
                                <label for="email" class="m-0 p-0 text-muted">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact" class="m-0 p-0 text-muted">Contact</label>
                                <input type="number" id="contact" name="contact" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dateofbirth" class="m-0 p-0 text-muted">Date Of Birth</label>
                                <input type="date" id="dateofbirth" name="dob" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password" class="m-0 p-0 text-muted">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="create_account" class="btn btn-success btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php
if(isset($_POST['create_account']))
{
    $data = [
        'first_name' => $_POST['fname'],
        'last_name' => $_POST['lname'],
        'email' => $_POST['email'],
        'contact' => $_POST['contact'],
        'dob' => $_POST['dob'],
        'password' => md5($_POST['password'])
    ];
    
    if(insertData('account',$data))
    {
        redirect('index');
    }
    else
    {
        echo "fail";
    }
}

//login work
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = md5($_POST['password']); 
    
    $count = countData('account',"(email ='$username' OR contact = '$username') AND password = '$password'");
    
    if($count > 0)
    {
        $_SESSION['user'] = $username;
        redirect('profile');
    }
    else
    {
        echo "Username and Password is incorrect try again";
    }
}
?>

