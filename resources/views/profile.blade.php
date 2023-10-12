@include('includes.header')
<section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Profile Page</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="aa-myaccount-login">
                                <h4>Change Password</h4>
                                <form action="" class="aa-login-form">
                                    <label for="currentPassword">Current Password:<span>*</span></label>
                                    <input type="password" id="currentPassword" name="currentPassword" required><br>
                                    <label for="newPassword">New Password:</label>
                                    <input type="password" id="newPassword" name="newPassword" required><br>
                                    <label for="confirmPassword">Confirm New Password:</label>
                                    <input type="password" id="confirmPassword" name="confirmPassword" required><br>
                                    <button type="submit" class="aa-browse-btn">Change Password</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="aa-myaccount-register">
                                <h4>Order History</h4>
                                <ul id="orderList">
                                    <!-- Dữ liệu đơn hàng sẽ được hiển thị ở đây -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('includes.footer')