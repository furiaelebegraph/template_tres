$(document).ready(function(){    
  $('.nav-item a').on('click', function(){
      console.log('potato');
      $('.nav-item').removeClass('active');
      $(this).parent().addClass('active');
    });



    $('#mensaje_email').delay(2000).fadeOut("slow");


		$('.aparece div:first-child').addClass( "active" );
		$('.carousel-indicators li').first(function(){
			var current = $(this).addClass('active');
		});

      $('#slide_texto').slidesjs({
        width: 940,
        height: 328,
        effect: {
          fade: {
            speed: 600
          }
        },
        navigation: {
          active: false,
          effect: "fade"
        },
        pagination: {
          active: false,
          effect: "fade"
        },
        play: {
        active: false,
          // [boolean] Generate the play and stop buttons.
          // You cannot use your own buttons. Sorry.
        interval: 5000,
          // [number] Time spent on each slide in milliseconds.
        auto: true,
          // [boolean] Start playing the slideshow on load.
        swap: true,
        effect: "fade",
          // [boolean] show/hide stop and play buttons
        pauseOnHover: false,
          // [boolean] pause a playing slideshow on hover
        restartDelay: 2500
          // [number] restart delay on inactive slideshow
      }
      });

      $('#slides').slidesjs({
        width: 940,
        height: 328,
        effect: {
          fade: {
            speed: 600
          }
        },
        navigation: {
          active: false,
          effect: "fade"
        },
        pagination: {
          active: false,
          effect: "fade"
        },
        play: {
	      active: false,
	        // [boolean] Generate the play and stop buttons.
	        // You cannot use your own buttons. Sorry.
	      interval: 5000,
	        // [number] Time spent on each slide in milliseconds.
	      auto: true,
	        // [boolean] Start playing the slideshow on load.
	      swap: true,
	      effect: "fade",
	        // [boolean] show/hide stop and play buttons
	      pauseOnHover: false,
	        // [boolean] pause a playing slideshow on hover
	      restartDelay: 2500
	        // [number] restart delay on inactive slideshow
	    }
      });

      $('#selectCatego').on('change', function(e){
      	$('#subcate').attr('disabled', false);
      	$('#seleProdu').attr('disabled', true);
      	var item=$(this);
      	console.log(item.val());
		$.get('ajaxSucate/'+ item.val()+'', function(data){
            $('#subcate').empty();
            $('#subcate').append('<option disabled selected value> Selecciona una subcategoria </option>');
            $.each(data, function(index, subareaObj){
                $('#subcate').append('<option value="'+ subareaObj.id+'">'+ subareaObj.nombre +'</option>');
            });
        });
      });

      $('#subcate').on('change',function(){
      	$('#seleProdu').attr('disabled', false);
      	var items=$(this);
      	console.log(items.val());
		$.get('ajaxProdu/'+ items.val()+'', function(data){
            $('#seleProdu').empty();
            $('#seleProdu').append('<option disabled selected value> Selecciona un producto</option>');
            $.each(data, function(index, produObj){
                $('#seleProdu').append('<option value="'+ produObj.id+'">'+ produObj.nombre +'</option>');
            });
        });
      });
      $('#seleProdu').on('change',function(){
      	var itemsIma=$(this);
      	console.log(itemsIma.val());
		$.get('ajaxIma/'+ itemsIma.val()+'', function(data){
            $('.aparece').empty();
            $('#thumbs_galeria').empty();
            $.each(data, function(index, imaObj){
                $('.aparece').append('<div class="item carousel-item" data-slide-number="'+index+'"><img src="'+imaObj.imagen+'" class="img-fluid">');
				$('.carousel-indicators').append('<li class="list-inline-item"><a id="carousel-selector-'+index+'" data-slide-to="'+index+'" data-target="#myCarousel"><img src="'+imaObj.imagen+'" class="img-fluid"></a></li>');
                $('.aparece div:first-child').addClass( "active" );
            });
        });
      });
});

