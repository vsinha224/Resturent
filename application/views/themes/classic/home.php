<?php $webinfo = $this->webinfo; ?>
<div class="modal fade" id="addons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo display('food_details'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body addonsinfo">

            </div>

        </div>
    </div>
</div>
<!--END HEADER TOP-->
<?php if ($title2 == 'Welcome to Hungry') { ?>
    <!--START SLIDER PART-->
    <div class="main_slider owl-carousel">
        <?php foreach ($slider_info as $slider) { ?>
            <div class="item">
                <img src="<?php echo base_url(!empty($slider->image) ? $slider->image : 'dummyimage/1920x902.jpg'); ?>" alt="<?php echo $slider->title ?>">
                <div class="item_caption animated_caption">
                    <h3 class="pre_title"><?php echo $slider->title ?></h3>
                    <h2><?php echo $slider->subtitle ?></h2>
                    <a href="<?php echo $slider->slink ?>" class="btn1"><?php echo display('see_more')?></a>
                </div>
            </div>
        <?php } ?>

    </div>
    <!--END SLIDER PART -->
<?php } ?>
<div class="modal fade" id="tableoption" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Our Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <a class="dropdown-item table-option catef" href="<?php echo base_url('menu')?>" data-toggle="modal"  data-name="Dine-in" data-target="#tableoption11">Dining In</a>
                    <a class="dropdown-item table-option catef" href="<?php echo base_url('menu')?>" data-toggle="modal"  data-name="Pickup" data-target="#tableoption11">Pickup</a>
                    <a class="dropdown-item table-option catef" href="<?php echo base_url('menu')?>" data-toggle="modal"  data-name="Home Delivary" data-target="#tableoption11">Delivery</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tableoption11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Today menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php 
                if(!empty($getkitchen)){
                    foreach ($getkitchen as $key => $value) {?>
                        <a class="dropdown-item catef" href="<?php echo base_url('menu')?>?<?php echo $value->kitchenid; ?>" data-kitchen ="<?php echo $value->kitchenid; ?>"><?php echo $value->kitchen_name; ?></a>
                   <?php  }
                }?>
                <!-- /*<a class="dropdown-item catef" href="<?php echo base_url('menu')?>"><?php echo $getkitchen->kitchen_name; ?></a>*/
                /*<a class="dropdown-item catef" href="<?php echo base_url('menu')?>">Soft drink</a>*/ -->
            </div>
        </div>
    </div>
</div>
<!--END HEADER TOP-->



<!-- Home Page logo--->

<!--<section class="home-logo" style = 'margin:0 0 30px 0;'>-->
<!--    <div class = "container">-->
<!--        <div class= "logo1" style = ' text-align:center;'>-->
<!--        <img src="//php echo //base_url(!empty($tmenu->menu_icon) ? -->
<!--        //$tmenu->//menu_icon : 'assets/img/logo1.jpeg' ); ?>" alt="" style='height:350px'>-->
         <!-- here need to add logo provided by client-->
<!--        </div>-->
<!--    </div>-->


<!--</section>-->



<!--- Home page Logo End--->




<?php $testymenu = $this->db->select('*')->from('tbl_widget')->where('widgetid', 16)->where('status', 1)->get()->row();
if (!empty($testymenu)) {
?>
    <section class="menu_area pb-5">
        
        <div class="food_menu_topper">
            <div class="text-center">
                <h2 class="food_menu_title"><?php echo $testymenu->widget_name; ?></h2>
                <h4 class="food_menu_title2"><?php echo $testymenu->widget_title; ?> </h4>
            </div>
            <div class="container">
                <div class="row">
                    <?php 
                    if(!empty($getcategory)){
                        foreach ($getcategory as $value) {
                          //  print_r($value);
                        ?>
                        <div class="col-sm-4">
                            <div class="home-cat especial">
                                <button type="button" class="btn btn-primary category" data-toggle="modal" data-id="<?php echo $value->CategoryID; ?>" data-name="<?php echo $value->Name; ?>" data-target="#tableoption"><?php echo $value->Name; ?></button>
                                
                             </div>
                        </div>

                    <?php } }
                    ?>
                </div>
            </div>
        </div>
        
    </section>
<?php } ?>

<div id="cartitem" style="display:none;"></div>

<style>
    /*---------------------------- own css--------------*/
.home-cat {
    height:150px;
    width:100%;
    text-align:center;
    color:white;
    margin: 30px 0;
       
}
.cat1{
    margin:50px 0;
}
.home-cat button {
  --b: 3px;   /* border thickness */
  --s: .15em; /* size of the corner */
  --c: #BD5532;
  
  padding: calc(.05em + var(--s)) calc(.3em + var(--s));
  color: var(--c);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--c) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .2em;
}
.home-cat button:hover,
button:focus-visible{
  --_p: 0px;
  outline-color: var(--c);
  outline-offset: .05em;
}
.home-cat button:active {
  background: var(--c);
  color: #fff;
}
.home-cat button {
  font-weight: bold;
  font-size: 4rem;
  cursor: pointer;
  border: none;
  margin: .1em;
}
.home-cat button:hover{
    background-color:transparent!important;
}

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
$(".category").click(function() {
   var getdata = $(this).data('id');
   $(".catef").each((item,obj)=>{
       if($(this).data('name') == "CARTA"&&$(obj).html() =='ENTRY'){
        $(obj).addClass('d-none')
       }else{
        $(obj).removeClass('d-none')
       }
        const href = obj.getAttribute("href");
        obj.setAttribute("href",`${href}&${getdata}`)
    })
        
   //var url = "<?php echo base_url();?>menu?"+ getdata;
   // $('.catef').attr("href",url);

});
$(".table-option").click(function() {
   var tableOption = $(this).data('name');
    $.cookie('tableOption', tableOption, { expires: 1, path: '/' });
});

</script>