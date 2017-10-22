/*
	Mobile friendly-ish Lightbox
	Copyright 2014-04-11 Jake Nicholson (jakenicholson.co.uk)
	
	This is free and unencumbered software released into the public domain.

	Anyone is free to copy, modify, publish, use, compile, sell, or
	distribute this software, either in source code form or as a compiled
	binary, for any purpose, commercial or non-commercial, and by any
	means.
	
	In jurisdictions that recognize copyright laws, the author or authors
	of this software dedicate any and all copyright interest in the
	software to the public domain. We make this dedication for the benefit
	of the public at large and to the detriment of our heirs and
	successors. We intend this dedication to be an overt act of
	relinquishment in perpetuity of all present and future rights to this
	software under copyright law.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
	MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
	IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
	OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
	ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
	OTHER DEALINGS IN THE SOFTWARE.
	
	For more information, please refer to <http://unlicense.org/>
*/
(function($) {
	$.fn.lightBox = function(){
		var t;
		t = $(this);
		
		function finishHim(oImage){
			$('#lightBox').fadeOut(200, function(){
				$('#overlay').fadeOut(200, function(){
					oImage.src = '';
				});
			});
		}
		
		function getFullHeight(o, bIncludeMargin){
			bIncludeMargin = typeof(bIncludeMargin) === 'undefined' ? false : !!bIncludeMargin;
			
			if($(o).length > 0){
			
				var iHeight;
				
				iHeight = parseInt($(o).height());
				
				if(!!$(o).css('padding-top')){
					iHeight += parseInt($(o).css('padding-top'));
				}
				if(!!$(o).css('padding-bottom')){
					iHeight += parseInt($(o).css('padding-bottom'));
				}
				if(!!$(o).css('border-top-width')){
					iHeight += parseInt($(o).css('border-top-width'));
				}
				if(!!$(o).css('border-bottom-width')){
					iHeight += parseInt($(o).css('border-bottom-width'));
				}
				if(bIncludeMargin){
					if(!!$(o).css('margin-top')){
						iHeight += parseInt($(o).css('margin-top'));
					}
					if(!!$(o).css('padding-bottom')){
						iHeight += parseInt($(o).css('margin-bottom'));
					}
				}
				
				return iHeight;
			
			} else {
			
				return 0;
			
			}
			
		}
		
		function getFullWidth(o, bIncludeMargin){
			bIncludeMargin = typeof(bIncludeMargin) === 'undefined' ? false : !!bIncludeMargin;
			
			if($(o).length > 0){
			
				var iWidth;
				
				iWidth = parseInt($(o).width());
				
				if(!!$(o).css('padding-left')){
					iWidth += parseInt($(o).css('padding-left'));
				}
				if(!!$(o).css('padding-right')){
					iWidth += parseInt($(o).css('padding-right'));
				}
				if(!!$(o).css('border-left-width')){
					iWidth += parseInt($(o).css('border-left-width'));
				}
				if(!!$(o).css('border-right-width')){
					iWidth += parseInt($(o).css('border-right-width'));
				}
				if(bIncludeMargin){
					if(!!$(o).css('margin-left')){
						iWidth += parseInt($(o).css('margin-left'));
					}
					if(!!$(o).css('padding-right')){
						iWidth += parseInt($(o).css('margin-right'));
					}
				}
				
				return iWidth;
			
			} else {
			
				return 0;
			
			}
			
		}
		
		function resizeX(oImage){
			
			var iMaxX, iWinX, iImgX;
			
			iWinX = $(window).width() - 60;
			iImgX = getFullWidth(oImage);
			iMaxX = iWinX - (getFullWidth($('#lightBox .container')) - iImgX);
			
			if(iImgX > iMaxX){
				
				var iNewX;
				
				iNewX = iMaxX;
				
				$(oImage).css({
					'width' : iMaxX + 'px'
				});
				
				$('#lightBox .container').css({
					'width' : iMaxX + 'px'
				});
			
				resizeY(oImage);
			
			} else {
				
				$('#lightBox .container').css({
					'width' : iImgX + 'px'
				});
			
			}
			
		}
		
		function resizeY(oImage){
			
			var iMaxY, iWinY, iImgY;
			
			iWinY = $(window).height() - 60;
			iImgY = getFullHeight(oImage);
			iMaxY = iWinY - (getFullHeight($('#lightBox .container')) - iImgY);
			
			if(iImgY > iMaxY){
				
				var iNewY;
				
				iNewY = iMaxY;
				
				$(oImage).css({
					'height' : iMaxY + 'px'
				});
				
				$('#lightBox .container').css({
					'height' : (iMaxY + getFullHeight($('#lightBox .data'))) + 'px'
				});
			
				resizeX(oImage);
				
				iImgY = iNewY;
			
			} else {
				
				$('#lightBox .container').css({
					'height' : (iImgY + getFullHeight($('#lightBox .data'))) + 'px'
				});
			
			}
			
			$('#lightBox .container').css({
				'top' : ($(window).scrollTop() + 30 + ((iWinY - getFullHeight($('#lightBox .container'))) * 0.5)) + 'px'
			});
		}
		
		function setDimensions(oImage){
			
			$(oImage).removeAttr('width').removeAttr('height').removeAttr('style');
			$('.container').css({
				'height' : 'auto',
				'width' : 'auto'
			});
			
			resizeY(oImage);
			resizeX(oImage);
			
		}
		
		function swapImage(oImages, oImage, iIndex){
			
			var sOldSrc, oNewImage;
			
			oNewImage = oImages[iIndex];
			oNewImage.href = oNewImage.href.replace(window.location.origin, '');/* people add the host for no reason */
			
			sOldSrc = oImage.src;
			sOldSrc = sOldSrc.replace(window.location.origin, '');/* browsers add the host for no reason */
			
			$('#overlay').fadeIn(100);
			$('#lightBox').fadeIn(100);
			
			if(sOldSrc === oNewImage.href){
			} else {
			
				$(oImage).fadeTo(100, 0.01, 'linear', function(){
					$('#lightBox .data').html(oNewImage.title);
					oImage.src = oNewImage.href;
				});
			}
			
			$(document).off('click tap', '#nextImage');
			$(document).off('click tap', '#prevImage');
			
			$(document).on('click tap', '#nextImage', function(event){
				event.stopImmediatePropagation();
				moveNext(oImages, oImage, iIndex);
			});
			
			$(document).on('click tap', '#prevImage', function(event){
				event.stopImmediatePropagation();
				movePrev(oImages, oImage, iIndex);
			});
			
		}
		
		function moveNext(oImages, oImage, iIndex){
			
			$('#lightBox .imageLoading').show();
			
			iIndex += 1;
			
			if(iIndex === oImages.length){
				iIndex = 0;
			}
			
			swapImage(oImages, oImage, iIndex);
		}
		
		function movePrev(oImages, oImage, iIndex){
			
			var z;
			z = oImages.length;
			
			$('#lightBox .imageLoading').show();
			
			if(iIndex === 0){
				iIndex = z - 1;
			} else {
				iIndex -= 1;
			}
			
			swapImage(oImages, oImage, iIndex);
		}
		
		function bindEvents(oImages, oImage){
			
			if(typeof(oImage) !== 'undefined'){
			
				$(t).on('click tap', function(event){
					event.preventDefault();
					event.stopImmediatePropagation();/* Android will fire twice unless we use stopImmediatePropagation */
					$('#lightBox .imageLoading').show();
					
					var iIndex;
					iIndex = $(this).attr('data-id');
					
					if(isNaN(iIndex)) {
						iIndex = 0;
					} else {
						iIndex = parseInt(iIndex);
					}
					
					swapImage(oImages, oImage, iIndex);
				});
				
				$(document).on('click tap', '#lightBox, #closeBtn, #overlay', function(event){
					event.stopImmediatePropagation();
					finishHim(oImage);
				});
				
				$(document).on('click tap', '.container', function(event){
					event.stopPropagation();/* make sure clicking on .container doesn't trigger click on #overlay */
				});
				
				oImage.onload = function(){
				
					setDimensions(oImage);
					$(oImage).fadeTo(400, 1);
				};
				/* Can't do any error handling as Internet Explorer _always_ fires the onerror event when loading images. */
				
				var f;
				$(window).resize(function(){/* prolly a biiiig performance hit doing stuff everytime this fires so just do stuff after 100ms have passed (post-resize) */
					clearTimeout(f);
					f = setTimeout(function(){setDimensions(oImage);}, 100);
				});
				$(window).on('orientationchange', $(window).resize());
			
			}
			
		}
		
		function init(){
			var i, iMax, oImages, oImage;
			i = 0;
			iMax = t.length;
			oImages = [];
			while(i < iMax){
				var sHref, oAnc, i2, b, iDup;
				oAnc = t[i];
				sHref = oAnc.href;
				i2 = oImages.length;
				b = false;
				while(i2 > 0 && !b){/* check for duplicates */
					i2 -= 1;
					if(sHref === oImages[i2].href){
						iDup = i2;
						b = true;
						break;
					}
				}
				if(!b){
					$(oAnc).attr('data-id', oImages.length);
					oImages.push({'href' : sHref, 'title' : oAnc.title});
				} else {
					$(oAnc).attr('data-id', iDup);
				}
				i += 1;
			}
			if(!document.getElementById('lightBox')){
				$('body').append('<div id="overlay"></div><div id="lightBox"><span class="container"><span class="image"><a href="javascript:void(0);" id="closeBtn"></a><a href="javascript:void(0);" id="nextImage" class="navigatory"></a><a href="javascript:void(0);" id="prevImage" class="navigatory"></a></span><span class="data"></span></span></div>');
				oImage = new Image();
				$('#lightBox .image').append(oImage);
			}
			$('#lightBox').hide();
			
			bindEvents(oImages, oImage);
		}
		
		init();
	};
})(jQuery);