<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
        
<!-- <link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>FoodCart</title>
</head>
<body>
  

 <div><!--main div-->
         
   <!-- Homepage -->
      <!--carousel slides-->
      <div id="main" class="carousel slide" data-ride="carousel">
        
        <!-- Indicators -->
          <ul class="carousel-indicators">
             <li data-target="#main" data-slide-to="0" class="active"></li>
             <li data-target="#main" data-slide-to="1"></li>
             <li data-target="#main" data-slide-to="2"></li>
         </ul>
        <!--End of Indicator-->

       <!-- The slideshow -->
          <div class="carousel-inner">
              <div class="carousel-item active banner slides bg1"></div>
              <div class="carousel-item banner slides bg2"></div>            
              <div class="carousel-item banner slides bg3"></div>
          </div>
       <!--End of slides-->
        <?php include('includes/header.php'); ?>
     
       <!--header Ends-->

 <!--end of Header-->

       <!--carousel capption-->
          <div class="main-text col-md-12"  >
                <h1><small>Welcome  To </small></h1>
              <h3 class="display-3">KUDLA BAKES</h3>
          </div>
       <!--end of carousel caption-->

      </div>
   <!--End of carousel-->
   <!-- Cart-->
<div id="carti" class="carti" >
    
    
    <!-- cart total -->
    <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5" >
    <h5>Total</h5>
    <h5> ₹ <strong id="cart-total" class="font-weight-bold">0.00</strong> </h5>
    </div>
    <!--end cart total -->
    <!-- cart buttons -->
    <div class="cart-buttons-container mt-3 d-flex justify-content-between">
    <a href="#" id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase">clear cart</a>
    <a href="#" class="btn btn-outline-secondary text-uppercase btn-pink">checkout</a>
    </div>
    <!--end of  cart buttons -->

