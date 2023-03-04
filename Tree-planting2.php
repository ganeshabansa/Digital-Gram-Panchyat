<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Irrigation</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .header {
        box-sizing: border-box;
        border: 1px solid rgb(38, 122, 39);
        background-color: rgb(68, 182, 56);
        text-align: center;
        margin-top: 3px;
    }

    .yojna-name {
        display: flex;
        margin-left: 20px;
        margin-top: 5px;
    }

    .yojna-name h2 {
        padding: 10px;
    }

    .yojna-name ul {
        text-align: center;
    }

    .header img {
        width: 60px;
        height: 60px;
        margin: 5px;
    }

    .navbar {
        position: sticky;
        height: 60px;
        width: 550px;
        text-align: center;
        box-sizing: border-box;
        margin-left: 200px;
        background-color: rgb(62, 146, 56);
    }

    .nav {
        list-style: none;
        margin-bottom: 5px;
    }

    .nav-link {
        color: white;
        text-decoration: none;
        font-size: 22px;
        margin-bottom: 10px;
        align-content: center;
    }

    .anime {
        box-sizing: border-box;
        margin: 20px;
        background-color: rgb(250, 183, 236);
        height: 55px;
        border-left: 5px solid rgb(182, 67, 157);
        border-right: 5px solid rgb(182, 67, 157);
        border-radius: 10px;
    }

    .anime p {
        margin: 10px;
        font-size: 20px;
    }

    .registration {
        justify-content: center;
        text-align: center;
        border: 1px solid rgb(250, 171, 193);
        background-color: rgb(252, 206, 214);
        border-radius: 20px;
        padding: 5px;
    }

    .formm label {
        font-size: 18px;
    }

    .center {
        text-align: center;
    }

    .form-group.required .control-label:after {
        content: "*";
        color: red;
    }

    .btn {
        font-size: 20px;
        margin: auto;
        align-items: center;
    }
    #back {
        float: left;
    }

    #continue {
        float: right;
    }

    .footer {
        margin: 5px;
        margin-top: 80px;
    }
</style>

<body>
    <header class="header">
        <div class="yojna-name">
            <img src="./img/logo1.png" alt="Logo">
            <h2 style="font-family: 'Times New Roman', Times, serif;">Gram Vikas Yojna</h2>

            <div class="navbar">
                <section class="nav">
                    <a class="nav-link active" aria-current="page" href="./Welcome.php">Home</a>
                    <a class="nav-link" href="./login.php">Login</a>
                    <a class="nav-link" href="./Registration.php">Registration</a>
                    <a class="nav-link" href="#">About Us</a>
                </section>
            </div>
        </div>
    </header>
    <div class="anime">
        <marquee behavior="" direction="" width="100%" scrolldelay="1sec">
            <p>Mahatma Gandhi National Rular Employment Guarantee Scheme (Individual Irrigation).</p>
        </marquee>
    </div>

    <div class="container">
        <div class="container mt-4">
            <div class="registration">
                <h3>Personal Information</h3>
            </div>
            <hr>
            <div class="formm">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group required col-md-6">
                            <label for="inputEmail4" class="control-label">Name</label>
                            <input type="text" class="form-control" name="Name" id="name" placeholder="User Name">
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="inputEmail4" class="control-label">Email</label>
                            <input type="text" class="form-control" name="username" id="email" placeholder="Email">
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="inputPassword4" class="control-label">Mobile No</label>
                            <input type="password" class="form-control" name="phone" id="phone" placeholder="Mobile No">
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="address" class="control-label">Address</label>
                            <input type="password" class="form-control" name="address" id="address"
                                placeholder="Address">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group required col-md-6">
                            <label for="inputCity" class="control-label">City</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="City">
                        </div>
                        <div class="form-group required col-md-6">
                            <label for="inputPin" class="control-label">Pin</label>
                            <input type="number" class="form-control" id="inputPin">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group required col-md-6">
                            <label for="gender" class="control-label">Gender</label> <br>
                            <select class="form-control">
                                <option>Default select</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group required">
                            <label for="age" class="control-label">Age</label> <br>
                            <select class="form-control" id="sel1">
                                <option>Default select</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                                <option>32</option>
                                <option>34</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I agree, all the above information is correct.
                                </label>
                            </div>
                        </div>
                        <div class="buttons">
                            <a href="./Tree-Planting.php" class="back btn btn-primary"> Back</a>
                            <a href="./Tree-planting3.php" class=" submit btn btn-success"> Continue</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <hr>
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="copyright">
                <p>© <span>2022</span> <a href="#" class="transition">@Vaishnavi</a> All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>