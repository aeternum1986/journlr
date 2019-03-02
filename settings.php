<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 27/09/2018
 * Time: 7:25 PM
 */

include("inc/header.php");
include("inc/navbar.php");
?>
<div class="container align-vertical border border-light" style="width:30%">
        <div class="form-group align-self-center ">
            	<div class="row">
  			<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
					<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
					<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
					<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
				</div>
  			</div>
  			<div class="col-9">
    				<div class="tab-content" id="v-pills-tabContent">
	      			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Home</div>
	      			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Profile</div>
      				<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Messages</div>
      				<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Settings</div>
    			</div>
  		</div>
	</div>
		<button class="btn btn-info my-4 btn-block" type="submit" name="submit" style="position:relative;">Save</button>
</div>
</div>


<?php
include("inc/footer.php");
?>
