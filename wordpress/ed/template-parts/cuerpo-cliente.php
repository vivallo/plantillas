<?php $clientes = cmb2_get_option('OpcionCyRclientes', 'clienteCyR'); ?>
<?php if(!$clientes == '') { ?> 
<section id="clientes" class="seccion-pag container-fluid">
     <div class="container">
      <div class="row">
        <div class="col-12 pt-5 pb-5 text-center">
          <h1>CLIENTES</h1>
        </div>
        <div class="col-12 p-0 lista wow fadeInRight">
          <ul class="col-12 d-flex align-items-center text-center" id="cClientes">           
           <?php foreach($clientes as $cliente) { ?>
            <li class="col-12 col-sm-6 col-md-4 col-lg-3"><img src="<?php echo $cliente['imgCliente']; ?>" alt=""><h4><?php echo $cliente['nombreCliente']; ?></h4><h6><?php echo $cliente['rubroCliente']; ?></h6></li><?php } ?>
                     
          </ul>
        </div>          
          <ul class="PrePos col-12 text-right">
              <li class="prev"></li>
              <li class="post"></li>
          </ul>   
      </div>
    </div>
  </section>
<?php } ?>
