<!DOCTYPE html>

<html class="no-js" lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <style type="text/css">
        	
        	
.pe-thumbs:before {
	content: "";
	display: inline-block;
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	background: rgba(255,102,0,0.2);
}
.pe-thumbs li{
	float:left;
	position: relative;
	display: block;
}

.pe-thumbs li a img{
	width:200px;
	
}
.pe-thumbs li a div.pe-description{
	width: 400px;
	height: 200px;
	background: rgba(111,76,51,0.8);
	position: absolute;
	top: 0px;
	left: -200px;
	color: white;
	display: none;
	z-index: 1001;
	text-align: left;
}
.pe-description h3{
	padding: 10px 10px 0px 10px;
	line-height: 20px;
	font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
	font-size: 22px;
	margin: 0px;
}
.pe-description p{
	padding: 10px 0px;
	margin: 10px;
	font-size: 11px;
	font-style: italic;
	border-top: 1px solid rgba(255,255,255,0.3);
}
        </style>
    </head>
    <body id="page">
        <div class="container">
			<!-- Codrops top bar -->
            
			<section class="pe-container">
				<ul id="pe-thumbs" class="pe-thumbs">
					<li><a href="#"><img src="images/thumbs/1.jpg" /><div class="pe-description"><h3>time</h3><p>Since time, and his predestinated end</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/2.jpg" /><div class="pe-description"><h3>hopeful</h3><p>Abridged the circuit of his hopeful days</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/3.jpg" /><div class="pe-description"><h3>virtue</h3><p>Whiles both his youth and virtue did intend</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/4.jpg" /><div class="pe-description"><h3>endeavors</h3><p>The good endeavors of deserving praise</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/5.jpg" /><div class="pe-description"><h3>monument</h3><p>What memorable monument can last</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/6.jpg" /><div class="pe-description"><h3>name</h3><p>Whereon to build his never-blemished name</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/7.jpg" /><div class="pe-description"><h3>life was graced</h3><p>But his own worth, wherein his life was graced</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/8.jpg" /><div class="pe-description"><h3>the same</h3><p>Sith as that ever he maintained the same?</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/9.jpg" /><div class="pe-description"><h3>oblivion</h3><p>Oblivion in the darkest day to come</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/10.jpg" /><div class="pe-description"><h3>sin shall tread</h3><p>When sin shall tread on merit in the dust</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/11.jpg" /><div class="pe-description"><h3>lamentable tomb</h3><p>Cannot rase out the lamentable tomb</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/12.jpg" /><div class="pe-description"><h3>short-lived deserts</h3><p>Of his short-lived deserts; but still they must</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/13.jpg" /><div class="pe-description"><h3>hearts and memories</h3><p>Even in the hearts and memories of men</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/14.jpg" /><div class="pe-description"><h3>respect</h3><p>Claim fit respect, that they, in every limb</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/15.jpg" /><div class="pe-description"><h3>comfort</h3><p>Remembering what he was, with comfort then</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/16.jpg" /><div class="pe-description"><h3>pattern</h3><p>May pattern out one truly good, by him</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/17.jpg" /><div class="pe-description"><h3>truly good</h3><p>For he was truly good, if honest care</p></div></a></li>
					<li><a href="#"><img src="images/thumbs/18.jpg" /><div class="pe-description"><h3>harmless conversation</h3><p>Of harmless conversation may commend</p></div></a></li>
				
				</ul>
			</section>
        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.proximity.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Photo	= (function() {
					
						// list of thumbs
					var $list		= $('#pe-thumbs'),
						// list's width and offset left.
						// this will be used to know the position of the description container
						listW		= $list.width(),
						listL		= $list.offset().left,
						// the images
						$elems		= $list.find('img'),
						// the description containers
						$descrp		= $list.find('div.pe-description'),
						// maxScale : maximum scale value the image will have
						// minOpacity / maxOpacity : minimum (set in the CSS) and maximum values for the image's opacity
						settings	= {
							maxScale	: 1.3,
							maxOpacity	: 0.9,
							minOpacity	: Number( $elems.css('opacity') )
						},
						init		= function() {
							
							// minScale will be set in the CSS
							settings.minScale = _getScaleVal() || 1;
							// preload the images (thumbs)
							_loadImages( function() {
								
								_calcDescrp();
								_initEvents();
							
							});
						
						},
						// Get Value of CSS Scale through JavaScript:
						_getScaleVal= function() {
						
							var st = window.getComputedStyle($elems.get(0), null),
								tr = st.getPropertyValue("-webkit-transform") ||
									 st.getPropertyValue("-moz-transform") ||
									 st.getPropertyValue("-ms-transform") ||
									 st.getPropertyValue("-o-transform") ||
									 st.getPropertyValue("transform") ||
									 "fail...";

							if( tr !== 'none' ) {	 

								var values = tr.split('(')[1].split(')')[0].split(','),
									a = values[0],
									b = values[1],
									c = values[2],
									d = values[3];

								return Math.sqrt( a * a + b * b );
							
							}
							
						},
						// calculates the style values for the description containers,
						// based on the settings variable
						_calcDescrp	= function() {
							
							$descrp.each( function(i) {
							
								var $el		= $(this),
									$img	= $el.prev(),
									img_w	= $img.width(),
									img_h	= $img.height(),
									img_n_w	= settings.maxScale * img_w,
									img_n_h	= settings.maxScale * img_h,
									space_t = ( img_n_h - img_h ) / 2,
									space_l = ( img_n_w - img_w ) / 2;
								
								$el.data( 'space_l', space_l ).css({
									height	: settings.maxScale * $el.height(),
									top		: -space_t,
									left	: img_n_w - space_l
								});
							
							});
						
						},
						_initEvents	= function() {
						
							$elems.on('proximity.Photo', { max: 80, throttle: 10, fireOutOfBounds : true }, function(event, proximity, distance) {
								
								var $el			= $(this),
									$li			= $el.closest('li'),
									$desc		= $el.next(),
									scaleVal	= proximity * ( settings.maxScale - settings.minScale ) + settings.minScale,
									scaleExp	= 'scale(' + scaleVal + ')';
								
								// change the z-index of the element once it reaches the maximum scale value
								// also, show the description container
								if( scaleVal === settings.maxScale ) {
									
									$li.css( 'z-index', 1000 );
									
									if( $desc.offset().left + $desc.width() > listL + listW ) {
										
										$desc.css( 'left', -$desc.width() - $desc.data( 'space_l' ) );
									
									}
									
									$desc.fadeIn( 800 );
									
								}	
								else {
									
									$li.css( 'z-index', 1 );
								
									$desc.stop(true,true).hide();
								
								}	
								
								$el.css({
									'-webkit-transform'	: scaleExp,
									'-moz-transform'	: scaleExp,
									'-o-transform'		: scaleExp,
									'-ms-transform'		: scaleExp,
									'transform'			: scaleExp,
									'opacity'			: ( proximity * ( settings.maxOpacity - settings.minOpacity ) + settings.minOpacity )
								});

							});
						
						},
						_loadImages	= function( callback ) {
							
							var loaded 	= 0,
								total	= $elems.length;
							
							$elems.each( function(i) {
								
								var $el = $(this);
								
								$('<img/>').load( function() {
									
									++loaded;
									if( loaded === total )
										callback.call();
									
								}).attr( 'src', $el.attr('src') );
							
							});
						
						};
					
					return {
						init	: init
					};
				
				})();
				
				Photo.init();
				
			});



