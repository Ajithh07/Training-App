<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK</title>
    <link rel="stylesheet" href="amal.css">
<body>
    <header>
        <div class="main_container">
            <div class="header_container">
                <div class="headerclass" id="headerid">
                    <h2><a href="">profile</a></h2>
                </div>
                <div class="headerclass1" id="headerid">
                    <h2><a href="">punch card</a></h2>
                </div>
                <div class="headerclass2" id="headerid">
                    <h2><a href="">Quotes</a></h2>
                </div>
                <div class="headerclass3" id="headerid">
                    <h2><a href="">Vacation</a></h2>
                </div>
                <div class="headerclass4" id="headerid">
                    <h2><a href="">Pending</a></h2>
                </div>
                <div class="headerclass5" id="headerid">
                    <h2><a href="">Project</a></h2>
                </div>
                <div class="headerclass6" id="headerid">
                    <h2><a href="">Documents</a></h2>
                </div>
            </div>
        </div>
    </header>
    <form name="regform" class="formclass">
        <div class="profilebox">
            <h4 class="profiletxt">Profile</h4>
        </div>
        <div class="form_data">
            <div class="form_item">
                <div class="firstname">
                    <h6 class="labl">First Name</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                </div>
                <div class="lstname">
                    <h6 class="labl">Last Name</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                </div>
                <div class="datebrth">
                    <h6 class="labl">date Of Birth</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="gender" id="gen">
                    <h6 class="labl">Gender</h6>
                    <select name="gender" class="selector">
                        <option value="male"> Male</option>
                        <option value="female">Female</option>
                        <option value="other">other</option>
                    </select>
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="email">
                    <h6 class="labl">Email</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="mobile">
                    <h6 class="labl">Mobile Number</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="joiningdate">
                    <h6 class="labl">Joining Date</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="empcode">
                    <h6 class="labl">Employee Code</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="empaddrs">
                    <h6 class="labl">Employe Address</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="EmpType">
                    <h6 class="labl">Employee Type</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="designation">
                    <h6 class="labl">Designation</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="Department">
                    <h6 class="labl">Department</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="Probation status">
                    <h6 class="labl">Probation Status</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="probation_period">
                    <h6 class="labl">Probation Period</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="work_status">
                    <h6 class="labl">Work Status</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="salary">
                    <h6 class="labl">Salary</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="work_hrs">
                    <h6 class="labl">Work Hours</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="Weekly_hrs">
                    <h6 class="labl">Weekly work Hours</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="pan">
                    <h6 class="labl">Pan Number</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
                <div class="adhar">
                    <h6 class="labl">Adhar Number</h6>
                    <input type="text" name="name" onkeyup=" return validateFname()">
                    <div class="error" id="nameErr"></div>
                </div>
            </div>
        </div>
        <footer>
            <div class="bottom">
                <div class="save">
                    <button type="submit" class="a" value="Submit" onclick="return nuSUb()">Submit</button>
                </div>
                <div class="discard">
                    <button class="a" onclick="allClear()">Discard</button>
                </div>
                <div class="archive">
                    <button class="a">Archive</button>
                </div>
            </div>
    </form>
    </footer>
</body>
</head>
</html>