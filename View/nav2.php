<nav id=fixedTopNav class="navbar navbar-fixed-top main-navigation" itemscope itemtype=https://schema.org/SiteNavigationElement>
    <div class=container-fluid>
        <div class=navbar-header>
            <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#main-nav-collapse>
                <span class=sr-only>Toggle navigation</span>
                <span class=ion-drag></span>
            </button>
            <div class=navbar-brand itemscope itemtype=https://schema.org/Organization>
                <span itemprop=name class=sr-only>Stan Stanart </span>
                <a itemprop=url href=trang-chu>Stan Stanart</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id=main-nav-collapse style="margin-right:120px">
            <ul class="nav navbar-nav navbar-right">
            <li>
                        <a href="trang-chu" itemprop=url>
                            <span itemprop=name>
                                Trang chủ                            </span>
                        </a>
                    </li>

                <?php
                    foreach ($this->data as $key => $value) {
                        if($value->IdCha==0){
                            if(!$this->model->timcon($value->Ma)){
                                ?>
                    <li class=dropdown>

                        <a href="<?php echo is_numeric(strpos($value->DuongDan,'#'))?$value->DuongDan: $value->Alias.'-'.$value->Ma?>" class=dropdown-toggle
                            data-toggle=dropdown>

                            <span>
                                <?php echo $value->Ten ?>
                            </span>
                        </a>
                        <ul class=dropdown-menu>

                            <?php 
                                    $id=$value->Ma;
                                     foreach ($this->data as $ke => $valu) {
                                        if($valu->IdCha==$id) {
                                            if(!$this->model->timcon($valu->Ma)) { 
                                    ?>

                            <li class=dropdown>


                                <a href="<?php echo is_numeric(strpos($valu->DuongDan,'#'))?$valu->DuongDan:$valu->Alias.'-'.$valu->Ma?>" class=dropdown-toggle
                                    data-toggle=dropdown>
                                    <?php echo $valu->Ten?>
                                </a>
                                <ul class=dropdown-menu>
                                    <?php
                                    $i =0;
                                            foreach ($this->data as $a) {
                                                if($a->IdCha==$valu->Ma && $i <8){?>
                                        <li>
                                            <a href="<?php echo is_numeric(strpos($a->DuongDan,'#'))?$a->DuongDan: $a->Alias.'-'.$a->Ma?>">
                                                <?php echo $a->Ten?>

                                            </a>
                                        </li>
                                        <?php  $i++;  } }?>
                                        <li>
                                            <a href="<?php echo $valu->Alias?>-<?php echo $valu->Ma?>">
                                                Visa khác ...
                                            </a>
                                        </li>

                                </ul>
                            </li>
                            <?php }else{ ?>
                            <li>
                                <a href="<?php echo is_numeric(strpos($valu->DuongDan,'#'))?$valu->DuongDan:$valu->Alias.'-'.$valu->Ma?>">
                                    <i class="fa fa-heart"></i>
                                    <?php echo $valu->Ten?>
                                </a>
                            </li>

                            <?php } }

                                            }?>

                        </ul>

                    </li>
                    <?php }} }?>
            </ul>
        </div>
    </div>
</nav>