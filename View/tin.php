
<meta name=Description content="<?php echo @$this->data[0]->Descr?>">
<meta name=keywords content="<?php echo @$this->data[0]->KeyWord?>">
<title><?php echo @$this->data[0]->Ten?></title>


<header id=header class="home-parallax home-fade dark-bg header-inner">
        <div class=color-overlay></div>
        <div class=container>
            <h1><?php echo @$this->data[0]->Ten?></h1>
            <div class=breadcrumb>
                <a href=index.php>Home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href=<?php echo @$this->data[0]->DuongDan.'&id='.$_GET['id']?>><?php echo @$this->data[0]->Ten?></a>
            </div>
        </div>
    </header>
<section id=single-portfolio class="section single-portfolio ">
        <div class=container-fluid>
            <div class=row>
                <div class="col-md-10 col-md-offset-1 font-chu">
                    <?php echo @$this->data[0]->NoiDung?>
                </div>
            </div>
        </div>
        
    </section>