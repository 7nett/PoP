!function(){var a=Handlebars.template,e=Handlebars.templates=Handlebars.templates||{};e["anchor-control"]=a({1:function(a,e,n,l,t){var s;return a.escapeExpression((s=null!=(s=n.id||(null!=e?e.id:e))?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"id",hash:{},data:t}):s))},3:function(a,e,n,l,t){var s;return'target="'+a.escapeExpression((s=null!=(s=n.target||(null!=e?e.target:e))?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"target",hash:{},data:t}):s))+'"'},5:function(a,e,n,l,t){var s,r=a.escapeExpression;return" "+r((s=null!=(s=n.key||t&&t.key)?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"key",hash:{},data:t}):s))+'="'+r(a.lambda(e,e))+'"'},7:function(a,e,n,l,t,s,r){var o,i,c=n.helperMissing,u=a.escapeExpression;return" "+u((i=null!=(i=n.key||t&&t.key)?i:c,"function"==typeof i?i.call(e,{name:"key",hash:{},data:t}):i))+'="'+u((n.get||e&&e.get||c).call(e,null!=(o=null!=r[1]?r[1].bs:r[1])?o.feedback:o,e,{name:"get",hash:{},data:t}))+'"'},9:function(a,e,n,l,t,s,r){var o,i=n.helperMissing,c=a.escapeExpression;return" "+c((o=null!=(o=n.key||t&&t.key)?o:i,"function"==typeof o?o.call(e,{name:"key",hash:{},data:t}):o))+'="#'+c((n.lastGeneratedId||e&&e.lastGeneratedId||i).call(e,{name:"lastGeneratedId",hash:{template:e,context:r[1]},data:t}))+'"'},11:function(a,e,n,l,t){return"<h4>"},13:function(a,e,n,l,t){var s;return'<span class="glyphicon '+a.escapeExpression((s=null!=(s=n.icon||(null!=e?e.icon:e))?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"icon",hash:{},data:t}):s))+'"></span> '},15:function(a,e,n,l,t){var s;return'<i class="fa fa-fw '+a.escapeExpression((s=null!=(s=n.fontawesome||(null!=e?e.fontawesome:e))?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"fontawesome",hash:{},data:t}):s))+'"></i>'},17:function(a,e,n,l,t){var s,r;return'<span class="'+a.escapeExpression(a.lambda(null!=(s=null!=e?e.classes:e)?s.text:s,e))+'">'+(null!=(r=null!=(r=n.text||(null!=e?e.text:e))?r:n.helperMissing,s="function"==typeof r?r.call(e,{name:"text",hash:{},data:t}):r)?s:"")+"</span>"},19:function(a,e,n,l,t){return"</h4>"},compiler:[7,">= 4.0.0"],main:function(a,e,n,l,t,s,r){var o,i,c,u=n.helperMissing,p="function",h=a.escapeExpression,f="<a ";return i=null!=(i=n.generateId||(null!=e?e.generateId:e))?i:u,c={name:"generateId",hash:{},fn:a.program(1,t,0,s,r),inverse:a.noop,data:t},o=typeof i===p?i.call(e,c):i,n.generateId||(o=n.blockHelperMissing.call(e,o,c)),null!=o&&(f+=o),f+' href="'+h((i=null!=(i=n.href||(null!=e?e.href:e))?i:u,typeof i===p?i.call(e,{name:"href",hash:{},data:t}):i))+'" role="button" class="'+h((i=null!=(i=n["class"]||(null!=e?e["class"]:e))?i:u,typeof i===p?i.call(e,{name:"class",hash:{},data:t}):i))+'" title="'+h((i=null!=(i=n.label||(null!=e?e.label:e))?i:u,typeof i===p?i.call(e,{name:"label",hash:{},data:t}):i))+'" '+(null!=(o=n["if"].call(e,null!=e?e.target:e,{name:"if",hash:{},fn:a.program(3,t,0,s,r),inverse:a.noop,data:t}))?o:"")+" "+(null!=(o=n.each.call(e,null!=e?e.params:e,{name:"each",hash:{},fn:a.program(5,t,0,s,r),inverse:a.noop,data:t}))?o:"")+" "+(null!=(o=n.each.call(e,null!=e?e["blockfeedback-params"]:e,{name:"each",hash:{},fn:a.program(7,t,0,s,r),inverse:a.noop,data:t}))?o:"")+" "+(null!=(o=n.each.call(e,null!=e?e["previoustemplates-ids"]:e,{name:"each",hash:{},fn:a.program(9,t,0,s,r),inverse:a.noop,data:t}))?o:"")+">\n	"+(null!=(o=n["if"].call(e,null!=e?e["make-title"]:e,{name:"if",hash:{},fn:a.program(11,t,0,s,r),inverse:a.noop,data:t}))?o:"")+(null!=(o=n["if"].call(e,null!=e?e.icon:e,{name:"if",hash:{},fn:a.program(13,t,0,s,r),inverse:a.noop,data:t}))?o:"")+(null!=(o=n["if"].call(e,null!=e?e.fontawesome:e,{name:"if",hash:{},fn:a.program(15,t,0,s,r),inverse:a.noop,data:t}))?o:"")+(null!=(o=n["if"].call(e,null!=e?e.text:e,{name:"if",hash:{},fn:a.program(17,t,0,s,r),inverse:a.noop,data:t}))?o:"")+(null!=(o=n["if"].call(e,null!=e?e["make-title"]:e,{name:"if",hash:{},fn:a.program(19,t,0,s,r),inverse:a.noop,data:t}))?o:"")+"\n</a>"},useData:!0,useDepths:!0})}();