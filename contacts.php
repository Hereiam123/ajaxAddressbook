<?php include ('core/init.php'); ?>

<?php

$db=new Database;

//Run Query
$db->query('SELECT * FROM `contacts`');

//Assign results
$contacts=$db->resultset();

?>

<div class="row">
    <div class="large-12 columns">
        <table>
            <thead>
                <tr>
                    <th width="200">Name</th>
                    <th width="130">Phone</th>
                    <th width="200">Email</th>
                    <th width="250">Address</th>
                    <th width="100">Group</th>
                    <th width="150">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact):?>
                    <tr>
                        <td><a href=""><?php echo $contact->first_name." ".$contact->last_name; ?></a></td>
                        <td><?php echo $contact->phone; ?></td>
                        <td><?php echo $contact->email; ?></td>
                        <td>
                            <ul>
                                <li><?php echo $contact->address1; ?></li>
                                <li><?php if($contact->address2) echo $contact->address2; ?></li>
                                <li><?php echo $contact->city; ?>,<?php echo $contact->state; ?>,<?php echo $contact->zipcode; ?></li>
                            </ul>
                        </td>
                        <td><?php echo $contact->contact_group; ?></td>
                        <td>
                            <ul class="button-group expanded">
                                <li>
                                    <p><a data-open="editModal<?php echo $contact->id;?>" class="button tiny">Edit</a></p>
                                    <div class="reveal editModal" id="editModal<?php echo $contact->id; ?>" data-reveal>
                                        <h2>Edit Contact</h2>
                                        <form id="editContact" action="#" method="post">
                                            <div class="row">
                                                <div class="large-6 columns">
                                                    <label>First Name
                                                        <input type="text" name="first_name" placeholder="Enter First Name" value="<?php echo $contact->first_name;?>" />
                                                    </label>
                                                </div>
                                                <div class="large-6 columns">
                                                    <label>Last Name
                                                        <input type="text" name="last_name" placeholder="Enter Last Name" value="<?php echo $contact->last_name;?>" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="large-4 columns">
                                                    <label>Email
                                                        <input type="email" name="email" placeholder="Enter Email Address" value="<?php echo $contact->email;?>" />
                                                    </label>
                                                </div>
                                                <div class="large-4 columns">
                                                    <label>Phone Number
                                                        <input type="text" name="phone" placeholder="Enter Phone Number" value="<?php echo $contact->phone;?>" />
                                                    </label>
                                                </div>
                                                <div class="large-4 columns">
                                                    <label>Contact Group
                                                        <select name="contact_group">
                                                            <option value="Family" <?php if($contact->contact_group=='Family'){echo 'selected';}?>>Family</option>
                                                            <option value="Friends" <?php if($contact->contact_group=='Friends'){echo 'selected';}?>>Friends</option>
                                                            <option value="Business" <?php if($contact->contact_group=='Business'){echo 'selected';}?>>Business</option>
                                                        </select>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="large-6 columns">
                                                    <label>Address 1
                                                        <input type="text" name="address1" placeholder="Enter Address 1" value="<?php echo $contact->address1;?>" />
                                                    </label>
                                                </div>
                                                <div class="large-6 columns">
                                                    <label>Address 2
                                                        <input type="text" name="address2" placeholder="Enter Address 2" value="<?php echo $contact->address2;?>"  />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="large-4 columns">
                                                    <label>City
                                                        <input type="text" name="city" placeholder="Enter City" value="<?php echo $contact->city;?>"  />
                                                    </label>
                                                </div>
                                                <div class="large-4 columns">
                                                    <label>State
                                                        <select name="state">
                                                            <option>Select State</option>
                                                            <?php foreach($states as $key=>$value): ?>
                                                                <option value="<?php echo $key;?>" <?php if($contact->state==$value){echo 'selected';}?>><?php echo $value; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="large-4 columns">
                                                    <label>Zipcode
                                                        <input type="text" name="zipcode" placeholder="Enter zipcode" value="<?php echo $contact->zipcode;?>" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <label>Notes
                                                        <textarea name="notes" placeholder="Enter Optional Notes" value="<?php echo $contact->notes;?>" ><?php echo $contact->notes;?></textarea>
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                                            <input type="submit" name="submit" class="add-btn button right small" value="Submit">
                                        </form>
                                        <button class="close-button" data-close aria-label="Close modal" type="button">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </li>

                                <li>
                                    <form id="deleteContact" action="#" method="post">
                                        <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                                        <p><input type="submit" class="delete-btn button tiny secondary alert" value="Delete" /></p>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="js/app.js"></script>