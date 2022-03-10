<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System Log in</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="index_full">
            <div class="logo">
                <h4 class="text-light text-left my-5">Voting System</h4>
                <div class="my-10 text-light">
                <small>welcome to online voting system</small>
                <br>
                <small>please Enter your Login information for login </small>
                </div>
               
            </div>
            <div class="login bg-light">
                <h2 class="text-center mb-5">login</h2>
                <div class="container">
                    <form>
                        <div class="form-group mb-3">
                            <!-- <label for="">Full name</label> -->
                            <input type="text" class="form-control " 
                                 placeholder="Full name" name="name">
                            
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="">Mobile No</label> -->
                            <input type="text" class="form-control " 
                                 placeholder="Enter Your Mobile No" name="mobile">
                        </div>
                        <div class="form-group mb-3">
                            <!-- <label for="">Password</label> -->
                            <input type="password" class="form-control " id=""
                                placeholder="Password">
                        </div>
                        <div class="form-group mb-3">
                            <select name="std" id="" class="form-control form-select">
                                <option value="group">Group</option>
                                <option value="voter">Voter</option>
                            </select>
                        </div>
                       
                        <button type="submit" class="btn mb-5">Submit</button>
                        <p>Dont Have an account?<a href="./tamplete/registration.php">Register here</a></p>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>