<style>
    .myprofile {
    text-align: center;
    padding: 20px;
}

.myprofile .profile-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
}

.myprofile h3 {
    margin: 10px 0 5px;
    font-size: 18px;
    font-weight: bold;
}

.myprofile .location {
    font-size: 14px;
    color: #888;
    margin: 5px 0;
}

.myprofile .rating {
    color: #1e88e5;
}

.myprofile .description {
    font-size: 14px;
    color: #555;
    margin: 10px 0;
}

.myprofile .btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 10px 5px;
    font-size: 14px;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.myprofile .btn.hire-me {
    background-color: #00c853;
}

.myprofile .btn.follow {
    background-color: #00bcd4;
}

</style>
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">My Profile</h4>
                            <div class="myprofile">
                                <img src="<?=base_url()?>uploads/hub_images/<?=$user['profile_pic']?>" alt="David Grey. H" class="profile-img">
                                <h3><?=$user['full_name']?></h3>
                                <p class="location">Est. Date :<span class="rating"><?=$user['established_date']?></span></p>
                                <p class="location">Mobile Number :<span class="rating"><?=$user['mobilenumber']?></span></p>
                                <p class="location">Email Address :<span class="rating"><?=$user['email']?></span></p>
                                <p class="location">Identity :<span class="rating"><a href="<?=base_url()?>uploads/hub_images/<?=$user['identity']?>" Download>Download</a></span></p>
                                <p class="description"><?=$user['about']?></p>
                                <button class="btn hire-me">Change Password</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php //echo "<pre>"; print_r($user['full_name']); ?>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Profile</h4>
                            <form class="forms-sample" id="userForm">
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="full_name" placeholder="Full Name"
                                            autocomplete="off" value="<?=$user['full_name']?>">
                                        <input type="hidden" id="user_id" value="<?=$user['user_id']?>">
                                        <input type="hidden" id="prev_identity" value="<?=$user['identity']?>">
                                        <input type="hidden" id="prev_profile_pic" value="<?=$user['profile_pic']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-3 col-form-label">About</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="about" name="about"
                                            placeholder="Description" rows="2"><?=$user['about']?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" placeholder="Email Address"
                                             autocomplete="off" value="<?=$user['email']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="mobilenumber"
                                            placeholder="Phone number" autocomplete="off" value="<?=$user['mobilenumber']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="identity" class="col-sm-3 col-form-label">Identity</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="identity" name="identity">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="profile_pic" class="col-sm-3 col-form-label">Profile Picture</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="profile_pic" name="profile_pic">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Est. Date
                                        </label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="established_date" placeholder="Est. Date"
                                            autocomplete="off" value="<?=$user['established_date']?>">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:<?= base_url() ?>assets/admin/partials/_footer.html -->
        <footer class="footer">
            <div class="footer-wrap">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                            href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                            href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a>
                        templates</span>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>