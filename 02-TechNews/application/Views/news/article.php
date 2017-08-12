<?php
  $params       = $this->getParams();
  $article      = $params['article'];
  $suggestions  = $params['suggestions'];
 ?>

<div class="row">
                <!--colleft-->
                <div class="col-md-8 col-sm-12">
                    <!--post-detail-->
                    <article class="post-detail">
                        <h1><?= $article->TITREARTICLE; ?></h1>
                        <div class="meta-post">
                            <a href="#">
                                <?= $article->PRENOMAUTEUR . ' ' . $article->NOMAUTEUR; ?>
                            </a>
                            <em></em>
                            <span>
                                <?= $article->DATECREATIONARTICLE; ?>
                            </span>
                        </div>
                        <div class="post-detail-img">
                            <img alt="<?= $article->TITREARTICLE; ?>" src="<?= PUBLIC_URL; ?>/images/product/<?= $article->FEATUREDIMAGEARTICLE; ?>" />
                        </div>
                        <p>
                          <?= $article->CONTENUARTICLE; ?>
                        </p>

                        <h5 class="text-right font-heading"><strong>  <?= $article->PRENOMAUTEUR . ' ' . $article->NOMAUTEUR; ?></strong> </h5>

                    </article>
                    <!--social-detail-->
                    <div class="social-detail">
                        <span>   Share article</span>

                        <ul class="list-social-icon">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="youtube">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="rss">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <!--related post-->
                    <div class="detail-caption">
                        <span>  RELATED POST</span>
                    </div>
                    <section class="spotlight-thumbs spotlight-thumbs-related">
                        <div class="row">
                          <?php foreach ($suggestions as $suggestion): ?>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="spotlight-item-thumb">
                                    <div class="spotlight-item-thumb-img">
                                        <a href="<?= PUBLIC_URL . '/article/' . $suggestion->IDARTICLE . '-' . $suggestion->generateSlug($suggestion->TITREARTICLE) . '.html'; ?>">
                                            <img alt="<?= $suggestion->TITREARTICLE?>" src="<?= PUBLIC_URL . '/images/product/' . $suggestion->FEATUREDIMAGEARTICLE; ?>">
                                        </a>
                                        <a href="<?= PUBLIC_URL . '/news/' . strtolower($suggestion->LIBELLECATEGORIE); ?>" class="cate-tag"><?= $suggestion->LIBELLECATEGORIE ;?></a>
                                    </div>
                                    <h3><a href="<?= PUBLIC_URL . '/article/' . $suggestion->IDARTICLE . '-' . $suggestion->generateSlug($suggestion->TITREARTICLE) . '.html'; ?>"><?= $suggestion->TITREARTICLE; ?></a></h3>
                                    <div class="meta-post">
                                        <a href="#">
                                            <?= $suggestion->PRENOMAUTEUR . ' ' . $suggestion->NOMAUTEUR; ?>
                                        </a>
                                        <em></em>
                                        <span>
                                            <?= $suggestion->DATECREATIONARTICLE; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                    </section>
                </div>
								<?php include SIDEBAR_SITE; ?>

            </div>
