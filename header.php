<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Terpadu</title>
    <link rel="stylesheet" href="css/gaya.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>


   <style type="text/css">
   	.flip-card {
	  background-color: transparent;
	  width: 300px;
	  height: 500px;
	  perspective: 1000px; 
	}

	.flip-card-inner {
	  position: relative;
	  width: 100%;
	  height: 100%;
	  text-align: center;
	  transition: transform 0.8s;
	  transform-style: preserve-3d;
	}

	.flip-card:hover .flip-card-inner {
	  transform: rotateY(180deg);
	}

	.flip-card-front, .flip-card-back {
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  -webkit-backface-visibility: hidden; 
	  backface-visibility: hidden;
	}

	.flip-card-front {
	  background-color: #bbb;
	  color: black;
	}


	.flip-card-back {
	  background-color: dodgerblue;
	  color: white;
	  transform: rotateY(180deg);
	}
   </style>