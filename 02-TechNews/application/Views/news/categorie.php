<?php
  $params   = $this->getParams();
  $articles = $params['articles'];
  // $this->debug();
 ?>

 <div class="row">
     <!--colleft-->
     <div class="col-md-8 col-sm-12">
       <?php if (!empty($articles)) { ?>
         <div class="box-caption">
          <span>
            <?= $this->getAction(); ?>
          </span>
         </div>
         <!--list-news-cate-->
         <div class="list-news-cate">
                   <?php foreach ($articles as $article): ?>
                     <article class="news-cate-item">
                         <div class="row">
                             <div class="col-md-5 col-sm-5 col-xs-12">
                                 <a href="<?= $article->generateURL();?>">
                                     <img alt="" src="<?= PUBLIC_URL . '/images/product/' . $article->getFEATUREDIMAGEARTICLE()?>" class="img-responsive">
                                 </a>
                             </div>
                             <div class="col-md-7 col-sm-7 col-xs-12">
                                 <h3><a href="<?= $article->generateURL();?>"><?=$article->getTITREARTICLE(); ?></a></h3>
                                 <div class="meta-post">
                                     <a href="<?= $article->getAuteurObj()->makeAuteurURL();?>">
                                         <?= $article->getAuteurObj()->getNOMCOMPLET();?>
                                     </a>
                                     <em></em>
                                     <span>
                                         <?= $article->getDATECREATIONARTICLE();?>
                                     </span>
                                 </div>
                                 <?= $article->getAccroche();?>
                             </div>
                         </div>
                     </article>
                    <?php endforeach; ?>
         </div>

         <!-- <div class="paging">
             <a href="#">Prev</a>
             <a href="#" class="current">1</a>
             <a href="#">2</a>
             <a href="#">3</a>
             <a href="#">4</a>
             <a href="#">5</a>
             <a href="#">Next</a>
         </div> -->
       <?php } else { ?>
         <p><strong>Aucune publication pour le moment</strong></p>
       <?php } ?>
     </div>
<?php include SIDEBAR_SITE; ?>
 </div>
