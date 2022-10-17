<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Horoscope</title>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-2">
				<div class="card" >
                <img src="images/aries.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">ARIES</h5>
                  <p class="card-text">Mar 21-Apr 20</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="aries">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/taurus.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">TAURUS</h5>
                  <p class="card-text">Apr 21-May 20</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="taurus">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/gemini.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">GEMINI</h5>
                  <p class="card-text">May 21-Jun 21</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="gemini">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/cancer.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CANCER</h5>
                  <p class="card-text">Jun 22-Jul 22</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="cancer">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/leo.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">LEO</h5>
                  <p class="card-text">Jul 23-Aug 23</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="leo">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/virgo.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">VIRGO</h5>
                  <p class="card-text">Aug 24-Sep 23</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="virgo">Click</a>
                </div>
              </div>
		</div>
		
	</div>
	<div class="row mt-5">
		<div class="col-md-2">
				<div class="card" >
                <img src="images/libra.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">LIBRA</h5>
                  <p class="card-text">Sep 24-Oct 23</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="libra">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/scorpion.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">SCORPIO</h5>
                  <p class="card-text">Oct 24-Nov 22</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="scorpio">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/sagitarius.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">SAGITTARIUS</h5>
                  <p class="card-text">Nov 23-Dec 21</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="sagitarius">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/capricorn.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CAPRICORN</h5>
                  <p class="card-text">Dec 22-Jan 21</p>
                  <a href="#" data-toggle="modal" data-target="#myModal" data-sign="capricon">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/aquarius.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">AQUARIUS</h5>
                  <p class="card-text">Jan 22-Feb 19</p>
                  <a href="#" data-toggle="modal" data-target="#myModal"  data-sign="aquarius">Click</a>
                </div>
              </div>
		</div>
		<div class="col-md-2">
				<div class="card" >
                <img src="images/pisces.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">PISCES</h5>
                  <p class="card-text">Feb 20-Mar 20</p>
                  <a href="#"data-toggle="modal" data-target="#myModal" data-sign="pisces">Click</a>
                  <!-- <p id="p1">abc</p> -->
                </div>
              </div>
              
		</div>
	</div>
</div>

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-right">Loading....</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Loading....</p>
      </div>
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>



  $("[data-sign]").click(function () {
        // var text = $(this).val($(this).attr("data-sign"));
        // console.log($(this).val($(this).attr("data-sign")));
        var sign = $(this).data().sign;
        // console.log(text);
          $.ajax({
          url:'http://sandipbgt.com/theastrologer/api/horoscope/'+sign+'/today/', 
          type:'get',
          success:function(res){
            // document.write(res);
            var response = jQuery.parseJSON(res);
            $(".modal-title").html(response.sunsign);
            body = '<p>' +response.date+ '</p>';
            body += '<p>' +response.horoscope+ '</p>';
            $(".modal-body").html(body);
          }
        });
    });



</script>

</body>
</html>