<?php
/*
  * Template Name: Sign Up
*/
?>
<?php
/*
 * Template Name: Sign Up
 */
if (is_user_logged_in()) {
  wp_safe_redirect('/account/');
  exit;
}
$has_error = 0;
$login_success = '';
$fname = '';
$lname = '';
$email = '';
$password = '';

if (isset($_POST['register-firstname']) && !empty($_POST['register-firstname'])) {

  $fname = $_POST['register-firstname'];
  $lname = $_POST['register-last-name'];
  $email = $_POST['register-email'];
  $password = $_POST['register-password'];
  $cnf_pwd = $_POST['register-confirmpassword'];


  if (false == email_exists($email) && $password == $cnf_pwd) {

    $user_name = trim(strtolower($fname)) . trim(strtolower($lname));
    $user_id = wp_create_user($user_name, $password, $user_email);
    $login_success = '<p class="green-successtext-313825 ">Register Successfully. Login <a href="/my-account">here.</a></p>';

    if (is_wp_error($user_id)) {
      $login_success = '<p class="red-fail">' . $user_id->get_error_message() . '</p>';
      $has_error = 1;
    }

    if ($user_id) {
      $user_data = wp_update_user(array('ID' => $user_id, 'user_email' => $email, 'first_name' => $fname, 'last_name' => $lname, 'phone' => $phone_num, 'email_verify' => 0));
    }
  } else {

    $has_error = 1;
    $login_success = '<p class="red-fail">Email Already Exist.</p>';
    $login_success = ($password != $cnf_pwd) ? '<p class=" ">Mismatch Password and Confirm Password.</p>' : $login_success;
  }
}
?>

