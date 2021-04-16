<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Helpdesk | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <h1>Ticketing<small>Support</small></h1>
  </div>
  <div class="login-box-body">
    <h3 class="login-box-msg">Lupa Password</h3>

    <form action="<?php echo base_url()?>login/edit_password" method="post" name="frm">
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pas1" placeholder="Masukkan Password Anda" onChange="cekPass()">
		<?php foreach($akun as $r){?>
		<input type="hidden" class="form-control" name="nik" value="<?php echo $r->nik?>">
		<?php } ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pas2" placeholder="Masukkan Kembali" onChange="cekPass()">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">	   
	   <button type="submit" name="btn" class="btn btn-primary btn-block btn-flat" disabled="true">Submit</button>
        </div>
        </div>
      </div>
    </form>
	<br>
  </div>
</div>
<?php echo $this->session->flashdata("hah");?>
<script src="<?php echo base_url()?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url()?>asset/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>asset/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script>
function cekPass()
{
	p1 = document.frm.pas1.value;
	p2 = document.frm.pas2.value;
	if(p1==p2)
	{
		document.frm.btn.disabled=false;
	}
	else
	{
		document.frm.btn.disabled=true;
	}
}
</script>
</body>
</html>