</div>
<!-- End Cart-->
 <!--Homepage Ends-->

 <div class="container-fluid" id="order">
    <h1 class="bodyTxt">our<strong class="display-4 bodyTxt">Store</strong></h1><!--head-->               
   <div class="row justify"><!--service buttons-->
          
   </div><!--end of service buttons-->
    
   <div class="justify-card ">
   <!--service cards Row 1-->
   <div class="row cardRow ">
       <div class="col-sm-4"><!--card 1-->
       <div class="card cardSize" data-toggle="modal" data-target="#cake">
           <img class="card-img-top card-img-size" src="img/truffle.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">Cakes</h4>
             
             <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">400</strong></h5>
             <!-- <span class="btn store-item-icon" style="font-size:36px"> 
                <i class="fa fa-shopping-cart"></i>
              </span> -->
            </div>
         </div>
       </div>
       
       <div class="col-sm-4"><!--card 2-->
           <div class="card cardSize" data-toggle="modal" data-target="#cupcake">
               <img class="card-img-top card-img-size" src="img/cupcake.jpeg" alt="Card image">
               <div class="card-body">
                 <h4 class="card-title">CupCakes</h4>
                 <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">15</strong></h5>
                 <!-- <span class="btn store-item-icon" style="font-size:36px"> 
                    <i class="fa fa-shopping-cart"></i>
                  </span> -->
               </div>
             </div>
           </div>

           <div class="col-sm-4"><!--card 3-->
               <div class="card cardSize" data-toggle="modal" data-target="#pastry" >
                   <img class="card-img-top card-img-size" src="img/pastry.jpg" alt="Card image">
                   <div class="card-body">
                     <h4 class="card-title">Pastry</h4>
                     <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">45</strong></h5>
                     <!-- <span class="store-item-icon" style="font-size:36px"> 
                        <i class="fa fa-shopping-cart"></i>
                      </span> -->
                    </div>
                 </div>
               </div>

     </div><!--end of 1 st row -->
   
     <div class="row cardRow"><!--second Row-->
       <div class="col-sm-4"><!--card 1-->
       <div class="card cardSize" data-toggle="modal" data-target="#bread">
           <img class="card-img-top card-img-size" src="img/bread.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">Bread and Buns</h4>
             <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">35</strong></h5>
             <!-- <span class="store-item-icon" style="font-size:36px"> 
                <i class="fa fa-shopping-cart"></i>
              </span> -->
            </div>
         </div>
       </div>
       
       <div class="col-sm-4"><!--card 2-->
           <div class="card cardSize" data-toggle="modal" data-target="#sandwich">
               <img class="card-img-top card-img-size" src="img/sandwich.jpg" alt="Card image" >
               <div class="card-body">
                 <h4 class="card-title">Sandwich</h4>
                 <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">50</strong></h5>
                 <!-- <span class="store-item-icon" style="font-size:36px"> 
                    <i class="fa fa-shopping-cart"></i>
                  </span> -->
               </div>
             </div>
           </div>

           <div class="col-sm-4"><!--card 3-->
               <div class="card cardSize" data-toggle="modal" data-target="#doughnut">
                   <img class="card-img-top card-img-size" src="img/Doughnut.jpg" alt="Card image">
                   <div class="card-body">
                     <h4 class="card-title">Doughnut</h4>
                     <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">30</strong></h5>
                     <!-- <span class="store-item-icon" style="font-size:36px"> 
                        <i class="fa fa-shopping-cart"></i>
                      </span> -->
                    </div>
                 </div>
               </div>

     </div><!--end of second row -->

     <div class="row cardRow"><!--Third Row-->
       <div class="col-sm-4 " ><!--card 1-->
       <div class="card cardSize" data-toggle="modal" data-target="#sweet">
           <img class="card-img-top card-img-size" src="img/sweet.jpg" alt="Card image">
           <div class="card-body">
             <h4 class="card-title">Sweets</h4>
             <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">100</strong></h5>
             <!-- <span class="store-item-icon" style="font-size:36px"> 
                <i class="fa fa-shopping-cart"></i>
              </span> -->
            </div>
         </div>
       </div>
       
       <div class="col-sm-4"><!--card 2-->
           <div class="card cardSize" data-toggle="modal" data-target="#icecream">
               <img class="card-img-top card-img-size" src="img/icecream.jpg" alt="Card image" >
               <div class="card-body">
                 <h4 class="card-title">IceCream</h4>
                 <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">30</strong></h5>
                 <!-- <span class="store-item-icon" style="font-size:36px"> 
                    <i class="fa fa-shopping-cart"></i>
                  </span> -->
               </div>
             </div>
           </div>

           <div class="col-sm-4"><!--card 3-->
               <div class="card cardSize" data-toggle="modal" data-target="#candy">
                   <img class="card-img-top card-img-size" src="img/candy.jpg" alt="Card image">
                   <div class="card-body">
                     <h4 class="card-title">Candies</h4>
                     <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">50</strong></h5>
                     <!-- <span class="store-item-icon" style="font-size:36px"> 
                        <i class="fa fa-shopping-cart"></i>
                      </span> -->
                    </div>
                 </div>
               </div>

     </div><!--end of third row -->

   </div> <!--Cards main div-->
