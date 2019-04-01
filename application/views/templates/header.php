<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="<?php echo base_url().'assets/js/countup.js'; ?>"></script>
	<style type="text/css">
		body {
			background-color: #474787; 
		}

		label {
			margin: 0;
			margin-top: 10px;
		}

		@import url('https://fonts.googleapis.com/css?family=Permanent+Marker');
		.handsign {
			font-family: 'Permanent Marker', cursive;
			font-weight: bold;
			text-align: center;
			margin: 0;
			margin-top: 10px;
		}

		.row {
			margin: 0;
		}
	</style>
</head>
<body>

<div class="container">
<?php if($this->session->flashdata('user_registered')) : ?>
	<div class="alert alert-success" role="alert">
	  <?php echo $this->session->flashdata('user_registered'); ?>
	</div>
<?php endif; ?>

<?php if($this->session->flashdata('login_failed')) : ?>
	<div class="alert alert-danger" role="alert">
	  <?php echo $this->session->flashdata('login_failed'); ?>
	</div>
<?php endif; ?>
</div>