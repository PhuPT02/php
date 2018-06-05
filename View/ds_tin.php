
<meta name=Description content="<?php echo @$this->data[0]->Descr ?>">
<meta name=keywords content="<?php echo @$this->data[0]->Keyword ?>">
<title><?php echo @$this->data[0]->TenDM ?></title>

    <header id=header class="home-parallax home-fade dark-bg header-inner">
        <div class=color-overlay></div>
        <div class=container>
            <h1><?php echo @$this->data[0]->TenDM ?></h1>
            <div class=breadcrumb>
                <a href="trang-chu">Home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href=#>Blog</a>
            </div>
        </div>
    </header>

    <section id=blog class="section blog">
        <div class=container>
            <div id=blogContent class=section-content>
                <?php 
                $i =1;
                 foreach (@$this->data as  $value) {   
                     if($i==1 || $i%3 == 1){
                         echo " <div class=row>";
                     }
                     
                ?>
                    <div class="col-sm-6 col-md-4">
                        <div class=blog-post>
                            <header>
                                <div class=blog-element>
                                <a href="<?php echo 'chi-tiet-'.$value->Alias.'-'.$value->Ma?>">
                                    <img style="with:100%;height:250px" class=img-responsive src="<?php echo $value->Hinh?>" alt="<?php echo $value->TenTT?>">
                                    </a>
                                </div>
                            </header>
                            <div class=blog-content>
                                <h4>
                                    <a href="<?php echo 'chi-tiet-'.$value->Alias.'-'.$value->Ma?>"><?php echo $value->Ten ?></a>
                                </h4>
                                <div class=post-meta>
                                    <span>By
                                        <a href=#><?php echo @$value->TacGia ?></a>
                                    </span>
                                    <span>
                                        <a href=#>Time: <?php echo @$value->NgayTao?></a>
                                    </span>
                                </div>
                                <!-- <p><?php //echo $this->model->subtext($value->NoiDung) ?></p> -->
                            </div>
                        </div>
                    </div>
                 <?php
                 if($i% 3==0){
                     echo "</div>";
                 }
                 
                 $i++; }?>
                  
                
            </div>
        </div>
    </section>