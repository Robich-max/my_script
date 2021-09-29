<?php include_once 'pageheader.php'; ?>

<style type="text/css" media="screen">
  .rs3-select2 .select2-container .select2-selection--single {
    height: 21px;
}
</style>
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: 1px solid;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}



.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}

.collapsible {
    background-color:<?php echo $settings->faq_color; ?>;
    color: <?php echo $settings->faq_tx_color; ?>;

    }
.active, .collapsible:hover {
  background-color: <?php echo $settings->faq_color; ?>;
}
    .content {
  
    background-color: <?php echo $settings->faq_dc_color; ?>;
}
</style>
  <!-- Title Page -->
  <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(assets/images/bg4.jpg);background-position: center;">
    <h2 class="l-text2 t-center">
      <?php echo $info->title; ?>
    </h2>
  </section>

  <!-- content page -->
   <section class="credit-faq-area section-padding-100-0">
        <div class="container">
            <div class="row">
               <br/>
                          

                  <div class="col-12 col-lg-12">
                  <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <h2 class="section-heading" style="text-align: center;">
              <?php echo $settings->faq_title; ?>
                        </h2>
                        <br/>
                    </div>
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
      

      <?php foreach($faqinfos as $faqinfo) :
          ?>
                            <!-- single accordian area -->
 <button type="button" class="collapsible"><?php echo $faqinfo->title; ?></button>
<div class="content">
  <br/>
  <?php echo $faqinfo->desc; ?>
</div>

     <?php endforeach; ?>                 
                      
                    </div>
                </div>

             
            </div>
        </div>
    </section>

<br/>
<br/>
<br/>


<?php include_once 'footer.php'; ?>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

