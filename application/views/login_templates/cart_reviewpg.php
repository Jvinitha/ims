<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <style>
        .shopping-cart{
	padding-bottom: 50px;
	font-family: 'Montserrat', sans-serif;
}

.shopping-cart.dark{
	background-color: #f6f6f6;
}

.shopping-cart .content{
	box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
	background-color: white;
}

.shopping-cart .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.shopping-cart .block-heading p{
	text-align: center;
	max-width: 420px;
	margin: auto;
	opacity:0.7;
}

.shopping-cart .dark .block-heading p{
	opacity:0.8;
}

.shopping-cart .block-heading h1,
.shopping-cart .block-heading h2,
.shopping-cart .block-heading h3 {
	margin-bottom:1.2rem;
	color: #3b99e0;
}

.shopping-cart .items{
	margin: auto;
}

.shopping-cart .items .product{
	margin-bottom: 20px;
	padding-top: 20px;
	padding-bottom: 20px;
}

.shopping-cart .items .product .info{
	padding-top: 0px;
	text-align: center;
}

.shopping-cart .items .product .info .product-name{
	font-weight: 600;
}

.shopping-cart .items .product .info .product-name .product-info{
	font-size: 14px;
	margin-top: 15px;
}

.shopping-cart .items .product .info .product-name .product-info .value{
	font-weight: 400;
}

.shopping-cart .items .product .info .quantity .quantity-input{
    margin: auto;
    width: 80px;
}

.shopping-cart .items .product .info .price{
	margin-top: 15px;
    font-weight: bold;
    font-size: 22px;
 }

.shopping-cart .summary{
	border-top: 2px solid #5ea4f3;
    background-color: #f7fbff;
    height: 100%;
    padding: 30px;
}

.shopping-cart .summary h3{
	text-align: center;
	font-size: 1.3em;
	font-weight: 600;
	padding-top: 20px;
	padding-bottom: 20px;
}

.shopping-cart .summary .summary-item:not(:last-of-type){
	padding-bottom: 10px;
	padding-top: 10px;
	border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.shopping-cart .summary .text{
	font-size: 1em;
	font-weight: 600;
}

.shopping-cart .summary .price{
	font-size: 1em;
	float: right;
}

.shopping-cart .summary button{
	margin-top: 20px;
}

@media (min-width: 768px) {
	.shopping-cart .items .product .info {
		padding-top: 25px;
		text-align: left; 
	}

	.shopping-cart .items .product .info .price {
		font-weight: bold;
		font-size: 22px;
		top: 17px; 
	}

	.shopping-cart .items .product .info .quantity {
		text-align: center; 
	}
	.shopping-cart .items .product .info .quantity .quantity-input {
		padding: 4px 10px;
		text-align: center; 
	}
	address { 
  display: block;
  font-style: italic;
}
  
}

         </style>
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
	<main class="page">
	 	<section class="shopping-cart dark">
	 		<div class="container">
		        <div class="block-heading">
		          <h2>Shopping Cart</h2>
		        </div>
				
				<div class="content" style="padding-left: 30px;">
				<h3><span>SHIPPING DETAILS</span></h3>
				<h4>
<address>
<?php echo $myaddress->firstname?> <?php echo $myaddress->lastname?> <br> 
<?php echo $myaddress->address?>,<br>
<?php echo $myaddress->city?>-<?php echo $myaddress->pincode?>.<br>
<?php echo $myaddress->state?>,<?php echo $myaddress->country?>.<br>
<?php echo $myaddress->phone_number?>
</address></h4>
<a href="<?php echo site_url('store/edit_cartaddress/'.$myaddress->id);?>"><button type="button" class="btn btn-primary btn-lg">Edit Address</button></a>
</div>
<br>
				 <div class="content">
	 				<div class="row">
	 					<div class="col-md-12 col-lg-8">
                        
	 						<div class="items">
                             
				 				<div class="product" ng-repeat="x in names">
                                
				 					<div class="row">
					 					<div class="col-md-3">
					 						<img class="img-fluid mx-auto d-block image" src="<?php echo base_url('assets/uploads/');?>{{ x.image}}">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-5 product-name">
							 							<div class="product-name">
								 							<a href="<?php echo site_url('store/detail_page/');?>{{ x.id}}"><h4>{{ x.title }}</h4></a>
								 							
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<h4>Quantity:</h4>
                                                         <p>{{x.qty}}</p>
							 						</div>
							 						<div class="col-md-3 price">
							 							<span>Rs.{{x.subtotal}}</span>
							 						</div>
							 					</div>
							 				</div>
					 					</div>
					 				</div>
                                    
				 				</div>
				 							
                               
				 			</div>
                            
			 			</div>
			 			<div class="col-md-12 col-lg-4">
			 				<div class="summary">
			 					<h3>Summary</h3>
			 					<div class="summary-item"><span class="text">Subtotal</span><span class="price">Rs.{{product_total}}</span></div>
			 					<div class="summary-item"><span class="text">Shipping</span><span class="price">Rs.{{shipping}}</span></div>
			 					<div class="summary-item"><span class="text">Total</span><span class="price">Rs.{{total}}</span></div>
			 					<a href="<?php echo site_url('store/cart_view/');?>"><button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button></a>

				 			</div>
			 			</div>
		 			</div> 
		 		</div>
                 <div class="row mb-5 mt-4 ">
                                    <div class="col-md-7 col-lg-6 mx-auto"><a href="<?php echo site_url('store/cart_display/');?>"><button type="button" class="btn btn-block btn-outline-primary btn-lg">Edit Cart</button></a></div>
                                </div>
	 		</div>
            
            
		</section>
                              
	</main>
    
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope,$http) {
	
	$scope.qty = [];
var alldata =<?php echo $myvalue; ?>;
$scope.names = alldata.product_info;
$scope.total = alldata.total;
$scope.shipping = alldata.shipping;
$scope.product_total = alldata.product_total;
console.log(alldata.total);
    //$scope.names=
	//console.log($scope.names);
   
});

</script>
</body>
</html>