</div>
        
 
  <!--Popup Models-->
 <!-- The Modal Cacke-->
 <div class="modal" id="cake">
    <div class="modal-dialog">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Cakes</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       
       <!-- Modal body -->
       <div class="modal-body">
        
        <div class="split right">
           
          <div class="centered">
            
                <img src="img/truffle.jpg" id="one">
            
            <h4 class="card-title">Cakes</h4>
            <h5 class="store-item-value">₹<strong id="" class="font-weight-bold store-item-price">400</strong></h5>
            <div><b id="desc">Descriptions:</b><br><br>
                 <b>Product Details:</b><br>
                   <b>Cake Flavour-</b> Truffle<br>
                         <b>Shape- </b>Round<br>
                       <b>Serves- </b>4-6 People<br>
                     <b>Size- </b>6 inches in Diameter<br><br><br>
                     <b id="note">Please Note:</b>
 
                       The cake stand, cutlery & accessories used in the image are only for representation purposes. They are not delivered with the cake.
                         This cake is hand delivered in a good quality cardboard box.
                 <br><br>
                     <b>AVAILABILITY:</b><br> In stock
                 <br><br>
                 </div>
            <button id="cart" class="btn btn-info btn-block">Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                   </button><br>
 
 
             </div>
         </div>
       </div>
       
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
       
     </div>
   </div>
 </div>
 <!--Model Cake ends-->        
 
 <!-- The Modal cupCacke-->
 <div class="modal" id="cupcake">
   <div class="modal-dialog">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Cakes</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       
       <!-- Modal body -->
       <div class="modal-body">
         
                <div class="split right">
                   <div class="centered">
                    <img src="img/cupcake.jpeg" id="one">
                    <h4 class="card-title">CupCakes</h4>
                    <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">15</strong></h5>
                    <b id="desc">Descriptions:</b><br><br>
                       <b>Product Details:</b><br>
                       <b> Flavour-</b> Chocolate<br>
                       <b>Type of Cupcakes- </b>Cream<br>
                       <b>Quantity- </b>6 Cupcakes<br>
                       <b>Shape- </b>Round
                      
                       <br><br>
                       <b>AVAILABILITY:</b><br> In stock
                       <br><br>
                        <button id="cart" class="btn btn-info btn-block">Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                       </button><br>
                 </div>
               </div>
       </div>
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
       
     </div>
   </div>
 </div>
 <!--cupCake Model ends-->  
 
 <!-- The Modal pastry-->
 <div class="modal" id="pastry">
   <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">PASTRY</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
               <div class="centered">
                   
                </div>
                <div class="split right">
                   <div class="centered">
                    <img src="img/pastry.jpg" id="one">
                    <h4 class="card-title">Pastry</h4>
                    <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">45</strong></h5>
                    <b id="desc">Descriptions:</b><br><br>
                       <b>Product Details:</b><br>
                       <b> Flavour-</b> Chocolate<br>
 
 
 
                       <b id="note">Please Note:</b>
 
                       The cake stand, cutlery & accessories used in the image are only for representation purposes. They are not delivered with the cake.
                       This cake is hand delivered in a good quality cardboard box.
                       <br><br>
                       <b>AVAILABILITY:</b><br> In stock
                       <br><br>
                        <button id="cart" class="btn btn-info btn-block" >Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                       </button><br>
                 </div>
               </div>
         </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
 </div>
 <!--Model pastry ends-->     
 
 <!-- The Modal bread-->
 <div class="modal" id="bread">
   <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Bread and Bun</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
     
        <div class="split right">
           <div class="centered">
             
             <img src="img/bread.jpg" id="one">
                  <h4 class="card-title">Bread and Buns</h4>
             <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">35</strong></h5>
                <b id="desc">Descriptions:</b><br><br>
                 <b>Product Details:</b><br></p>
 
                  <p>Soft, vaguely sweet and golden-yellow from the butter and egg, these simple buns are perfect for burgers, but also fine for any kind of sandwich.</p>
                 <br><br>
                 <b>AVAILABILITY:</b><br> In stock
                 <br><br>
                  <button id="cart" class="btn btn-info btn-block" >Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                 </button><br>
 
 
             </div>
         </div>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
 </div>
 <!--Model Bread ends-->     
 
 <!-- The Modal Sandwich-->
 <div class="modal" id="sandwich">
   <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sandwich</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
     
        <div class="split right">
           <div class="centered">
            <img src="img/sandwich.jpg" id="one">
            <h4 class="card-title">Sandwich</h4>
                 <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">50</strong></h5>
        
            <b id="desc">Descriptions:</b><br><br>
                     <b>Product Details:</b><br>
                     
                     It can be made on a griddle or tawa. It is more healthier because it contains chees and vegitables.
                     <br><br>
                     <b>AVAILABILITY:</b><br> In stock
                     <br><br>
                      <button id="cart" class="btn btn-info btn-block">Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                     </button><br>
 
             </div>
           </div>
         </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
 </div>
 <!--Model sandwich ends-->     
 
 <!-- The Modal Doughnut-->
 <div class="modal" id="doughnut">
   <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Doughnuts</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
       
        <div class="split right">
             <div class="centered">
                <img src="img/Doughnut.jpg" id="one">
                <h4 class="card-title">Doughnut</h4>
                     <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">30</strong></h5>
 <p><b id="desc">Descriptions:</b><br><br>
                     <b>Product Details:</b><br>
                     <p>It is delicious</p>
                       <b>Ingredients</b><br>
                       1 cup all-purpose flour ((spooned & leveled))<br>
                       1/4 cup unsweetened cocoa powder<br>
                       1/2 teaspoon baking soda<br>
                       1/8 teaspoon salt<br>
                       1/2 cup buttermilk<br>
                     <br><br>
                     <b>AVAILABILITY:</b><br> In stock
                     <br><br>
                      <button id="cart" class="btn btn-info btn-block">Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                     </button><br>
 
 
               </div>
             </div>
         </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
 </div>
 <!--Model Dougnut ends-->   
 
 <!-- The Modal Sweets-->
 <div class="modal" id="sweet">
   <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sweets</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
      
        <div class="split right">
               <div class="centered">
                <img src="img/sweet.jpg" id="one">
                <h4 class="card-title">Sweets</h4>
             <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">100</strong></h5>
