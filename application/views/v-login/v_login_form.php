<html>
  <head>
    <title>Sign Administrator</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <?php echo link_tag('assets/lte/bootstrap/css/bootstrap.css');  ?>
    <!-- Font Awesome -->
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'); ?>
    <!-- Theme style -->
    <?php echo link_tag('assets/lte/dist/css/AdminLTE.min.css'); ?>

  </head>
  <body class="hold-transition login-page ">
    <div class="login-box">
    <div class="login-logo">
      <b>SIM Data Siswa</b>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Sign in Administrator </p>
            <div id="error"></div>
        <?php echo form_open('login/#',array("id"=>"form-login")); ?>
          <div class="form-group has-feedback">
            <?php echo form_input('username','',array("class"=>"form-control","placeholder"=>"Username","autocomplete"=>"off")); ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
          <?php echo form_input(array("type"=>"password","name"=>"password","class"=>"form-control","placeholder"=>"Password","autocomplete"=>"off")); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        <?php echo form_button('login','Sign In',array("class"=>"btn btn-primary btn-block btn-flat","onclick"=>"auth()"));
        echo form_close(); ?>
    </div>
  </div>
    <!-- jQuery 2.2.3 -->
    <script src="../assets/lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
   <script src="../assets/lte/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<script type="text/javascript">
$(document).ready(function (e) {

});
function auth() {
    if ($('[name="username"]').val() == "" || $('[name="password"]').val() == "") {
        var status = "required"
        $.ajax({
          type: "POST",
          url: "error",
          data: "status="+status,
          success: function (data) {
              $("#error").html(data)
              $("#form-login")[0].reset()
          }
        });
    }
    else {
      $.ajax({
        type: "POST",
        url: "auth",
        data: $("#form-login").serialize(),
        success: function (data) {      
            if (data == 1) {
              $(location).attr('href','../datasiswa/show')
              $("#form-login")[0].reset()
            }
            else {
              var status = "wrong"
              $.ajax({
                type: "POST",
                url: "error",
                data: "status="+status,
                success: function (data) {
                    $("#error").html(data)
                    $("#form-login")[0].reset()
                }
              });
            }
        }
      });
    }
  }
</script>
