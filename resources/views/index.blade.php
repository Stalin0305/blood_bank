<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' href="{{secure_asset('bootstrap/css/bootstrap.css')}}">
    <link rel='stylesheet' type='text/css' href="{{secure_asset('bootstrap/css/style.css' )}}">
    <script src="{{ asset('bootstrap/js/jquery.min.js' )}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js' )}}"></script>   
</head>
<body>
    <!-- head logo -->
    <div class="jumbotron-fluid">
        <h1 class="display-4 text-center">Blood Bank</h1>
    </div>
    <!------------------------------------------------------------------------------------->
    <!-- Navbar with login register buttons -->
    <nav class="navbar navbar-light navbar-expand sticky-top bg-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin_login">Admin Login</a>
                </li>
            </ul>
            <div class="btn-group ">
                <form method="POST" action="/donor_auth"> 
                @csrf
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button class="btn  rounded" type="submit"><span>Login</span></button>
                </form>
            </div>
     </nav>
    @if(session('status'))
        <div class="alert alert-danger col-12 text-center">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="container-fluid col-4 float-right">
        <form method="POST" action="/register">
            @csrf
            <h1>Register with us</h1>
            <h5>Happy donating</h5>
            <div class="form-row">
                <!-- <div class="col"> -->
                    <input type="text" name="fname" class="form-control " id="margin_spacer" placeholder="First Name" required="true">
                <!-- </div> -->
                <!-- <div class="col"> -->
                    <input type="text" name="lname" class="form-control " placeholder="Last Name" id="margin_spacer" required="true">
                <!-- </div> -->
            </div>
            <!-- <div class="form-row"> -->
                <!-- <div class="form-col"> -->
                <textarea  rows="4" cols="30" placeholder="Address" name="address" id="margin_spacer" class="form-control" required="true"></textarea>

                <input type="number" name="contact" placeholder="Mobile Number" id="margin_spacer" class="form-control" required="true">

                <input type="password" name="password" placeholder="New Password" id="margin_spacer" class="form-control" required="true">
            <h6>Blood Group</h6>
            <!-- <div class="form-row"> -->
                <select class="form-control bloodtype" id="margin_spacer" name='bloodtype' required="true">
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
                </select>
            <!-- </div> -->
            <h6>Date of Birth</h6>
            <div class="container-flex col-7 dob">
            <div class="form-row" id="margin_spacer">
            <!-- <div id="margin_spacer"> -->
                <div class="col dob">
            <select class="form-control dob" name="day" required="true">
                <option>Day</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
            </select>
        </div>
            <!-- </div> -->
            <div class="col dob">
                <select class="form-control dob"  name="month" required>
                    <option>Month</option>
                    <option>Janaury</option>
                    <option>Febraury</option>
                    <option>March</option>
                    <option>April</option>
                    <option>May</option>
                    <option>June</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                    <option>November</option>
                    <option>December</option>
                </select>
            </div>
            <div class="col dob">
                <select class="form-control dob"  name="year" required> 
                    <option>Year</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                    <option>2011</option>
                    <option>2010</option>
                    <option>2009</option>
                    <option>2008</option>
                    <option>2007</option>
                    <option>2006</option>
                    <option>2005</option>
                    <option>2004</option>
                    <option>2003</option>
                    <option>2002</option>
                    <option>2001</option>
                    <option>2000</option>
                    <option>1999</option>
                    <option>1998</option>
                    <option>1997</option>
                    <option>1996</option>
                    <option>1995</option>
                    <option>1994</option>
                    <option>1993</option>
                    <option>1992</option>
                    <option>1991</option>
                    <option>1990</option>
                    <option>1989</option>
                    <option>1988</option>
                    <option>1987</option>
                    <option>1986</option>
                    <option>1985</option>
                    <option>1984</option>
                    <option>1983</option>
                    <option>1982</option>
                    <option>1981</option>
                    <option>1980</option>
                    <option>1979</option>
                    <option>1978</option>
                    <option>1977</option>
                    <option>1976</option>
                    <option>1975</option>
                    <option>1974</option>
                    <option>1973</option>
                    <option>1972</option>
                    <option>1971</option>
                    <option>1970</option>
                    <option>1969</option>
                    <option>1968</option>
                    <option>1967</option>
                    <option>1966</option>
                    <option>1965</option>
                    <option>1964</option>
                    <option>1963</option>
                    <option>1962</option>
                    <option>1961</option>
                    <option>1960</option>
                    <option>1959</option>
                    <option>1958</option>
                    <option>1957</option>
                    <option>1956</option>
                    <option>1955</option>
                    <option>1954</option>
                    <option>1953</option>
                    <option>1952</option>
                    <option>1951</option>
                    <option>1950</option>
                    <option>1949</option>
                    <option>1948</option>
                    <option>1947</option>
                    <option>1946</option>
                    <option>1945</option>
                    <option>1944</option>
                    <option>1943</option>
                    <option>1942</option>
                    <option>1941</option>
                    <option>1940</option>
                </select>
            </div>
        </div>
    </div>
        <h6>Gender</h6>
        <div id="margin_spacer">
            <!-- <div class="form-col" id="margin_spacer"> -->
                <input type="radio" name="gender" id="margin_spacer" value="Male" required>
                <label for="male">Male</label>
            <!-- </div> -->
            <!-- <div class="form-col" id="margin_spacer"> -->
                <input type="radio" name="gender" id="margin_spacer" value="Female" required>
                <label for="female">Female</label>
            <!-- </div> -->
            <!-- <div class="form-col" id="margin_spacer"> -->
                <input type="radio" name="gender" id="margin_spacer" value="Other" required>
                <label for="other">Other</label>
            <!-- </div> -->
        </div>
        <div class="hr">
            <hr>
        </div>
        <input type="submit" name="Register" value="Register" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
