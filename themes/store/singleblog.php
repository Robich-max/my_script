    
<?php include_once 'pageheader.php'; ?>

<div id="blog" class="section md-padding">
    <div class="container">
        <div class="row">
            <main id="main" class="col-md-9">

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="<?php echo base_url("images/$info->img"); ?>" alt="<?php echo $info->img;?>">
                    </div>
                    <div class="blog-content">
                      
                       <br>
                        <?php echo $info->title;?>
                        <br/>
                        <?php echo $info->desc;?>
                    </div>
                </div>
            </main>

            <aside id="aside" class="col-md-3">
                <div class="widget">
                    <h3 class="title">Popular Posts</h3>

                    <?php foreach($bloginfos as $row){?>
                        <div class="widget-post">
                            <a href="<?php echo base_url("home/singleBlog/$row->id"); ?>">
                                <img src="<?php echo base_url("images/$row->img"); ?>" alt="<?php echo $row->title;?>"
                                     style="width: auto;height: 73px;">
<br>
                                     <?php echo $row->title;?>
                            </a>
                            
                        </div>
                    <?php }?>

                </div>
            </aside>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>

<?php include_once 'footer.php'; ?>