!function(e){var t={};function n(i){if(t[i])return t[i].exports;var a=t[i]={i:i,l:!1,exports:{}};return e[i].call(a.exports,a,a.exports,n),a.l=!0,a.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)n.d(i,a,function(t){return e[t]}.bind(null,a));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=251)}({251:function(e,t,n){e.exports=n(288)},288:function(e,t,n){"use strict";function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}n.r(t);var a=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.slidePanelHtml=this.getSlidePanelHtml(t)}var t,n,a;return t=e,(n=[{key:"getSlidePanelHtml",value:function(e){e.slide.options=e.slide.options||this.getDefaultOptions();var t=_.template($("#slide-template").html());return $(t(e))}},{key:"getDefaultOptions",value:function(){return{caption_1:{},caption_2:{},direction:"left",call_to_action:{}}}},{key:"render",value:function(){return this.attachEventListeners(),this.showSelectedOptionBlock(),this.slidePanelHtml}},{key:"attachEventListeners",value:function(){var e=this;this.slidePanelHtml.find(".delete-slide").on("click",(function(){e.slidePanelHtml.remove()})),this.slidePanelHtml.find(".change-option-block").on("change",(function(t){e.slidePanelHtml.find(".slide-options").hide(),e.slidePanelHtml.find(".".concat(t.currentTarget.value)).show()}))}},{key:"showSelectedOptionBlock",value:function(){var e=this;setTimeout((function(){e.slidePanelHtml.find(".change-option-block").trigger("change")}))}}])&&i(t.prototype,n),a&&i(t,a),e}();function r(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}new(function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.slideCount=0,this.addSlides(FleetCart.data["slider.slides"]),0===this.slideCount&&this.addSlide(),this.attachEventListeners(),this.makeSlidesSortable()}var t,n,i;return t=e,(n=[{key:"addSlides",value:function(e){var t=!0,n=!1,i=void 0;try{for(var a,r=e[Symbol.iterator]();!(t=(a=r.next()).done);t=!0){var l=a.value;this.addSlide(l)}}catch(e){n=!0,i=e}finally{try{t||null==r.return||r.return()}finally{if(n)throw i}}}},{key:"addSlide",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=new a({slideNumber:this.slideCount++,slide:e});$("#slides-wrapper").append(t.render())}},{key:"attachEventListeners",value:function(){var e=this;$(".add-slide").on("click",(function(){e.addSlide()})),this.attachImagePickerEventListener()}},{key:"attachImagePickerEventListener",value:function(){$("#slides-wrapper").on("click",".slide-image",(function(e){new MediaPicker({type:"image"}).on("select",(function(t){var n='\n                    <img src="'.concat(t.path,'">\n                    <input type="hidden" name="slides[').concat(e.currentTarget.dataset.slideNumber,'][file_id]" value="').concat(t.id,'">\n                ');$(e.currentTarget).html(n)}))}))}},{key:"makeSlidesSortable",value:function(){Sortable.create(document.getElementById("slides-wrapper"),{handle:".slide-drag",animation:150})}}])&&r(t.prototype,n),i&&r(t,i),e}()),$("#autoplay").on("change",(function(e){$(".autoplay-speed-field").toggleClass("hide")})),window.admin.removeSubmitButtonOffsetOn("#slides")}});
//# sourceMappingURL=slider.js.map