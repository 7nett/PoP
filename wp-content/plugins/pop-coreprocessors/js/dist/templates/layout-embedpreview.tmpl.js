!function(){var e=Handlebars.template,a=Handlebars.templates=Handlebars.templates||{};a["layout-embedpreview"]=e({1:function(e,a,l,n,s){var t;return e.escapeExpression((t=null!=(t=l.id||(null!=a?a.id:a))?t:l.helperMissing,"function"==typeof t?t.call(a,{name:"id",hash:{},data:s}):t))},3:function(e,a,l,n,s){var t,r=e.escapeExpression;return" "+r((t=null!=(t=l.key||s&&s.key)?t:l.helperMissing,"function"==typeof t?t.call(a,{name:"key",hash:{},data:s}):t))+'="'+r(e.lambda(a,a))+'"'},5:function(e,a,l,n,s,t,r){var i,h=l.helperMissing,c=e.escapeExpression;return" "+c((i=null!=(i=l.key||s&&s.key)?i:h,"function"==typeof i?i.call(a,{name:"key",hash:{},data:s}):i))+'="#'+c((l.lastGeneratedId||a&&a.lastGeneratedId||h).call(a,{name:"lastGeneratedId",hash:{template:a,context:r[1]},data:s}))+'"'},compiler:[7,">= 4.0.0"],main:function(e,a,l,n,s,t,r){var i,h,c,p=l.helperMissing,d="function",u=e.escapeExpression,o='<div class="iframe-wrapper" ';return h=null!=(h=l.generateId||(null!=a?a.generateId:a))?h:p,c={name:"generateId",hash:{},fn:e.program(1,s,0,t,r),inverse:e.noop,data:s},i=typeof h===d?h.call(a,c):h,l.generateId||(i=l.blockHelperMissing.call(a,i,c)),null!=i&&(o+=i),o+'><iframe class="embedpreview '+u((h=null!=(h=l["class"]||(null!=a?a["class"]:a))?h:p,typeof h===d?h.call(a,{name:"class",hash:{},data:s}):h))+'" width="'+u((h=null!=(h=l.width||(null!=a?a.width:a))?h:p,typeof h===d?h.call(a,{name:"width",hash:{},data:s}):h))+'" height="'+u((h=null!=(h=l.height||(null!=a?a.height:a))?h:p,typeof h===d?h.call(a,{name:"height",hash:{},data:s}):h))+'" src="'+u((h=null!=(h=l.src||(null!=a?a.src:a))?h:p,typeof h===d?h.call(a,{name:"src",hash:{},data:s}):h))+'" frameborder="0" allowfullscreen="true" '+(null!=(i=l.each.call(a,null!=a?a.params:a,{name:"each",hash:{},fn:e.program(3,s,0,t,r),inverse:e.noop,data:s}))?i:"")+" "+(null!=(i=l.each.call(a,null!=a?a["previoustemplates-ids"]:a,{name:"each",hash:{},fn:e.program(5,s,0,t,r),inverse:e.noop,data:s}))?i:"")+"></iframe></div>"},useData:!0,useDepths:!0})}();