<b id="desc">Descriptions:</b><br><br>
                     <p>  <b>Product Details:</b><br>
                       <p>It is a delicious food<br>
                         <b>Shape-</b>diamond<br>
                         <b>pieces-</b>15/kg<br></p>
                       <b>Ingredience:</b><br>
                         cashew nuts<br>
                          whole-milk powder<br>
                          cardamom powder<br>
                          granulated sugar<br>
                         water<br>
                          ghee</p>
                       <br><br>
                       <b>AVAILABILITY:</b><br> In stock
                       <br><br>
                        <button id="cart" class="btn btn-info btn-block">Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                       </button><br>
               </div>
             </div>
        </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
 </div>
 <!--Model Sweets ends-->   
 
 <!-- The Modal IceCream-->
 <div class="modal" id="icecream">
   <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">IceCream</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
    
        <div class="split right">
             <div class="centered">
                <img src="img/icecream.jpg" id="one">

                <h4 class="card-title">IceCream</h4>
                <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">30</strong></h5>
                <b id="desc">Descriptions:</b><br><br>
                     <b>Product Details:</b><br><br>
                     <b>Flavour-</b> multi<br>
                     <b>pack of-</b>6
                     <br><br>
                     <b>AVAILABILITY:</b><br> In stock
                     <br><br>
                      <button id="cart" class="btn btn-info btn-block">Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                     </button><br>
               </div>
             </div>
        </div>
                  
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
 </div>
 <!--Model IceCream ends-->  
 
 <!-- The Modal Candies-->
 <div class="modal" id="candy">
   <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Candies</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
       
                <div class="split right">
                   <div class="centered">
                    <img src="img/candy.jpg" id="one">
                    <h4 class="card-title">Candies</h4>
                    <h5 class="store-item-value">₹<strong id="store-item-price" class="font-weight-bold">50</strong></h5>
<b id="desc">Descriptions:</b><br><br>
                           <b>Product Details:</b><br>
                           <b> Flavour-</b> multi<br>
                           <b>Shape- </b>Round<br>
                           
                           <br><br>
                           <b>AVAILABILITY:</b><br> In stock
                           <br><br>
                            <button id="cart" class="btn btn-info btn-block" >Add to Cart   <i class="fa fa-shopping-cart" id="shopping"></i>    
                           </button><br>
                     </div>
                   </div>
             </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
 </div>
 <!--Model Candies ends-->   
 
</div><!--end of main div  -->
<?php include('includes/footer.php'); ?>


</body>

<!--Scripts-->
<script src="js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--End of Script-->
</html>