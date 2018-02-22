<?php
$voltas = UserRootViewFinder::GetBackSlashes();

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo $voltas;?>recursos/img/logo_limpo.png" type="image/png">

<link rel ="stylesheet" type ="text/css" href ="<?php echo $voltas;?>recursos/css/bootstrap.min.css" />    

<link rel ="stylesheet" type ="text/css" href ="<?php echo $voltas;?>recursos/css/animate.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel ="stylesheet" type ="text/css" href ="<?php echo $voltas;?>recursos/css/style.css" />
<script type = "text/javascript" src ="<?php echo $voltas;?>recursos/js/jquery.js" ></script>
<script type = "text/javascript" src ="<?php echo $voltas;?>recursos/js/jqueryui.js" ></script>
<script type = "text/javascript" src ="<?php echo $voltas;?>recursos/js/bootstrap.min.js" ></script>
<script type ="text/javascript" src = "<?php echo $voltas;?>recursos/js/bootstrap-notify.min.js"></script>
<script type ="text/javascript" src = "<?php echo $voltas;?>recursos/js/bootbox.min.js"></script>
<script type ="text/javascript" src = "<?php echo $voltas;?>recursos/js/font-awesome.js"></script>
<script>
    
    function GerarNotificacao(mensagem, tipo)
    {
        $.notify({
	
        message: mensagem 
        },{
                // settings
                element: 'body',
	position: null,
	type: tipo,
	allow_dismiss: true,
	newest_on_top: true,
	showProgressbar: false,
	placement: {
		from: "bottom",
		align: "center"
	},
	offset: 20,
	spacing: 10,
	z_index: 9999999,
	delay: 3000,
	timer: 1000,
	url_target: '_blank',
	mouse_over: null,
	animate: {
		enter: 'animated fadeInDown',
		exit: 'animated fadeOutUp'
	},
        });
    }
    
    function GerarConfirmacao(mensagem, funcao)
    {
        var retorno;
        bootbox.confirm({ 
  message: mensagem, 
  buttons: {
        cancel: {
            label: '<i class="fa fa-times"></i> Cancelar'
        },
        confirm: {
            label: '<i class="fa fa-check"></i> Confirmar'
        }
    },
  callback: function(result){ if(result == true){funcao();}
      }
});
return retorno;
    }
    
</script>