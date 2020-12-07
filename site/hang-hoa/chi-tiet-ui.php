<!DOCTYPE html>
<html>
    <head>
        <style>
        #myBtn{
                width: 150px;
                height: 40px;
                border: 1px solid yellowgreen;
                background: yellowgreen;
                border-radius: 5px;
                color: #fff;
            }
            #myBtn:hover{
                border: 1px solid red;
                background: red;
            }
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 50%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
            }

            /* Add Animation */
            @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0} 
            to {top:0; opacity:1}
            }

            @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
            }

            /* The Close Button */
            .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            }

            .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
            }

            .modal-body {padding: 2px 16px;}

            .modal-footer {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
            }
            .thumbnail{
              width:90%;
              display:grid;
              grid-template-columns:50% 50%;
            }
            
            .anhchitiet{
              width:450px;
              height:500px;
              margin-bottom:30px;
            }

        </style>
        <link rel="stylesheet" href="../../content/css/trangchuphu.css">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container py-3 my-3">
        <div class="thumbnail ">
    <div class="img ">
                    <img class="anhchitiet" src='<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>'>
                </div>
                  <div class="pr-5 m-3 caption ">
                      <p>
                          <ul >
                              <li class="text-3xl italic leading-loose themo "> <?=$ten_hh?></li>
                              <li class="text-lg themo ">Mã sách: <?=$ma_hh?></li><hr>
                              <li class="my-2 themo">Đơn giá: <?=number_format($don_gia, 0)?> đ</li><hr>
                              <li class="my-2 text-2xl font-bold text-red-600 underline themo "> Giảm giá: <?=number_format($giam_gia, 0) ?>đ </li><hr>
                           
                          </ul>
                      </p>
                      <button id="myBtn" class="w-20 my-2 border rounded-lg h-18">Xem thêm</button>
                        <div class="">
                          <button id="addcart" class="p-2 my-2 text-lg bg-red-300 rounded-lg w-30 h-25"> Thêm vào giỏ hàng </button>
                         
                          <button id="buy" class="p-2 my-2 text-lg bg-red-300 rounded-lg w-30 h-18"> Mua ngay </button>
                        </div>
                </div>
              </div>
            
            <?php require 'binh-luan.php';?>
            
            <?php require 'hang-cung-loai.php';?>
    </div>
        
    </body>
</html>


<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>product details</h2>
    </div>
    <div class="modal-body">
        <div class="mota"><?= $mo_ta ?></div>
    </div>
    <div class="modal-footer">
      <h3>product details</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>