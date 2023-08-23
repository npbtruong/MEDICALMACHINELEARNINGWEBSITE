/* 
	TYPIST 
	hiệu ứng văn bản Gõ tự động thanh lịch, cho nhu cầu xoay văn bản của bạn
*/
(function(){var t,e=function(t,e){return function(){return t.apply(e,arguments)}},i={}.hasOwnProperty,s=function(t,e){function s(){this.constructor=t}for(var n in e)i.call(e,n)&&(t[n]=e[n]);return s.prototype=e.prototype,t.prototype=new s,t.__super__=e.prototype,t};t=function(){function t(){this._fireEvent=e(this._fireEvent,this),this._empty=e(this._empty,this),this._each=e(this._each,this)}return t.prototype._addEvent=function(t,e,i,s){return null==s&&(s=!1),t.addEventListener(e,i,s)},t.prototype._forEach=function(t,e,i){var s,n,r;for(s=0,n=t.length,r=[];n>s;)s in t&&e.call(i,t[s],s,t),r.push(s++);return r},t.prototype._each=function(t,e,i){return t?(this._forEach(t,e,i),t):void 0},t.prototype._pass=function(t,e,i){return null==e&&(e=[]),function(){return t.apply(i,e)}},t.prototype._delay=function(t,e,i,s){return null==s&&(s=[]),setTimeout(this._pass(t,s,i),e)},t.prototype._periodical=function(t,e,i,s){return null==s&&(s=[]),setInterval(this._pass(t,s,i),e)},t.prototype._setHtml=function(t,e){return t.innerHTML=e},t.prototype._getHtml=function(t){return t.innerHTML},t.prototype._empty=function(t){return this._setHtml(t,"")},t.prototype._fireEvent=function(t,e){return this.options[t]?this.options[t].call(this,e,this.options):void 0},t.prototype._extend=function(t,e){var i,s;for(i in e)s=e[i],t[i]=s;return t},t}(),this.Typist=function(t){function i(t,i){null==i&&(i={}),this.typeLetter=e(this.typeLetter,this),this.typeText=e(this.typeText,this),this.selectOffset=e(this.selectOffset,this),this.selectText=e(this.selectText,this),this.fetchVariations=e(this.fetchVariations,this),this.next=e(this.next,this),this.start=e(this.start,this),this.setupDefaults=e(this.setupDefaults,this),this.options={typist:t,letterSelectInterval:60,interval:3e3,selectClassName:"selectedText"},this.options=this._extend(this.options,i),this.elements={typist:this.options.typist},this.offsets={current:{index:0,text:""}},this.elements.typist&&this.setupDefaults()}return s(i,t),i.prototype.setupDefaults=function(){return this.variations=this.fetchVariations(this.elements.typist),this._delay(this.start,this.options.interval)},i.prototype.start=function(){return this.currentVariation=this.variations[this.offsets.current.index],this.offsets.current.text=this.currentVariation.split(""),this.selectText()},i.prototype.next=function(){return this.offsets.current.index++,this.offsets.current.index=this.offsets.current.index%this.variations.length,this.currentVariation=this.variations[this.offsets.current.index],this.offsets.current.text=this.currentVariation.split("")},i.prototype.fetchVariations=function(t){var e,i,s,n,r,o,h;for(i=t.getAttribute("data-typist"),i=i.replace(/\\'/g,"'"),i=i.replace(/\\,/g,"!COMMA!"),r=i.split(","),e=o=0,h=r.length;h>o;e=++o)s=r[e],r[e]=s.replace(/!COMMA!/g,",");for(n=this._getHtml(t),r.splice(0,0,n),e=0;e<r.length;)""===r[e]?r.splice(e,1):e++;return r},i.prototype.selectText=function(t){var e;return null==t&&(t=0),e=this.offsets.current.text.length-t-1,e>=0&&this.selectOffset(e),e>0?this._delay(function(e){return function(){return e.selectText(t+1)}}(this),this.options.letterSelectInterval):this._delay(function(t){return function(){return t.next(),t.typeText()}}(this),this.options.letterSelectInterval)},i.prototype.selectOffset=function(t){var e,i,s;return i=this.offsets.current.text,e=i.slice(t,i.length).join(""),s=i.slice(0,t).join(""),this._setHtml(this.elements.typist,""+s+'<em class="'+this.options.selectClassName+'">'+e+"</em>")},i.prototype.typeText=function(){return this.typeTextSplit=this.currentVariation.split(""),this.typeLetter(),this._fireEvent("onSlide",this.currentVariation)},i.prototype.typeLetter=function(t){var e;return null==t&&(t=0),e=this.typeTextSplit[t],0===t&&(this.elements.typist.innerHTML=""),this.elements.typist.innerHTML+=e,t+1>=this.typeTextSplit.length?this._delay(function(t){return function(){return t.selectText()}}(this),this.options.interval):this._delay(function(e){return function(){return e.typeLetter(t+1)}}(this),this.options.letterSelectInterval)},i}(t)}).call(this);