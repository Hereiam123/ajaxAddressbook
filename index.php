<?php include ('core/init.php'); ?>
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
            <p><a data-open="addModal" data-contact-id="<?php echo $contact->id; ?>" class="button small float-right">Add Contact</a></p>
            <div class="reveal" data-cid="<?php echo $contact->id; ?>" id="addModal" data-reveal>
                <h2>Add Contact</h2>
                <form id="addContact" action="#" method="post">
                    <div class="row">
                        <div class="large-6 columns">
                            <label>First Name
                                <input type="text" name="first_name" placeholder="Enter First Name" />
                            </label>
                        </div>
                        <div class="large-6 columns">
                            <label>Last Name
                                <input type="text" name="last_name" placeholder="Enter Last Name" />
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns">
                            <label>Email
                                <input type="email" name="email" placeholder="Enter Email Address" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>Phone Number
                                <input type="text" name="phone" placeholder="Enter Phone Number" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>Contact Group
                                <select name="contact_group">
                                    <option value="Family">Family</option>
                                    <option value="Friends">Friends</option>
                                    <option value="Business">Business</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-6 columns">
                            <label>Address 1
                                <input type="text" name="address1" placeholder="Enter Address 1" />
                            </label>
                        </div>
                        <div class="large-6 columns">
                            <label>Address 2
                                <input type="text" name="address2" placeholder="Enter Address 2" />
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-4 columns">
                            <label>City
                                <input type="text" name="city" placeholder="Enter City" />
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>State
                                <select name="state">
                                   <option disabled selected>Select State</option>
                                   <?php foreach($states as $key=>$value): ?>
                                       <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                   <?php endforeach; ?>
                                </select>
                            </label>
                        </div>
                        <div class="large-4 columns">
                            <label>Zipcode
                                <input type="text" name="zipcode" placeholder="Enter zipcode" />
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>Notes
                                <textarea name="notes" placeholder="Enter Optional Notes"></textarea>
                            </label>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="add-btn button right small" value="Submit">
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
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>

