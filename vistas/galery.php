<?php ob_start() ?>
<section class="slice bg-white animate-hover-slide">
    <div class="wp-section work">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="sort-list-btn hidden-xs">
                        
                        <?php if(isset($alb)) {?> <button type="button" class="btn btn-base filter active" data-filter="all"><i class="fa fa-th-large"></i>Todos</button>
                           <?php foreach($alb as $alb){ ?>
                        <button type="button" class="btn btn-white filter" data-filter="<?php echo $alb['title'];?>"><?php echo $alb['title'];?></button>
                        <?php }} ?>
                    </div>
                </div>
                <div class="col-md-2">
                	<div class="btn-group pull-right hidden-md hidden-lg">
                        <button type="button" class="btn btn-three">Filtrar</button>
                        <button type="button" class="btn btn-three dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu" id="ulFilterMenu">
                            
                             <?php if(isset($alb1)) {?> 
                             <li class="filter active" data-filter="all"><a>Todos</a></li>
                            <?php foreach($alb1 as $alb1){ ?>
                                 <button type="button" class="btn btn-white filter" data-filter="<?php echo $alb1['title'];?>"><?php echo $alb1['title'];?></button>
                            <?php }} ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">          
                <div id="ulSorList" style="margin:15px 15px;">
                    <?php if(isset($gal)) { 
                            foreach($gal as $gal){ ?>
                    <div class="mix <?php echo $gal['album'];?> col-lg-4 col-md-4 col-sm-4 mix_all" data-cat="1">
                        <div class="wp-block inverse">
                            <a class="hov {shiftContent:30}" href="#">
                                <img src="../images/galeria/<?php echo $gal['album'];?>/<?php echo $gal['name_image'];?>" alt="" class="img-responsive">
                                <div class="caption base" style="opacity: 0.5   ">
                                    <h2 class="title" style="color:#fff"><?php echo $gal['title'];?></h2>
                                    <p>
                                    <?php echo $gal['description'];?>
                                    </p>
                                    <button href="../images/galeria/<?php echo $gal['album'];?>/<?php echo $gal['name_image'];?>" class="btn btn-sm btn-white btn-icon fa-search-plus mt-10 theater"><span>Ver Foto </span></button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
                                
            </div>
    	</div>    	
    </div>
</section>

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>