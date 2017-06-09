<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Address Book</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>

    <div class="row">
        <div class="large-6 small-9 columns">
            <h1>Ajax Address Book</h1>
        </div>
        <div class="large-6 small-3 columns">
            <p><a data-open="exampleModal1" class="button small float-right">Add Contact</a></p>
            <div class="reveal" id="exampleModal1" data-reveal>
                <h2>Add Contact</h2>
                <form>
                    <div class="row">
                        <div class="large-6 columns">
                            <label>First Name
                                <input type="text" placeholder="Enter First Name" />
                            </label>
                        </div>
                        <div class="large-6 columns">
                            <label>Last Name
                                <input type="text" placeholder="Enter Last Name" />
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns">
                            <label>Email
                                <input type="email" placeholder="Enter Email Address" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>Phone Number
                                <input type="text" placeholder="Enter Phone Number" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>Contact Group
                                <select>
                                    <option value="husker">Family</option>
                                    <option value="starbuck">Friends</option>
                                    <option value="hotdog">Business</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-6 columns">
                            <label>Address 1
                                <input type="text" placeholder="Enter Address 1" />
                            </label>
                        </div>
                        <div class="large-6 columns">
                            <label>Address 2
                                <input type="text" placeholder="Enter Address 2" />
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns">
                            <label>City
                                <input type="email" placeholder="Enter Email Address" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>State
                                <select>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>Zipcode
                                <input type="text" placeholder="Enter Phone Number" />
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Notes
                                <textarea placeholder="Enter Optional Notes"></textarea>
                            </label>
                        </div>
                    </div>
                    <input type="submit" class="add-btn button right small" value="Submit">
                </form>
                <button class="close-button" data-close aria-label="Close modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <!--Loading Image-->
    <div id="loaderImage">
        <img src="img/ajax-loader.gif">
    </div>

    <!--Main Content-->
    <div id="pageContent">


    </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