<!-- <div class="dmt-105 tmt-75"></div> -->
<section class="position-relative top-0 account-creation-page dpt-250 dpb-115 tpt-230">
  <div class="container">
    <div class="container-inner containerX login_form-section">
      <form class="woocommerce-form contact-info woocommerce-form-register register auth-register-form" action="" method="POST">
        <div class="d-flex align-items-center h-100">
          <div class="row align-items-start w-100">
            <!-- <div class="col-lg-6 pe-lg-2">
              <div class="pe-lg-5 me-lg-5">
                <h2 class="">
                  <?php esc_html_e('Contact Information', 'woocommerce'); ?>
                </h2>
                <h3>
                  <?php do_action('woocommerce_login_form_start'); ?>
                </h3>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                  <label class="" for="user_login"><?php esc_html_e('First Name*', 'woocommerce'); ?></label>

                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text simple-text-input fw-normal woocommerce-Input--text input-text" name="register-firstname" placeholder="First Name*" id="firstusername" autocomplete="firstusername" required value="<?php echo (!empty($_POST['firstusername'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                  <?php // @codingStandardsIgnoreLine
                  ?>
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide p-0 dmt-20 tmt-15">
                  <label class="crimson text-2D392A font-18px lh-1 mb-2 pb-1" for="user_login"><?php esc_html_e('Last Name*', 'woocommerce'); ?></label>

                  <input type="text" class="woocommerce-Input woocommerce-Input--text input-text simple-text-input fw-normal woocommerce-Input--text input-text" required name="register-last-name" placeholder="Last Name*" id="lastusername" autocomplete="lastusername" value="<?php echo (!empty($_POST['lastusername'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                  <?php // @codingStandardsIgnoreLine
                  ?>
                </p>
                <div class="dmt-30">
                  <label class="square-checkbox position-relative d-inline-block"> Please tick to subscribe to our newsletter
                    <input type="checkbox" class="position-absolute opacity-0">
                    <span class="checkmark position-absolute top-center start-0"></span>
                  </label>
                </div>
              </div>
            </div> -->
            <div class="col-lg-6">
              <div class="">
                <h2 class="title-main classic font-35 leading-40 text-2C2924 dmb-40 tmb-30">
                  <?php esc_html_e('Sign-in Information', 'woocommerce'); ?>
                </h2>

                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide w-100 p-0 mb-lg-4 tmb-35">
                  <label class="classic font-15 leading-16 text-2C2924 mb-2 w-100" for="user_login"><?php esc_html_e('Email Address*', 'woocommerce'); ?></label>
                  <input type="mail" class="woocommerce-Input woocommerce-Input--text input-text input-text woocommerce-Input--text input-text login-input border-0 px-4 dpt-20 dpb-20 classic font-15 leading-16 text-2C2924 w-100" required name="register-email" placeholder="Email Address*" id="emailAddress" autocomplete="emailAddress" value="<?php echo (!empty($_POST['emailAddress'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide w-100 p-0 mb-lg-4 tmb-35">
                  <label class="classic font-15 leading-16 text-2C2924 mb-2 w-100" for="user_login"><?php esc_html_e('Password*', 'woocommerce'); ?></label>
                  <input type="password" class="woocommerce-Input woocommerce-Input--text input-text input-text woocommerce-Input--text input-text login-input border-0 px-4 dpt-20 dpb-20 classic font-15 leading-16 text-2C2924 w-100" required name="register-password" placeholder="Password*" id="register-password" autocomplete="password" value="<?php echo (!empty($_POST['password'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />

                </p>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide w-100 p-0 mb-lg-4 tmb-35">
                    <label class="classic font-15 leading-16 text-2C2924 mb-2 w-100" for="user_login"><?php esc_html_e('Confirm Password*', 'woocommerce'); ?></label>
                    <input type="cpassword" required class="woocommerce-Input woocommerce-Input--text input-text input-text woocommerce-Input--text input-text login-input border-0 px-4 dpt-20 dpb-20 classic font-15 leading-16 text-2C2924 w-100" name="register-confirmpassword" placeholder="Confirm Password*" id="register-confirmpassword" autocomplete="cpassword" value="<?php echo (!empty($_POST['cpassword'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
                </p>
                <div class="password-strength-group dmb-25" data-strength="">
                  <div class="password-strength-message">
                    <div class="message-item d-none weak-password">
                      Password Strength: <span style="color:red;">Weak</span>
                    </div>
                    <div class="message-item d-none okay-password">
                      Password Strength: <span style="color:#d7cc00;">Okay</span>
                    </div>
                    <div class="message-item d-none strong-password">
                      Password Strength: <span style="color:#03a900;">Strong</span>
                    </div>
                    <div class="message-item d-none very-strong-password">
                      Password Strength: <span style="color:#03a900;">Very Strong!</span>
                    </div>
                  </div>
                </div>

                <div class="d-lg-flex overflow-y-auto align-items-center justify-content-between">
                  <label class="d-flex align-items-center main-label p-0 me-2 mg-lg-0 mb-3" id="capital">
                    <span class="position-relative top-0 start-0 rounded-circle login-checkmark rounded-circle me-3"></span>
                    <span class="classic font-15 leading-16 text-2C2924 text-capitalize">
                      one uppercase character
                    </span>
                    <input type="checkbox" class="position-absolute opacity-0 login-check-input me-3">
                  </label>
                  <label class="d-flex align-items-center main-label p-0 me-2 mg-lg-0 mb-3" id="number">
                    <span class="position-relative top-0 start-0 rounded-circle login-checkmark rounded-circle me-3"></span>
                    <span class="classic font-15 leading-16 text-2C2924 text-capitalize">
                      one number
                    </span>
                    <input type="checkbox" class="position-absolute opacity-0 login-check-input me-3">
                  </label>
                  <label class="d-flex align-items-center main-label p-0 me-2 mg-lg-0 mb-3" id="length">
                    <span class="position-relative top-0 start-0 rounded-circle login-checkmark rounded-circle me-3"></span>
                    <span class="classic font-15 leading-16 text-2C2924 text-capitalize">
                      8  character (min)
                    </span>
                    <input type="checkbox" class="position-absolute opacity-0 login-check-input me-3">
                  </label>
                </div>

                <div class="d-lg-flex align-items-center dmt-35">
                  <div class="form-row d-flex flex-lg-row flex-column align-items-lg-center">
                    <button type="submit" onclick="wrong_pass_alert()" class="woocommerce-button woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> btnA w-204px bg-BDA673-btn classic font-15 leading-16 fw-normal me-4" name="login" value="<?php esc_attr_e('sign me in', 'woocommerce'); ?>">
                      <?php esc_html_e('Create My Account', 'woocommerce'); ?>
                    </button>
                    <p class="woocommerce-LostPassword lost_password tmt-30">
                      <a href="<?php echo get_home_url(); ?>/my-account" class="classic font-12 leading-16 spacing-1_2 text-2C2924">
                        <?php esc_html_e('I ALREADY HAVE AN ACCOUNT', 'woocommerce'); ?>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </form>
      <div class="text-center dmt-50">
        <?= $login_success; ?>
      </div>
    </div>

  </div>
</section>

<script>
  var myInput = document.getElementById("register-password");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  var passwordsmain = jQuery('#register-password').val().trim();


  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }

    // Validate length
    if (myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }

    jQuery
  }

  function validate_password() {
    var pass = document.getElementById('register-password').value;
    var confirm_pass = document.getElementById('register-confirmpassword').value;
    if (pass != confirm_pass) {
      document.getElementById('wrong_pass_alert').classList.remove("invalid");
      document.getElementById('create').disabled = true;
      document.getElementById('create').style.opacity = (0.4);
    } else {
      document.getElementById('wrong_pass_alert').classList.add("valid");
      document.getElementById('create').disabled = false;
      document.getElementById('create').style.opacity = (1);
    }
  }

  function wrong_pass_alert() {
    if (document.getElementById('pass').value != "" &&
      document.getElementById('confirm_pass').value != "") {
      alert("Your response is submitted");
    } else {
      alert("Please fill all the fields");
    }
  }

  function passwordCheck(password) {
    var strength = 0;

    if (password.length >= 8) {
      strength += 1;

    }

    if (password.match(/(?=.*[0-9])/)) {
      strength += 1;
    }

    if (password.match(/(?=.*[!,%,&,@,#,$,^,*,?,_,~,<,>,])/)) {
      strength += 1;
    }

    if (password.match(/(?=.*[a-z])/)) {
      strength += 1;
    }

    displayBar(strength);
  }

  function displayBar(strength) {
    jQuery(".password-strength-group").attr('data-strength', strength);

    if (strength === 1) {
      jQuery(".weak-password").removeClass('d-none');
      jQuery(".okay-password, .strong-password, .very-strong-password").addClass('d-none');
    } else if (strength === 2) {
      jQuery(".okay-password").removeClass('d-none');
      jQuery(".weak-password, .strong-password, .very-strong-password").addClass('d-none');
    } else if (strength === 3) {
      jQuery(".strong-password").removeClass('d-none');
      jQuery(".weak-password, .okay-password, .very-strong-password").addClass('d-none');
    } else if (strength === 4) {
      jQuery(".very-strong-password").removeClass('d-none');
      jQuery(".weak-password, .okay-password, .strong-password").addClass('d-none');
    } else {
      jQuery(".weak-password, .okay-password, .strong-password, .very-strong-password").addClass('d-none');
    }
  }


  jQuery("#register-password").keyup(function() {
    var password = jQuery(this).val();
    passwordCheck(password);
  });
</script>