(function($){
    
    var elems = $([]),
        doc = $(document);
    
    $.event.special.proximity = {
        
        defaults: {
            max: 100,
            min: 0,
            throttle: 0,
            fireOutOfBounds: 1
        },
        
        setup: function(data) {
            
            if (!elems[0])
                doc.mousemove(handle);
            
            elems = elems.add(this);
            
        },
        
        add: function(o) {
            
            var handler = o.handler,
                data = $.extend({}, $.event.special.proximity.defaults, o.data),
                lastCall = 0,
                nFiredOutOfBounds = 0,
                hoc = $(this);
            
            o.handler = function(e, pageX, pageY) {
                
                var max = data.max,
                    min = data.min,
                    throttle = data.throttle,
                    date = +new Date,
                    distance,
                    proximity,
                    inBounds,
                    fireOutOfBounds = data.fireOutOfBounds;
                
                if (throttle && lastCall + throttle > date) {
                    return;
                }
                
                lastCall = date;
                
                distance = calcDistance(hoc, pageX, pageY);
                inBounds = distance < max && distance > min;
                
                if (fireOutOfBounds || inBounds) {
                    
                    if (inBounds) {
                        nFiredOutOfBounds = 0;
                    } else {
                        
                        // If fireOutOfBounds is a number then keep incrementing a
                        // counter to determine how many times the handler's been
                        // called out of bounds. Note: the counter is reset whenever
                        // the cursor goes back inBounds...
                        
                        if (typeof fireOutOfBounds === 'number' && nFiredOutOfBounds > fireOutOfBounds) {
                            return;
                        }
                        ++nFiredOutOfBounds;
                    }
                
                    proximity = e.proximity = 1 - (
                        distance < max ? distance < min ? 0 : distance / max : 1
                    );
                    
                    e.distance = distance;
                    e.pageX = pageX;
                    e.pageY = pageY;
                    e.data = data;
                    
                    return handler.call(this, e, proximity, distance);
                
                }
                
            };
            
        },
        
       
        
    };
    
    function calcDistance(el, x, y) {
        
        // Calculate the distance from the closest edge of the element
        // to the cursor's current position
        
        var left, right, top, bottom, offset,
            cX, cY, dX, dY,
            distance = 0;
        
        offset = el.offset();
        left = offset.left;
        top = offset.top;
        right = left + el.outerWidth();
        bottom = top + el.outerHeight();
        
        cX = x > right ? right : x > left ? x : left;
        cY = y > bottom ? bottom : y > top ? y : top;
        
        dX = Math.abs( cX - x );
        dY = Math.abs( cY - y );
        
        return Math.sqrt( dX * dX + dY * dY );
            
    }
    
    function handle(e) {
        
        var x = e.pageX,
            y = e.pageY,
            i = -1,
            fly = $([]);
        
        while (fly[0] = elems[++i]) {
            fly.triggerHandler('proximity', [x,y]);
        }
        
    }
    
}(jQuery));
		</script>
    </body>
</html>