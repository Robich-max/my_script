    
<?php include_once 'pageheader.php'; ?>


<style type="text/css" media="screen">
    /* card details start  */
@import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
section{
    padding: 100px 0;
}
.details-card {
    background: #ecf0f1;
}

.card-content {
    background: #ffffff;
    border: 4px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}

.card-img {
    position: relative;
    overflow: hidden;
    border-radius: 0;
    z-index: 1;
}

.card-img img {
    width: 100%;
    height: auto;
    display: block;
}

.card-img span {
    position: absolute;
    top: 15%;
    left: 12%;
    background: #1ABC9C;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
    padding: 1.25rem;
    height: 175px;
}

.card-desc h3 {
    color: #000000;
    font-weight: 600;
    font-size: 1.5em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
    color: #747373;
    font-size: 14px;
    font-weight: 400;
    font-size: 1em;
    line-height: 1.5;
    margin: 0px;
    margin-bottom: 20px;
    padding: 0;
    font-family: 'Raleway', sans-serif;
}
.btn-card{
    background-color: #1ABC9C;
    color: #fff;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: orange;
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}
/* End card section */
    .details-card {
    background:<?php echo $settings->blog_bg_color; ?>;
}

.card-content{
   background:<?php echo $settings->blog_sg_bg_color; ?>;
}

.btn-card:hover {
    background:<?php echo $settings->blog_bt_color; ?>;
}
a.btn-card {
        color: <?php echo $settings->blog_bt_tx_color; ?>;
}

.btn-card{
   background:<?php echo $settings->blog_bt_color; ?>;
}

.blog-title{
  color: <?php echo $settings->blog_tx_color; ?>;
}


</style>

<section class="details-card">
    <div class="container">
        <div class="row">

<?php foreach($bloginfos as $bloginfo) :
                    ?>
        <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="<?php echo base_url("images/$bloginfo->img"); ?>" alt="" style="height:180px;">
                    </div>
                    <div class="card-desc">
                        <h5 class="blog-title"><?php echo $bloginfo->title; ?></h5>
                        
                         <br>
                         <br>
                         <br>
                          <a href="<?php echo base_url("home/singleBlog/$bloginfo->id"); ?>" class="btn-card">Read</a>     
                    </div>

                </div>

            </div> 
<?php endforeach; ?>
               
                     
        </div>
    </div>
</section>

<br/>
<br/>
<br/>
<br/>


<?php include_once 'footer.php'; ?>
